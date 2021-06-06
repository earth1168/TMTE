<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\mediaLog;
use PDO;

// $manyDes = explode(',', $dataDes );

class mediaController extends Controller
{
    public function mediaPage(Request $request){    //everytime add/change mediaLog

        $temp = explode(',', $request->pID);
        $mediaID = $temp[0];
        $pID = $temp[1];
        $mediaLogID = DB::select(DB::raw('SELECT id FROM media_logs WHERE media_logs.mediaID = :mediaID AND media_logs.profileID = :pID'), 
        array('mediaID' => $mediaID, 'pID' => $pID));
        
        $mediaData = DB::select(DB::raw('SELECT * FROM media WHERE media.id = :mediaID'), 
        array('mediaID' => $mediaID));

        if(count($mediaLogID) == 0){
            $data = array();
            $data['profileID'] = $pID;
            $data['mediaID'] = $mediaID;
            $data['status'] = 0;
            $data['like'] = 0;
        }

        $subtitles = DB::select(DB::raw('SELECT subtitle.subtitle FROM subtitle WHERE subtitle.mediaID = :mediaID'), 
        array('mediaID' => $mediaID));
 
        return View::make('user.mediaPage')->with(compact('mediaData', 'subtitles'));
    }

    public function searchMedia(Request $request){
        $mFilter = $request->mFilter;
        $mText = $request ->mText;
        $profile = $request ->profileID;

        if($mFilter == 'Everything'){
            $data = DB::table('media') -> where('mediaName', 'like', '%'.$mText.'%') -> get();
        }elseif($mFilter == 'Movie'){
            $data = DB::table('media') -> where([
                                                ['mediaName', 'like', '%'.$mText.'%'], 
                                                ['mediaType', '=', 'Movie']
                                                ]) -> get();
        }elseif($mFilter == 'Series'){
            $data = DB::table('media') -> where([
                                                ['mediaName', 'like', '%'.$mText.'%'], 
                                                ['mediaType', '=', 'Serie']
                                                ]) -> get();
        }

        $res = '';
        
        foreach($data as $row){
            $value = $row->id . ',' . $profile;
            $res.= '<li><form action="user/media" method="post"> 
            <button name="pID" type="submit" value="' . $value  . '" class="buttonSearchDD">
            <img src="'. $row->mediaImg . '" class="searchGetImg"><span class="searchGetText">' . $row->mediaName . '</span></button></form></li>';
        }
        echo $res;
    }
    
}
