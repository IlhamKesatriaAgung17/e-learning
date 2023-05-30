<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Testimoni;


class AdminController extends Controller
{
    function index(){
        $jumlah_mahasiswa = Mahasiswa::count();
        $jumlah_dosen = Dosen::count();
        $jumlah_matkul = Matkul::count();
        $jumlah_testimoni = Testimoni::count();
        return view('contents.dashboard.admin.index',compact('jumlah_mahasiswa','jumlah_dosen','jumlah_matkul','jumlah_testimoni'));
    }

}
