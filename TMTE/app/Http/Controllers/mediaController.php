<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\mediaLog;
use App\Models\subtitle;
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
            $data['subtitleSelect'] = 'English';
            $data['soundTrackSelect'] = 'English';
            
            DB::table('media_logs') -> insert($data);
        }

        $subtitles = DB::table('media')
        ->join('subtitle', function ($join)use($mediaID) {
            $join->on('media.id', '=', 'subtitle.mediaID')
                 ->where('media.id', '=', $mediaID);
        })
        ->select('subtitle.subtitle')
        ->get();
        
        $soundtracks = DB::table('media')
        ->join('soundtrack', function ($join)use($mediaID) {
            $join->on('media.id', '=', 'soundtrack.mediaID')
                 ->where('media.id', '=', $mediaID);
        })
        ->select('soundtrack.soundtrack')
        ->get();

        $genre = DB::table('media') -> select('media.id') -> join('category', 'media.id', '=', 'category.mediaID')
                                                          -> join('genre', 'category.genreID', '=', 'genre.id')
                                                          -> where('media.id' ,'=', $mediaID) -> select('genre.genre','genre.genreDescription')
                                                          ->get();

       
        $mediaLogID = DB::select(DB::raw('SELECT id FROM media_logs WHERE media_logs.mediaID = :mediaID AND media_logs.profileID = :pID'), 
        array('mediaID' => $mediaID, 'pID' => $pID));

        $data2 = array();
        $data2['listID'] = $mediaLogID[0]->id;
        DB::table('media_histories') -> insert($data2);


        $mediaLogID = $mediaLogID[0]->id;

        return View::make('user.mediaPage')->with(compact('mediaData', 'subtitles','soundtracks','genre', 'mediaLogID'));
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

        $res = '<form></form>';
        
        foreach($data as $row){
            $value = $row->id . ',' . $profile;
            $res.= '<li>
                        <form action="user/media" method="post"> 
                            <button name="pID" type="submit" value="' . $value  . '" class="buttonSearchDD">
                                <img src="'. $row->mediaImg . '" class="searchGetImg">
                                <span class="searchGetText">' . $row->mediaName . '
                                </span>
                            </button>
                        </form>
                    </li>';
        }
        echo $res;
    }
    
}
