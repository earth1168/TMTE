<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mediaLog;
use Illuminate\Support\Facades\DB;

class mediaLogController extends Controller
{
    public function setStatus(Request $request){
        $status = $request->status; // -1->dislike 0->neutral 1->like// mylist: 0->not 1->in
        $traget = $request->traget; //like dislike mylist
        $mediaLogID = $request->mediaLogID;
        $currList = DB::table('media_logs') -> where('id', $mediaLogID) -> value('Mylist');
        $currLike = DB::table('media_logs') -> where('id', $mediaLogID) -> value('like');
        // DB::table('users')->where('name', 'John')->value('email');
        if($traget == 'list'){
            if($currList == 0){
                mediaLog::find($mediaLogID)->update(['myList' => 1]);
            }else
            mediaLog::find($mediaLogID)->update(['myList' => 0]);

        }elseif($traget == 'like'){
            if($currLike == 0 or $currLike == -1){
                mediaLog::find($mediaLogID)->update(['like' => $currLike+=1]);
            }
        }elseif($traget == 'dislike'){
            if($currLike == 1 or $currLike == 0){
                mediaLog::find($mediaLogID)->update(['like' => $currLike-=1]);
            }
        }

        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

    public function getStatus(Request $request){
        $mediaLogID = $request->mediaLogID;
        $currList = DB::table('media_logs') -> where('id', $mediaLogID) -> value('Mylist');
        $currLike = DB::table('media_logs') -> where('id', $mediaLogID) -> value('like');

        if($currLike == 0){
            $res = '<button onclick="doo(this.id)" id="like" status="' . $currLike . '" mediaLog="' . $mediaLogID . '">
            <i class="far fa-thumbs-up fa-2x" style="margin: 10px;"></i></button><button onclick="doo(this.id)"
            id="dislike" status="' . $currLike . '" mediaLog="' . $mediaLogID . '"><i class="far fa-thumbs-down fa-2x" style="margin: 10px;"></i>
            </button>';

        }elseif($currLike == 1){
            $res = '<button onclick="doo(this.id)" id="like" status="' . $currLike . '" mediaLog="' . $mediaLogID . '">
            <i class="fas fa-thumbs-up fa-2x" style="margin: 10px;"></i></button><button onclick="doo(this.id)"
            id="dislike" status="' . $currLike . '" mediaLog="' . $mediaLogID . '"><i class="far fa-thumbs-down fa-2x" style="margin: 10px;"></i>
            </button>';
        }elseif($currLike == -1){
            $res = '<button onclick="doo(this.id)" id="like" status="' . $currLike . '" mediaLog="' . $mediaLogID . '">
            <i class="far fa-thumbs-up fa-2x fa-2x" style="margin: 10px;"></i></button><button onclick="doo(this.id)"
            id="dislike" status="' . $currLike . '" mediaLog="' . $mediaLogID . '"><i class="fas fa-thumbs-down fa-2x" style="margin: 10px;"></i>
            </button>';
        }

        if($currList == 0){
            $res.= '<button onclick="doo(this.id)" id="list" status="' . $currList . '" mediaLog="' . $mediaLogID . '">
                    <i class="far fa-address-book fa-2x" style="margin: 10px;"></i>
                    </button>';
        }elseif($currList == 1){
            $res.= '<button onclick="doo(this.id)" id="list" status="' . $currList . '" mediaLog="' . $mediaLogID . '">
            <i class="fas fa-address-book fa-2x" style="margin: 10px;"></i>
            </button>';
        }
        
        echo $res;
    }
}
