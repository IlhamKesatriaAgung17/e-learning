<?php

namespace App\Http\Controllers;


use App\Models\Tugas3;
use Illuminate\Http\Request;

class Tugas3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dttugas3= Tugas3::paginate();
        return view('contents.dashboard.dosen.tugas3.index', compact('dttugas3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.dosen.tugas3.create');
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
        $file->move('img/tugas/semester3/',$nama_tugas);

        $tugas3 = new Tugas3();
        if (!empty($request)) {
            $tugas3->nama_tugas = $request->nama_tugas;
            $tugas3->matkul = $request->matkul;
            $tugas3->semester = $request->semester;
            $tugas3->deskripsi = $request->deskripsi;
            $tugas3->tgl_mulai = $request->tgl_mulai;
            $tugas3->tgl_selesai = $request->tgl_selesai;
            $tugas3->file = $nama_tugas;
            $tugas3->save();
        }
        return redirect()->route('tugas3.index')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tugas3 $tugas3)
    {
        return view('contents.dashboard.dosen.tugas3.detail',compact('tugas3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugas3 $tugas3)
    {
        return view('contents.dashboard.dosen.tugas3.edit',compact('tugas3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugas3 $tugas3)
    {
        $this->validate($request, [
            'file' =>'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx'
        ]);

        if (!empty($request->file('file'))) {
            //Delete Old File
            $oldImgPath = public_path(). '/img/tugas/semester3/' . $tugas3->file;
            //D:/laravel/UAS3/public/img/mahasiswa/AS-01-01-2022.png
            unlink($oldImgPath);

            //Update New File
            $file =$request->file('file');
            $nama_tugas = $request->nama_tugas.date('Ymdhis').'.'.$request->file('file')->getClientOriginalExtension();
            $file->move('img/tugas/semester3/',$nama_tugas);
            $tugas3->file = $nama_tugas;


            //Merge request data
            $tugas3->update([
                'nama_tugas' => $request->nama_tugas,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_selesai' => $request->tgl_selesai,
                'file' => $nama_tugas,
        ]);
        } else {
            $tugas3->update([
                'nama_tugas' => $request->nama_tugas,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_selesai' => $request->tgl_selesai,
            ]);
        }
        return redirect()->route('tugas3.index')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugas3 $tugas3)
    {
         // Delete File
       $imgPath = public_path() . '/img/tugas/semester3/' . $tugas3->file;
       unlink($imgPath);

       // Delete Data
       $tugas3->delete();

       return redirect()->route('tugas3.index')->with('success', 'Data Berhasil Dihapus');
    }
}
