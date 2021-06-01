<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    
    public function index(){
        return view('admin.dashboard');
    }

    public function addMedia(Request $request){
        $data = array();
        $data['mediaName'] = $request->mediaName;
        $data['studioName']= $request->studioName;
        $data['rating'] = $request->mediaRating;
        $data['kid']= $request->kid;
        $data['plot']= $request->plot;
        $data['actor']= $request->actor;
        $data['date']= $request->mediaDate;
        $data['director']= $request->director;
        $data['scriptwriter']= $request->scriptwriter;
        $data['creator']= $request->creator;
        $data['mediaType']= $request->mediaType;
        $data['mediaTime']= $request->totalTime;
        
        DB::table('media')->insert($data);
        return redirect()->back()->with('success','done');

    }

    public function viewData(){
        //$media = mMdia::all();
        $media = DB::table('media')->get();
        return view('admin.viewdata', compact('media'));
    }
}
