<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\subtitle;
use App\Models\soundtrack;
use App\Models\genre;
use App\Models\caution;
use App\Models\category;
use App\Models\licenseDetails;
use App\Models\licenseLog;

class mediaAdminController extends Controller
{
    public function index(){
        $media = Media::all();

        $license = DB::table('license_details')
                    ->join('license_log', function ($join)  {
                        $join->on('license_details.id', '=', 'license_log.licenseID');
                    })
                    ->get();   
        $totelMedia = Media::all()->count();   
        $totelMo = Media::where('mediaType', 'movie')->count();     
        $totelSe = Media::where('mediaType', 'serie')->count();    
        $totalLi = licenseDetails::all()->count();    

        return view('mediaAdmin.mediaAd',[
            'medias' => $media,
            'licenses' => $license,
            'totalMedia' => $totelMedia,
            'totalMo' => $totelMo,
            'totalSe' => $totelSe,
            'totalLi' => $totalLi
        ]);
    }
    public function media(){
        return view('mediaAdmin.mediaForm');
    }

    public function addMedia(Request $request){
        $media = new Media;
        $media -> mediaName = $request -> title;
        $media -> studioName = $request -> studio;
        $media -> rating = $request -> rating;
        if($request -> rating == 'G'){
            $media -> kid = 1;
        }else{
            $media -> kid = 0;
        }
        $media -> plot = $request -> plot;
        $media -> actor = $request -> actor;
        $media -> date = $request -> date;
        $media -> director = $request -> director;
        $media -> scriptwriter = $request -> scriptwriter;
        if($request -> creator == NULL){
            $media -> creator = 0;
        }else{
            $media -> creator = $request -> creator;
        }
        $media -> mediaType = $request -> type;
        $media -> mediaTime = $request -> time;
        $media -> mediaImg = $request -> mediaImg;
        $media -> mediaSource = $request -> mediaSource;
        $media->timestamps = false;
        $media -> save();

    
        $dataSub = $request -> sub;
        $manySub = explode(',', $dataSub);
        foreach($manySub as $singleSub){
            $sub = new subtitle;
            $sub -> mediaID = $media -> id;
            $sub -> subtitle = $singleSub;  
            $sub -> timestamps = false;
            $sub -> save();
        }

        
        $dataSound = $request -> sound;
        $manySound = explode(',', $dataSound);
        foreach($manySound as $singleSound){
            $sound = new soundtrack;
            $sound -> mediaID = $media -> id;
            $sound -> soundtrack = $singleSound;  
            $sound -> timestamps = false;
            $sound -> save();
        }

        if($request -> caution == NULL){
            $cau = new caution;
            $cau -> mediaID = $media -> id;
            $cau -> caution = 0;
            $cau -> timestamps = false;
            $cau -> save();
        }else{
            $dataCaution = $request -> caution;
            $manyCaution = explode(',', $dataCaution );
            foreach($manyCaution  as $singleCaution ){
                $cau = new caution;
                $cau -> mediaID = $media -> id;
                $cau -> caution = $singleCaution ;  
                $cau -> timestamps = false;
                $cau -> save();
            }

        }

        $dataDes = $request -> genreDes;
        $manyDes = explode(',', $dataDes );
        foreach($manyDes as $singleDes ){
            $gen = new genre;
            $gen -> genre = $request -> genre;
            $gen -> genreDescription = $singleDes;  
            $gen -> timestamps = false;
            $gen -> save();

            $cate = new category;
            $cate -> mediaID = $media -> id;
            $cate -> genreID = $gen -> id;  
            $cate -> timestamps = false;
            $cate -> save();
        }

            return redirect()->back()->with('success',"Success");
        }

        public function updateMedia(Request $request){
            $media = Media::where('id', $request -> id)
                    ->first();
               //     dd($request -> id);
            if($request -> title != NULL) {
            $media -> mediaName = $request -> title;
            }
            if($request -> studio != NULL) {
            $media -> studioName = $request -> studio;
            }
            if($request -> rating != NULL) {
            $media -> rating = $request -> rating;
            if($request -> rating == 'G'){
                $media -> kid = 1;
            }else{
                $media -> kid = 0;
            }
              }
            if($request -> plot != NULL) {
            $media -> plot = $request -> plot;
            }
            if($request -> actor != NULL) {
            $media -> actor = $request -> actor;
            }
            if($request -> date != NULL) {
            $media -> date = $request -> date;
            }
            if($request -> director != NULL) {
            $media -> director = $request -> director;
            }
            if($request -> scriptwriter != NULL) {
            $media -> scriptwriter = $request -> scriptwriter;
            }
            if($request -> creator == NULL){
                $media -> creator = 0;
            }else{
                $media -> creator = $request -> creator;
            }
            if($request -> type != NULL) {
            $media -> mediaType = $request -> type;
            }
            if($request -> time != NULL) {
            $media -> mediaTime = $request -> time;
            }
            if($request -> mediaImg != NULL) {
            $media -> mediaImg = $request -> mediaImg;
            }
            if($request -> mediaSource != NULL) {
            $media -> mediaSource = $request -> mediaSource;
            }
           
            $media->timestamps = false;
            
            $media -> save();
            return redirect()->back()->with('success');
        }

        public function deleteMedia(Request $request){
            $media = Media::where('id', $request -> id)
            ->first();
            $media -> delete();
            return redirect()->back()->with('success');
        }


    
    public function addLicense(Request $request){
        
        $media = Media::where('mediaName', $request -> title)
                     ->first();

        $dataCountry = $request -> country;
        $manyCountry = explode(',', $dataCountry);
        foreach($manyCountry as $singleCountry){
            $license = new licenseDetails;
            $license -> expiredDate = $request -> expire;
            $license -> country = $singleCountry;  
            $license -> timestamps = false;
            $license -> save();

            $log = new licenseLog;
            $log -> licenseID = $license -> id;
            $log -> mediaID = $media -> id;  
            $log -> timestamps = false;
            $log -> save();
        }


        return redirect()->back()->with('success');
    }

    public function updateLicense(Request $request){

            $license = licenseDetails::where('id', $request -> id)
                     ->first();

            if($request -> expire != NULL){
            $license -> expiredDate = $request -> expire;
            }
            if($request -> country != NULL){
            $license -> country = $request -> country;
            }  
            $license -> timestamps = false;
            $license -> save();
            return redirect()->back()->with('success');
    }

    public function deleteLicense(Request $request){
        $details = licenseDetails::where('id', $request -> id)
        ->first();

        $log = licenseLog::where('id', $request -> id)
        ->first();

        $log -> delete();
        $details -> delete();
        return redirect()->back()->with('success');
    }
    
}
