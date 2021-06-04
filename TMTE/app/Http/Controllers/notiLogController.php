<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\notificationlog;

class notiLogController extends Controller
{
    public function setSeen(Request $request){
        $myNotiID = $request->NotilogID;
        $row = notificationlog::find($myNotiID);

        notificationlog::find($myNotiID)->update(['seen' => 1]);

        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
}
