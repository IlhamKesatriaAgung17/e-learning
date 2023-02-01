<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtmatkul = Matkul::paginate();
        return view('contents.dashboard.admin.matkul.index', compact('dtmatkul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.admin.matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matkul = new Matkul();
        if (!empty($request)) {
            $matkul->nama_mk = $request->nama_mk;
            $matkul->kode_matkul = $request->kode_matkul;
            $matkul->sks = $request->sks;

            if (!empty($request->hasFile('foto'))) {
                $file = $request->file('foto');
                $imgExtension = $file->getClientOriginalExtension();
                $imgName = $request->nama_mk . "-" . Carbon::now()->format('d-m-Y');
                $imgFullName = $imgName . "." . $imgExtension;
                $imgPath = 'img/matkul';
                $file->move(public_path($imgPath), $imgFullName);
                $matkul->foto = $imgFullName;
            }
            $matkul->save();
        }
        return redirect()->route('matkul.index')->with('toast_success', 'Data Berhasil Terupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matkul $matkul)
    {
        return view('contents.dashboard.admin.matkul.detail',compact('matkul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matkul $matkul)
    {
        return view('contents.dashboard.admin.matkul.edit',compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matkul $matkul)
    {
        if (!empty($request->file('foto'))) {
            //Delete Old File
            $oldImgPath = public_path(). '/img/matkul/' . $matkul->foto;
            //D:/laravel/UAS3/public/img/mahasiswa/AS-01-01-2022.png
            unlink($oldImgPath);

            //Update New File
            $file =$request->file('foto');
            $imgExtension = $file->getClientOriginalExtension();
            $imgName = $request->nama_mk . "." . Carbon::now()->format('d-m-Y');
            $imgFullName = $imgName . "." . $imgExtension;
            $imgPath = 'img/matkul';
            $file->move(public_path($imgPath), $imgFullName);
            $matkul->foto = $imgFullName;

            //Merge request data
            $matkul->update([
                'nama_mk' => $request->nama_mk,
                'kode_matkul' => $request->kode_matkul,
                'sks' => $request->sks,
                'foto' => $imgFullName,
        ]);
        } else {
            $matkul->update([
                'nama_mk' => $request->nama_mk,
                'kode_matkul' => $request->kode_matkul,
                'sks' => $request->sks,
            ]);
        }
        return redirect()->route('matkul.index')->with('toast_success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matkul $matkul)
    {
        // Delete File
       $imgPath = public_path() . '/img/matkul/' . $matkul->foto;
       unlink($imgPath);

       // Delete Data
       $matkul->delete();

       return redirect()->route('matkul.index');
    }
}
