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
        return View::make('dashboard')->with(compact('user', 'profile'));
        // dd($profile->count());
    }
}
