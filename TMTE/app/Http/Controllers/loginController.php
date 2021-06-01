<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function checkUserType(Request $request) {
        $user = Auth::user();
        if($user->role == 'mediaAdmin') {
            return View::make('sampleAdmin')->with(compact('user'));
        }
        else if($user->role == 'serviceAdmin') {
            return View::make('sampleAdmin')->with(compact('user'));
        }

        $profile = DB::table('profiles')->where('userID', '=', $user->id)->pluck('profileName'); 
        $profileID = DB::table('profiles')->where('userID', '=', $user->id)->pluck('id'); 
        return View::make('dashboard')->with(compact('user', 'profile', 'profileID'));
        // dd($profile->count());
    }    

    
    public function checkUserType2(){
        $user = Auth::user();
        switch(Auth::user()->role){
            case "mediaAdmin":
                // return redirect(route("adminPage"));
                return view('admin.dashboard')->with(compact('user'));

            case "serviceAdmin":
                return view('serviceAdmin.dashboard');

            case "user":
                $profile = DB::table('profiles')->where('userID', '=', $user->id)->pluck('profileName'); 
                return View::make('dashboard')->with(compact('user', 'profile'));
            default:
                return view('login');
        }
    }
}
