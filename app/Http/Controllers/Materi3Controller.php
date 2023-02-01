<?php

namespace App\Http\Controllers;

use App\Models\Materi3;
use Illuminate\Http\Request;

class Materi3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi3= Materi3::paginate();
        return view('contents.dashboard.dosen.materi3.index', compact('materi3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.dosen.materi3.create');
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
        $nama_materi = $request->nama_materi.date('Ymdhis').'.'.$request->file('file')->getClientOriginalExtension();
        $file->move('img/materi/semester3/',$nama_materi);

        $materi = new Materi3();
        if (!empty($request)) {
            $materi->nama_materi = $request->nama_materi;
            $materi->kategori_materi = $request->kategori_materi;
            $materi->matkul = $request->matkul;
            $materi->semester = $request->semester;
            $materi->deskripsi = $request->deskripsi;
            $materi->file = $nama_materi;
            $materi->save();
        }
        return redirect()->route('materi3.index')->with('toast_success', 'Data Berhasil Terupdate');
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
    public function edit(Materi3 $materi3)
    {
        return view('contents.dashboard.dosen.materi3.edit',compact('materi3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi3 $materi3)
    {
        $this->validate($request, [
            'file' =>'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx'
        ]);

        if (!empty($request->file('file'))) {
            //Delete Old File
            $oldImgPath = public_path(). '/img/materi/semester3/' . $materi3->file;
            //D:/laravel/UAS3/public/img/mahasiswa/AS-01-01-2022.png
            unlink($oldImgPath);

            //Update New File
            $file =$request->file('file');
            $nama_materi = $request->nama_materi.date('Ymdhis').'.'.$request->file('file')->getClientOriginalExtension();
            $file->move('img/materi/semester3/',$nama_materi);
            $materi3->file = $nama_materi;


            //Merge request data
            $materi3->update([
                'nama_materi' => $request->nama_materi,
                'kategori_materi' => $request->kategori_materi,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
                'file' => $nama_materi,
        ]);
        } else {
            $materi3->update([
                'nama_materi' => $request->nama_materi,
                'kategori_materi' => $request->kategori_materi,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        return redirect()->route('materi3.index')->with('toast_success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi3 $materi3)
    {
         // Delete File
       $imgPath = public_path() . '/img/materi/semester3/' . $materi3->file;
       unlink($imgPath);

       // Delete Data
       $materi3->delete();

       return redirect()->route('materi3.index');
    }
}
