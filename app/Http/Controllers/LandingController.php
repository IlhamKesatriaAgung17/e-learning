<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class LandingController extends Controller
{
    public function index(){
        $testimoni = Testimoni::all();
        return view('contents.landing.index',compact(['testimoni']));
    }

    // public function testimoni(){

    //     $testimoni = Testimoni::all();
    //     return view('contents.landing.testimonials',compact(['testimoni']));
    // }
}
