<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\profile;

class profileController extends Controller
{
    public function profileView(Request $request) {
        return View::make('createProfile');
    }

    public function createProfile(Request $request) {
        $request->validate([
            'profileName' => 'required|max:255'
        ]);
        $profile = $request->profileName;
        $user = $request->user();
        $query = DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->first();
        if($query == null) {
            $profile = new profile;
            $profile->userID = $request->user()->id;
            $profile->profileName = $request->profileName;
            if(!$request->playNext) $profile->playNext = FALSE;
            if(!$request->playTrailer) $profile->playTrailer = FALSE;
            if($request->kidUser) $profile->kidUser = TRUE;
            $profile->language = $request->language;
            $profile->save();

            return redirect(route('dashboard'))->with('success', 'Profile has been created');
        }

        return redirect(route('profileView'))->with('warningMessage', 'Invalid profile name, You are already has this profile name');
    }

    public function homeProfile(Request $request) {
        $user = $request->user();
        $profile = $request->profileName;

        return View::make('user.index')->with(compact('profile', 'user'));
    }

    public function dropProfile(Request $request) {
        $profile = $request->profileName;
        $user = $request->user();
        DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->delete();

        return redirect()->back()->with('warningMessage', 'Profile has been deleted');
    }

    public function toEditProfile(Request $request) {
        $profile = $request->profileName;
        $user = $request->user();
        $query = DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->first();

        return View::make('editProfile')->with(compact('query'));
    }

    public function editProfile(Request $request) {
        $oldProfileName = $request->oldProfileName;
        $user = $request->user();
        $profile = $request->profileName;
        $query = DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->first();
        if($request->playNext) $next = TRUE;
        else $next = FALSE;
        if($request->playTrailer) $trailer = TRUE;
        else $trailer = FALSE;
        if($request->kidUser) $kid = TRUE;
        else $kid = FALSE;

        if($query == null || $query->profileName == $oldProfileName) {
            DB::table('profiles')
            ->where([['userID', '=', $user->id], ['profileName', '=', $oldProfileName]])
            ->update([
                'profileName' => $request->profileName,
                'playNext' => $next,
                'playTrailer' => $trailer,
                'kidUser' => $kid,
                'language' => $request->language
            ]);

            return redirect(route('dashboard'))->with('success', 'Profile has been edited');
        }
        
        return redirect()->back()->with('warningMessage', 'Invalid profile name, You are already has this profile name');
     }
}
