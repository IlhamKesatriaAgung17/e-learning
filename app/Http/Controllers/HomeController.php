<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('/home');
        if( auth()->user()->role == 1) {
            return redirect()->route('admin.dashboard');
        }
        elseif( auth()->user()->role == 2) {
            return redirect()->route('user.dashboard');
        }
    }
    public function adminHome()
    {
        return view('contents.dashboard.admin.index');
    }
}
