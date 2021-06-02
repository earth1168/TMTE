<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mediaAdminController extends Controller
{
    public function index(){
        return view('mediaAdmin.mediaAd');
    }
    public function media(){
        return view('mediaAdmin.mediaForm');
    }
    public function license(){
        return view('mediaAdmin.licenseForm');
    }
}
