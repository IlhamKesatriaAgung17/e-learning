<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengumpulanTugas3;

class PengumpulanTugas3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.mahasiswa.tugas3.pengumpulan_tugas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' =>'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx,jpg,jpeg,png'
        ]);

        $file = $request->file('file');
        $nama_tugas = $request->nama_mhs.date('Ymdhis').'.'.$request->file('file')->getClientOriginalExtension();
        $file->move('img/pengumpulantugas/semester3/',$nama_tugas);

        $tuga = new PengumpulanTugas3();
        if (!empty($request)) {
            $tuga->nama_mhs = $request->nama_mhs;
            $tuga->matkul = $request->matkul;
            $tuga->semester = $request->semester;
            $tuga->file = $nama_tugas;
            $tuga->save();
        }
        return redirect()->route('mahasiswa.tugas.semester-3')->with('toast_success', 'Data Berhasil Terupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengumpulanTugas3 $tugas)
    {
          // Delete File
       $imgPath = public_path() . '/img/pengumpulantugas/semester3/' . $tuga->file;
       unlink($imgPath);

       // Delete Data
       $tuga->delete();

       return redirect()->route('dosen.data-pengumpulan-tugas3');
    }
}
