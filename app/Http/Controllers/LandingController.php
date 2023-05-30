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

    public function form_pesan()
    {
        return view('contents.landing.contact');
    }

    public function kirim_pesan(Request $request)
    {
        $data = [
            'name' =>$request->name,
            'email' =>$request->email,
            'message'=>$request->message,
        ];

        Mail::to('kuywedding.link@gmail.com')->send(new Pesan($data));

        // Session::flash('message', 'Thank you for your email');
        return redirect()->route('index.form')->with('success', 'Pesan Berhasil Dikirim');
    }

    // public function testimoni(){

    //     $testimoni = Testimoni::all();
    //     return view('contents.landing.testimonials',compact(['testimoni']));
    // }
}
