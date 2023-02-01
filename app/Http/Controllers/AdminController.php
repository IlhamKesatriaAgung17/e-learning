<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('contents.dashboard.admin.index');
    }

    function profile(){
        return view('contents.dashboard.admin.profile');
    }

    function settings(){
        return view('contents.dashboard.admin.settings');
    }
}
