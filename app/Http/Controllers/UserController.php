<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('contents.dashboard.user.index');
    }

    function profile(){
        return view('contents.dashboard.user.profile');
    }

    function settings(){
        return view('contents.dashboard.user.settings');
    }
}
