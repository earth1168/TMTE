<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mediaAdminController extends Controller
{
    public function index(){
        return view('mediaAd');
    }
}
