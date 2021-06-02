<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
use App\Models\paymentLog;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class paymentcontroller extends Controller
{
    public function customerpayment(){
        $user = Auth::user();
        $payment = DB::table('payments')->where('user_id', '=', $user->id)->get();
        $userPackage = DB::table('users')->where('id', '=', $user->id)->value('packageID');
        if($userPackage != null) $currentPackage = DB::table('packages')->where('id', '=', $userPackage)->first();
        else $currentPackage = null;
        return view('payment.payment')->with(compact('payment', 'currentPackage'));
    }

    public function addpay(Request $request){
        $request -> validate([
            'Name' => 'required|max:255',
            'LastName' => 'required|max:255',
            'CardID' => 'required|max:16 | min:16',
            'CVV' => 'required|max:3 | min:3',
            'MM' => 'required|max:2|min:2',
            'YY' => 'required|max:2|min:2'
        ]);
        
        $query = DB::table('payments')
        ->where([['user_id', '=', Auth::user()->id], ['card_id', '=', $request->CardID]])
        ->first();

        if($query == null) {
            $payment = new payment;
            $payment -> user_id = Auth:: user() -> id;
            $payment -> name = $request -> Name;
            $payment -> lastname = $request -> LastName;
            $payment -> card_id = $request -> CardID;
            $payment -> typecard = $request -> gridRadios;
            $payment -> cvv = $request -> CVV;
            $payment -> mmyy = $request->MM."/".$request->YY;
            $payment -> save();

            $creditCard = DB::table('payments')
            ->where([['user_id', '=', Auth::user()->id], ['card_id', '=', $request->CardID]])
            ->value('id');

            return redirect(route('viewPackage'))->with('cardID', $creditCard);
        }
        
        return redirect()->back()->with('warningMessage', 'Already has this credit card');
    }

    public function viewPackage(Request $request) {
        $user = Auth::user();
        $package = DB::table('packages')->get();

        //Show user's current package
        $userPackage = DB::table('users')->where('id', '=', $user->id)->value('packageID');
        if($userPackage != null) $currentPackage = DB::table('packages')->where('id', '=', $userPackage)->first();
        else $currentPackage = null;

        //Check pay day
        $dateNow = Carbon::now();
        $datePayment = DB::table('payment_logs')->where('userID', '=', $user->id)->orderBy('paymentDate', 'desc')->first();
        if($dateNow->greaterThanOrEqualTo($datePayment)) $active = FALSE;
        else $active = TRUE;

        //get card id(in database, not a card number)
        $selectID = $request->selectID;

        return View::make('payment.package')->with(compact('package', 'currentPackage', 'active', 'selectID'));
    }

    public function createPaymentLog(Request $request) {
        $user = Auth::user();

        DB::table('users')
        ->where('id', '=', $user->id)
        ->update(['packageID' => $request->packageID]);

        $dateNow = Carbon::now();
        $dateNext = $dateNow->addDays(30);

        $cardID = DB::table('payments')->where('id', '=', $request->creditID_DBMS)->value('card_id');

        $paymentLog = new paymentLog;
        $paymentLog->userID = $user->id;
        $paymentLog->paymentDate = $dateNext;
        $paymentLog->cardID = $cardID;
        $paymentLog->save();

        return redirect(route('dashboard'));
    }

    public function deleteCreditCard(Request $request) {
        DB::table('payments')
        ->where('id', '=', $request->deleteID)
        ->delete();

        return redirect()->back()->with('warningMessage', 'Credit card deleted');
    }

    public function viewEditCreditCard(Request $request) {
        $creditCardID = $request->editID;
        $creditCard = DB::table('payments')->where('id', '=', $creditCardID)->first();

        return view('payment.paymentUpdate')->with(compact('creditCard'));
    }

    public function editCreditCard(Request $request) {
        if($request->oldCardID != $request->CardID) {
            DB::table('payments')
            ->where('id', '=', $request->id)
            ->update([
                'name' => $request->Name,
                'lastname' => $request->LastName,
                'card_id' => $request->CardID,
                'typecard' => $request->gridRadios,
                'cvv' => $request->CVV,
                'mmyy' => $request->MM."/".$request->YY,
            ]);

            return redirect(route('viewPayment'))->with('success', 'Your credit card has been updated');
        }
        
        return redirect()->back()->with('warningMessage', 'This credit card number had been used');
    }

}
