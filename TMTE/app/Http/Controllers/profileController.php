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
        // $user = DB::table('profiles')->where('userID', '=', $request->user()->id)->value('profileName');
        // dd($request->user()->id);
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

        return redirect(route('dashboard'))->with('success', 'Create profile completed');
    }

    public function dropProfile(Request $request) {
        $user = DB::table('packages')->where('userID'. '=', $request->user()->id);
        $userProfile = DB::table('packages')->where('userID', '=', );
    }
}
