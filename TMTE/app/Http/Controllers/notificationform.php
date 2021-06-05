<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\notificationlog;
use App\Models\profile;
use Illuminate\Support\Facades\DB;


class notificationform extends Controller
{
    function formnoti(){
        $notifi = notification:: all();
        $profile = profile:: paginate(5);
        return view('Notification.notification',compact('notifi','profile'));
    }

    public function notilog(Request $request){
        $request -> validate([
            'Description' => 'required|max:255'
        ]);   

        if(isset($_POST['check'])){
            $noti = new notification;
            $noti -> adminid = Auth:: user() -> id;
            $noti -> firstname = Auth:: user() -> firstName;
            $noti -> lastname = Auth:: user() -> lastName;
            $noti -> role = Auth:: user() -> role;
            $noti -> description = $request -> Description;
            $noti -> save();
            $qnoti = DB::table('notifications') -> max('id'); 
            for($i = 0;$i <count($_POST['check']); $i++){
                $notilog = new notificationlog;
                $nub = $_POST['check'];
                $notilog -> NotiID = $qnoti;
                $notilog -> profileID = $nub[$i];
                $notilog -> save();
            }
            
        }else return redirect()-> back()-> with('alert',"please select at least one profile!");
        
        return redirect()-> back()-> with('success',"Send");
    }

}
