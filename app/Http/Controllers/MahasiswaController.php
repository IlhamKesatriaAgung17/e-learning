<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtmahasiswa = Mahasiswa::paginate();
        return view('contents.dashboard.admin.mahasiswa.index', compact('dtmahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.admin.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        if (!empty($request)) {
            $mahasiswa->nama = $request->nama;
            $mahasiswa->nim = $request->nim;
            $mahasiswa->email = $request->email;
            $mahasiswa->semester = $request->semester;
            $mahasiswa->no_tlp = $request->no_tlp;
            $mahasiswa->angkatan = $request->angkatan;

            if (!empty($request->hasFile('foto'))) {
                $file = $request->file('foto');
                $imgExtension = $file->getClientOriginalExtension();
                $imgName = $request->nama . "-" . Carbon::now()->format('d-m-Y');
                $imgFullName = $imgName . "." . $imgExtension;
                $imgPath = 'img/mahasiswa';
                $file->move(public_path($imgPath), $imgFullName);
                $mahasiswa->foto = $imgFullName;
            }
            $mahasiswa->save();
        }
        return redirect()->route('mahasiswa.index')->with('toast_success', 'Data Berhasil Terupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('contents.dashboard.admin.mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('contents.dashboard.admin.mahasiswa.edit',compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        if (!empty($request->file('foto'))) {
            //Delete Old File
            $oldImgPath = public_path(). '/img/mahasiswa/' . $mahasiswa->foto;
            //D:/laravel/UAS3/public/img/mahasiswa/AS-01-01-2022.png
            unlink($oldImgPath);

            //Update New File
            $file =$request->file('foto');
            $imgExtension = $file->getClientOriginalExtension();
            $imgName = $request->nama . "." . Carbon::now()->format('d-m-Y');
            $imgFullName = $imgName . "." . $imgExtension;
            $imgPath = 'img/mahasiswa';
            $file->move(public_path($imgPath), $imgFullName);
            $mahasiswa->foto = $imgFullName;

            //Merge request data
            $mahasiswa->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'semester' => $request->semester,
                'angkatan' => $request->angkatan,
                'no_tlp' => $request->no_tlp,
                'foto' => $imgFullName,
        ]);
        } else {
            $mahasiswa->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'semester' => $request->semester,
                'angkatan' => $request->angkatan,
                'no_tlp' => $request->no_tlp,
            ]);
        }
        return redirect()->route('mahasiswa.index')->with('toast_success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        // Delete File
       $imgPath = public_path() . '/img/mahasiswa/' . $mahasiswa->foto;
       unlink($imgPath);

       // Delete Data
       $mahasiswa->delete();

       return redirect()->route('mahasiswa.index');
    }
}
