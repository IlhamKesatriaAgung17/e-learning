<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use PDF;

class PDFController extends Controller
{
    public function index(){

        $testimoni = Testimoni::all();
        // $pdf = PDF::loadView('contents.dashboard.admin.testimoni.laporan',['cetaklaporan' => $testimoni])->setpaper('A4','potrait');

        // return $pdf->stream('Laporan_Data_Pengguna.pdf');

        // $data = [
        //     'laporan' => $this->Testimoni->allData(),
        // ];

        return view('contents.dashboard.admin.testimoni.laporan',compact('testimoni'));
    }
}
