<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Materi2;
use App\Models\Materi3;
use App\Models\Tugas;
use App\Models\Tugas2;
use App\Models\Tugas3;
use Illuminate\Http\Request;

class DashboardMahasiswaController extends Controller
{
    function index(){
        $jumlah_materi = Materi::count();
        $jumlah_materi2 = Materi2::count();
        $jumlah_materi3 = Materi3::count();
        $jumlah_tugas = Tugas::count();
        return view('contents.dashboard.mahasiswa.index',compact('jumlah_materi','jumlah_materi2','jumlah_materi3','jumlah_tugas'));
    }

    function data_materi(){
        return view('contents.dashboard.mahasiswa.materi');
    }

    public function materi_1()
    {
        $materi_1 = Materi::all();
        return view('contents.dashboard.mahasiswa.materi.index', compact('materi_1'));
    }

    public function materi_2()
    {
        $materi_2 = Materi2::all();
        return view('contents.dashboard.mahasiswa.materi2.index', compact('materi_2'));
    }

    public function materi_3()
    {
        $materi_3 = Materi3::all();
        return view('contents.dashboard.mahasiswa.materi3.index', compact('materi_3'));
    }

    public function detail_materi(Materi $detailmateri)
    {
        return view('contents.dashboard.mahasiswa.materi.detail_materi', compact('detailmateri'));
    }

    public function detail_materi2(Materi2 $detailmateri2)
    {
        return view('contents.dashboard.mahasiswa.materi2.detail_materi', compact('detailmateri2'));
    }

    public function detail_materi3(Materi3 $detailmateri3)
    {
        return view('contents.dashboard.mahasiswa.materi3.detail_materi', compact('detailmateri3'));
    }


    //Tugas
    function tugas(){
        return view('contents.dashboard.mahasiswa.tugas');
    }

    public function tugas_1()
    {
        $tugas_1 = Tugas::all();
        return view('contents.dashboard.mahasiswa.tugas.index', compact('tugas_1'));
    }

    public function detail_tugas(Tugas $detailtugas)
    {
        return view('contents.dashboard.mahasiswa.tugas.detail_tugas', compact('detailtugas'));
    }

    public function tugas_2()
    {
        $tugas_2 = Tugas2::all();
        return view('contents.dashboard.mahasiswa.tugas2.index', compact('tugas_2'));
    }

    public function detail_tugas2(Tugas2 $detailtugas2)
    {
        return view('contents.dashboard.mahasiswa.tugas2.detail_tugas', compact('detailtugas2'));
    }

    public function tugas_3()
    {
        $tugas_3 = Tugas3::all();
        return view('contents.dashboard.mahasiswa.tugas3.index', compact('tugas_3'));
    }

    public function detail_tugas3(Tugas3 $detailtugas3)
    {
        return view('contents.dashboard.mahasiswa.tugas3.detail_tugas', compact('detailtugas3'));
    }
}
