<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Models\Media;
use App\Models\licenseDetails;

use Illuminate\Http\Request;

class loginController extends Controller
{
        public function checkUserType2(){
        $user = Auth::user();
        switch(Auth::user()->role){
            case "mediaAdmin":
                $media = Media::all();

                $license = DB::table('license_details')
                            ->join('license_log', function ($join)  {
                                $join->on('license_details.id', '=', 'license_log.licenseID');
                            })
                            ->get();   
                $totelMedia = Media::all()->count();   
                $totelMo = Media::where('mediaType', 'movie')->count();     
                $totelSe = Media::where('mediaType', 'serie')->count();    
                $totalLi = licenseDetails::all()->count();    

                return view('mediaAdmin.mediaAd',[
                    'medias' => $media,
                    'licenses' => $license,
                    'totalMedia' => $totelMedia,
                    'totalMo' => $totelMo,
                    'totalSe' => $totelSe,
                    'totalLi' => $totalLi
                ]);
                // return redirect(route("adminPage"));
                // return view('admin.dashboard')->with(compact('user'));

            case "serviceAdmin":
                return view('serviceAdmin.dashboard');

            case "user":
                $dateNow = Carbon::now();
                $profile = DB::table('profiles')->where('userID', '=', $user->id)->pluck('profileName'); 
                $profileID = DB::table('profiles')->where('userID', '=', $user->id)->pluck('id'); 
                $payment = DB::table('payment_logs')->where('userID', '=', $user->id)->orderBy('paymentDate', 'desc')->first();
                return View::make('dashboard')->with(compact('user', 'profile', 'profileID','payment', 'dateNow'));
            default:
                return view('login');
        }
    }
}
