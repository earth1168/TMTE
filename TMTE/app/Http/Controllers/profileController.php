<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\profile;

$GLOBALS = array(
    'edit' => null
);


class profileController extends Controller
{
    public function profileView(Request $request) {
        return View::make('createProfile');
    }

    public function createProfile(Request $request) {
        $request->validate([
            'profileName' => 'required|max:255'
        ]);

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

    public function homeProfile(Request $request) {
        $user = $request->user();
        $profile = $request->profile;
        return View::make('user.index')->with(compact('profile', 'user'));
    }

    public function dropProfile(Request $request) {
        $profile = $request->profile;
        $user = $request->user();
        DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->delete();
        return redirect()->back()->with('deleteMessage', 'Profile has been deleted');
    }

    public function toEditProfile(Request $request) {
        $profile = $request->profile;
        $user = $request->user();
        $query = DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->first();
        $GLOBALS['edit'] = $query;
        return View::make('editProfile')->with(compact('query'));
    }

    public function editProfile(Request $request) {
        dd($GLOBALS['edit']);
     }
}
