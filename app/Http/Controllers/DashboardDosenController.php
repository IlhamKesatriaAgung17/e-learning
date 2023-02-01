<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Materi2;
use App\Models\Materi3;
use App\Models\PengumpulanTugas;
use App\Models\Tugas;
use Illuminate\Http\Request;

class DashboardDosenController extends Controller
{
    function index(){
        $jumlah_materi = Materi::count();
        $jumlah_materi2 = Materi2::count();
        $jumlah_materi3 = Materi3::count();
        $jumlah_tugas = Tugas::count();
        return view('contents.dashboard.dosen.index',compact('jumlah_materi','jumlah_materi2','jumlah_materi3','jumlah_tugas'));
    }

    function data_materi(){
        return view('contents.dashboard.dosen.materi');
    }

    function data_tugas(){
        return view('contents.dashboard.dosen.tugas');
    }

    public function pengumpulan_tugas(){
        $dttugas= PengumpulanTugas::paginate();
        return view('contents.dashboard.dosen.tugas.pengumpulantugas', compact('dttugas'));
    }


}
