<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi= Materi::paginate();
        return view('contents.dashboard.dosen.materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.dosen.materi.create');
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
        $file->move('img/materi/',$nama_materi);

        $materi = new Materi();
        if (!empty($request)) {
            $materi->nama_materi = $request->nama_materi;
            $materi->kategori_materi = $request->kategori_materi;
            $materi->matkul = $request->matkul;
            $materi->semester = $request->semester;
            $materi->deskripsi = $request->deskripsi;
            $materi->file = $nama_materi;
            $materi->save();
        }
        return redirect()->route('materi.index')->with('toast_success', 'Data Berhasil Terupdate');
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
    public function edit(Materi $materi)
    {
        return view('contents.dashboard.dosen.materi.edit',compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {
        $this->validate($request, [
            'file' =>'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx'
        ]);

        if (!empty($request->file('file'))) {
            //Delete Old File
            $oldImgPath = public_path(). '/img/materi/' . $materi->file;
            //D:/laravel/UAS3/public/img/mahasiswa/AS-01-01-2022.png
            unlink($oldImgPath);

            //Update New File
            $file =$request->file('file');
            $nama_materi = $request->nama_materi.date('Ymdhis').'.'.$request->file('file')->getClientOriginalExtension();
            $file->move('img/materi/',$nama_materi);
            $materi->file = $nama_materi;


            //Merge request data
            $materi->update([
                'nama_materi' => $request->nama_materi,
                'kategori_materi' => $request->kategori_materi,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
                'file' => $nama_materi,
        ]);
        } else {
            $materi->update([
                'nama_materi' => $request->nama_materi,
                'kategori_materi' => $request->kategori_materi,
                'matkul' => $request->matkul,
                'semester' => $request->semester,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        return redirect()->route('materi.index')->with('toast_success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
         // Delete File
       $imgPath = public_path() . '/img/materi/' . $materi->file;
       unlink($imgPath);

       // Delete Data
       $materi->delete();

       return redirect()->route('materi.index');
    }

    //download
    // public function download($id)
    // {
    //     $data = DB::table('materi')->where('id',$id)->first();
    //     $filepath = storage_path("img/materi/{$data->file}");
    //     // return \Response::download($filepath);
    //     return dd($data);
    // }
}
