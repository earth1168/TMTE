<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Media;


class serviceAdminController extends Controller
{
    
    public function index(){
        $user = User::all();
        $totalUser = User::where('role', 'user')->count();   
        $totalSer = User::where('role', 'serviceAdmin')->count(); 
        $totalMedia = User::where('role', 'mediaAdmin')->count(); 
        $popular = DB::table('users')->select('country')
                            ->groupBy('country')
                            ->orderBy(DB::raw('count(country)'), 'desc')
                            ->take(1)
                            ->first();
        return view('serviceAdmin.dashboard',[
            'users' => $user,
            'totalUser' => $totalUser,
            'totalSer' => $totalSer,
            'totalMedia' => $totalMedia,
            'popular' => $popular,
        ]);
    }

    public function updateUser(Request $request){
        $user = User::where('id', $request->id)
        ->first();
     
        if($request -> firstname != NULL){
        $user->firstName = $request -> firstname;
        }
        if($request -> lastname != NULL){
        $user->lastName = $request -> lastname;
        }
        if($request -> email != NULL){
        $user->email = $request -> email;
        }
        if($request -> country != NULL){
        $user->country = $request -> country;
        }

        $user->timestamps = false;
        $user->save();

        return redirect()->back()->with('success');
    
    }

    
}
