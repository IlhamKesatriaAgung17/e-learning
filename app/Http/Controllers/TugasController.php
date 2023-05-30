<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dttugas= Tugas::paginate();
        return view('contents.dashboard.dosen.tugas.index', compact('dttugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.dosen.tugas.create');
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
        $nama_tugas = $request->nama_tugas.date('Ymdhis').'.'.$request->file('file')->getClientOriginalExtension();
        $file->move('img/tugas/semester1/',$nama_tugas);

        $tuga = new Tugas();
        if (!empty($request)) {
            $tuga->nama_tugas = $request->nama_tugas;
            $tuga->matkul = $request->matkul;
            $tuga->semester = $request->semester;
            $tuga->deskripsi = $request->deskripsi;
            $tuga->tgl_mulai = $request->tgl_mulai;
            $tuga->tgl_selesai = $request->tgl_selesai;
            $tuga->file = $nama_tugas;
            $tuga->save();
        }
        return redirect()->route('tugas.index')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tugas $tuga)
    {
        return view('contents.dashboard.dosen.tugas.detail',compact('tuga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugas $tuga)
    {
        return view('contents.dashboard.dosen.tugas.edit',compact('tuga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugas $tuga)
    {
        $this->validate($request, [
            'file' =>'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx'
        ]);

        if (!empty($request->file('file'))) {
            //Delete Old File
            $oldImgPath = public_path(). '/img/tugas/semester1/' . $tuga->file;
            //D:/laravel/UAS3/public/img/mahasiswa/AS-01-01-2022.png
            unlink($oldImgPath);

            //Update New File
            $file =$request->file('file');
            $nama_tugas = $request->nama_tugas.date('Ymdhis').'.'.$request->file('file')->getClientOriginalExtension();
            $file->move('img/tugas/semester1/',$nama_tugas);
            $tuga->file = $nama_tugas;


            //Merge request data
            $tuga->update([
                'nama_tugas' => $request->nama_tugas,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_selesai' => $request->tgl_selesai,
                'file' => $nama_tugas,
            ]);
        } else {
            $tuga->update([
                'nama_tugas' => $request->nama_tugas,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_selesai' => $request->tgl_selesai,
            ]);
        }
        return redirect()->route('tugas.index')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugas $tuga)
    {
         // Delete File
       $imgPath = public_path() . '/img/tugas/semester1/' . $tuga->file;
       unlink($imgPath);

       // Delete Data
       $tuga->delete();

       return redirect()->route('tugas.index')->with('success', 'Data Berhasil Dihapus');
    }
}
