<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Materi2;
use App\Models\Materi3;
use App\Models\PengumpulanTugas;
use App\Models\PengumpulanTugas2;
use App\Models\PengumpulanTugas3;
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

    function pengumpulan_tugas(){
        return view('contents.dashboard.dosen.pengumpulan_tugas');
    }

    public function pengumpulan_tugas1(){
        $dttugas= PengumpulanTugas::paginate();
        return view('contents.dashboard.dosen.tugas.pengumpulantugas', compact('dttugas'));
    }
    public function destroy(PengumpulanTugas $tuga)
    {
       // Delete File
       $imgPath = public_path() . '/img/pengumpulantugas/semester1/' . $tuga->file;
       unlink($imgPath);

       // Delete Data
       $tuga->delete();
       return redirect()->route('dosen.data-pengumpulan-tugas1');
    }

    public function pengumpulan_tugas2(){
        $dttugas= PengumpulanTugas2::paginate();
        return view('contents.dashboard.dosen.tugas2.pengumpulantugas', compact('dttugas'));
    }
    public function destroy2(PengumpulanTugas2 $tuga)
    {
       // Delete File
       $imgPath = public_path() . '/img/pengumpulantugas/semester2/' . $tuga->file;
       unlink($imgPath);

       // Delete Data
       $tuga->delete();
       return redirect()->route('dosen.data-pengumpulan-tugas2');
    }

    public function pengumpulan_tugas3(){
        $dttugas= PengumpulanTugas3::paginate();
        return view('contents.dashboard.dosen.tugas3.pengumpulantugas', compact('dttugas'));
    }

    public function destroy3(PengumpulanTugas3 $tuga)
    {
       // Delete File
       $imgPath = public_path() . '/img/pengumpulantugas/semester3/' . $tuga->file;
       unlink($imgPath);

       // Delete Data
       $tuga->delete();
       return redirect()->route('dosen.data-pengumpulan-tugas3');
    }

}
