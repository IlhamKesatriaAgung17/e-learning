<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    function index(){
        return view('contents.dashboard.dosen.index');
    }

    function profile(){
        return view('contents.dashboard.dosen.profile');
    }

    function settings(){
        return view('contents.dashboard.dosen.settings');
    }
}
