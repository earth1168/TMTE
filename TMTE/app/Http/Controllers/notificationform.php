<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class notificationform extends Controller
{
    function formnoti(){
        $notifi = notification:: all();
        $users = user:: all();
        return view('Notification.notification',compact('notifi','users'));
    }

    public function notilog(Request $request){
        $request -> validate([
            'Description' => 'required|max:255'
        ]);

        $noti = new notification;
        $name = new notification;
        $noti -> adminid = Auth:: user() -> id;
        $name -> firstname = Auth:: user() -> firstName;
        $name -> lastname = Auth:: user() -> lastName;
        $noti -> role = Auth:: user() -> role;
        $noti -> description = $request -> Description;
        $noti -> save();
        return redirect()-> back()-> with('success',"Send");
    }
}
