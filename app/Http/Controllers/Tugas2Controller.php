<?php

namespace App\Http\Controllers;

use App\Models\Tugas2;
use Illuminate\Http\Request;

class Tugas2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dttugas2= Tugas2::paginate();
        return view('contents.dashboard.dosen.tugas2.index', compact('dttugas2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.dosen.tugas2.create');
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
        $file->move('img/tugas/semester2/',$nama_tugas);

        $tugas2 = new Tugas2();
        if (!empty($request)) {
            $tugas2->nama_tugas = $request->nama_tugas;
            $tugas2->matkul = $request->matkul;
            $tugas2->semester = $request->semester;
            $tugas2->deskripsi = $request->deskripsi;
            $tugas2->tgl_mulai = $request->tgl_mulai;
            $tugas2->tgl_selesai = $request->tgl_selesai;
            $tugas2->file = $nama_tugas;
            $tugas2->save();
        }
        return redirect()->route('tugas2.index')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tugas2 $tugas2)
    {
        return view('contents.dashboard.dosen.tugas2.detail',compact('tugas2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugas2 $tugas2)
    {
        return view('contents.dashboard.dosen.tugas2.edit',compact('tugas2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugas2 $tugas2)
    {
        $this->validate($request, [
            'file' =>'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx'
        ]);

        if (!empty($request->file('file'))) {
            //Delete Old File
            $oldImgPath = public_path(). '/img/tugas/semester2/' . $tugas2->file;
            //D:/laravel/UAS3/public/img/mahasiswa/AS-01-01-2022.png
            unlink($oldImgPath);

            //Update New File
            $file =$request->file('file');
            $nama_tugas = $request->nama_tugas.date('Ymdhis').'.'.$request->file('file')->getClientOriginalExtension();
            $file->move('img/tugas/semester2/',$nama_tugas);
            $tugas2->file = $nama_tugas;


            //Merge request data
            $tugas2->update([
                'nama_tugas' => $request->nama_tugas,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_selesai' => $request->tgl_selesai,
                'file' => $nama_tugas,
        ]);
        } else {
            $tugas2->update([
                'nama_tugas' => $request->nama_tugas,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_selesai' => $request->tgl_selesai,
            ]);
        }
        return redirect()->route('tugas2.index')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugas2 $tugas2)
    {
         // Delete File
       $imgPath = public_path() . '/img/tugas/semester2/' . $tugas2->file;
       unlink($imgPath);

       // Delete Data
       $tugas2->delete();

       return redirect()->route('tugas2.index')->with('success', 'Data Berhasil Dihapus');
    }
}
