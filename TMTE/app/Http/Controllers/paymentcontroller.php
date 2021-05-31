<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
use Illuminate\Support\Facades\Auth;

class paymentcontroller extends Controller
{
    public function customerpayment(){
        return view('payment.payment');
    }

    public function addpay(Request $request){
        $request -> validate([
            'Name' => 'required|max:255',
            'LastName' => 'required|max:255',
            'CardID' => 'required|max:16 | min:16',
            'CVV' => 'required|max:3 | min:3',
            'MMYY' => 'required|max:5|min:5'
        ]);
        
        $payment = new payment;
        $payment -> user_id = Auth:: user() -> id;
        $payment -> name = $request -> Name;
        $payment -> lastname = $request -> LastName;
        $payment -> card_id = $request -> CardID;
        $payment -> typecard = $request -> gridRadios;
        $payment -> cvv = $request -> CVV;
        $payment -> mmyy = $request -> MMYY;
        $payment -> save();
        return redirect()-> back()-> with('success',"Recoeded");
    }

}
