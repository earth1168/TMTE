<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use Illuminate\Http\Request;

class loginController extends Controller
{
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
                $profileID = DB::table('profiles')->where('userID', '=', $user->id)->pluck('id'); 
                return View::make('dashboard')->with(compact('user', 'profile', 'profileID'));
            default:
                return view('login');
        }
    }
}
