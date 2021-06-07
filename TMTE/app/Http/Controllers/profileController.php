<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\profile;

class profileController extends Controller
{
    public function profileView(Request $request)
    {
        $profile = NULL;
        return View::make('createProfile')->with(compact('profile'));
    }

    public function createProfile(Request $request)
    {
        $request->validate([
            'profileName' => 'required|max:255'
        ]);
        $profile = $request->profileName;
        $user = $request->user();
        $query = DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->first();
        if ($query == null) {
            $profile = new profile;
            $profile->userID = $request->user()->id;
            $profile->profileName = $request->profileName;
            if (!$request->playNext) $profile->playNext = FALSE;
            if (!$request->playTrailer) $profile->playTrailer = FALSE;
            if ($request->kidUser) $profile->kidUser = TRUE;
            $profile->language = $request->language;
            $profile->save();

            return redirect(route('dashboard'))->with('success', 'Profile has been created');
        }

        return redirect(route('profileView'))->with('warningMessage', 'Invalid profile name, You are already has this profile name');
    }

    public function homeProfile(Request $request)
    {
        $number = $request->profileID[-1];
        $profile = $request->profileID[$number * 2 - 1];

        $kidOrNot = DB::select(
            DB::raw('SELECT kidUser FROM profiles WHERE profiles.id = :profile'),
            array('profile' => $profile)
        );
        // dd($kidOrNot[0]->kidUser);  

        //find popular media
        if ($kidOrNot == 1) {
            $popularMediaMix = DB::select(DB::raw('SELECT media.id, COUNT(media.id) AS Cmedia, media.mediaName, media.mediaImg FROM media 
                                            INNER JOIN media_logs ON media.id = media_logs.mediaID WHERE media.kid = 1 
                                            GROUP BY media.id, media.mediaName, media.mediaImg   
                                            ORDER BY COUNT(media.id) DESC'));
        } else
            $popularMediaMix = DB::select(DB::raw('SELECT media.id, COUNT(media.id) AS Cmedia, media.mediaName, media.mediaImg FROM media 
                                            INNER JOIN media_logs ON media.id = media_logs.mediaID WHERE media.kid = 0 
                                            GROUP BY media.id, media.mediaName, media.mediaImg   
                                            ORDER BY COUNT(media.id) DESC'));


        if ($kidOrNot == 1) {
            $allMedia = DB::select(DB::raw('SELECT id,media.mediaName, media.mediaImg FROM media WHERE kid = 1'));
        } else
            $allMedia = DB::select(DB::raw('SELECT id,media.mediaName, media.mediaImg FROM media'));

            
        $mediaAction = DB::select(DB::raw('SELECT media.id, media.mediaName, media.mediaImg FROM media WHERE media.id IN 
                                            (SELECT category.mediaID FROM category WHERE category.genreID IN 
                                                (SELECT genre.id FROM genre WHERE genre = "Action")) '));


        $mylist = DB::select(DB::raw('SELECT media.id, media.mediaName, media.mediaImg FROM media_logs INNER JOIN media ON 
                                media_logs.mediaID = media.id WHERE media_logs.profileID = :profile AND media_logs.myList = 1'), 
                                array('profile' => $profile));

        return View::make('user.index')->with(compact('profile', 'popularMediaMix', 'allMedia', 'mediaAction', 'mylist'));
    }

    public function getNoti(Request $request)
    {
        $profile = $request->pID;
        $noti = DB::table('profiles')->join('notificationlogs', function ($join) use ($profile) {
            $join->on('profiles.id', '=', 'notificationlogs.profileID')
                ->where('notificationlogs.profileID', '=', $profile);
        })
            ->select('notificationlogs.*')
            ->join('notifications', 'notificationlogs.NotiID', '=', 'notifications.id')
            ->select('notificationlogs.id', 'notificationlogs.NotiID', 'notificationlogs.seen', 'notifications.description')
            ->get();

        $nNoti = count($noti);
        $i = 0;
        $res = null;
        foreach ($noti as $row) {
            $notiText = 'noti' . $i++;
            if ($row->seen == 0) {
                $res .= '<li><button id="' . $notiText . '" class="text-left" NotilogID="' . $row->id . '" NotiSeen="' .
                    $row->seen . '" Notides="' . $row->description . '" style="color:black" onClick="foo(this.id)">' . $row->description . ' </button></li>';
            } else
                $res .= '<li><button id="' . $notiText . '" class="seennoti text-left" NotilogID="' . $row->id . '" NotiSeen="'
                    . $row->seen . '" Notides="' . $row->description . '" style="color:black" onClick="foo(this.id)">' . $row->description . ' </button></li>';
        }

        echo $res;
    }

    public function dropProfile(Request $request)
    {
        $profile = $request->profileName;
        $user = $request->user();
        DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->delete();

        return redirect()->back()->with('warningMessage', 'Profile has been deleted');
    }

    public function toEditProfile(Request $request)
    {
        $profile = $request->profileName;
        $user = $request->user();
        $query = DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->first();

        return View::make('editProfile')->with(compact('query'));
    }

    public function editProfile(Request $request)
    {
        $oldProfileName = $request->oldProfileName;
        $user = $request->user();
        $profile = $request->profileName;
        $query = DB::table('profiles')->where([['userID', '=', $user->id], ['profileName', '=', $profile]])->first();
        if ($request->playNext) $next = TRUE;
        else $next = FALSE;
        if ($request->playTrailer) $trailer = TRUE;
        else $trailer = FALSE;
        if ($request->kidUser) $kid = TRUE;
        else $kid = FALSE;

        if ($query == null || $query->profileName == $oldProfileName) {
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
