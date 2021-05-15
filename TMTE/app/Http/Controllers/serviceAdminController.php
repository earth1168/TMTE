<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceAdminController extends Controller
{
    
    public function index(){
        return view('serviceAdmin.dashboard');
    }
}
