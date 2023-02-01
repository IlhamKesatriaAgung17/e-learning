<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdosen = Dosen::paginate();
        return view('contents.dashboard.admin.dosen.index', compact('dtdosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new Dosen();
        if (!empty($request)) {
            $dosen->nama = $request->nama;
            $dosen->kode_dosen = $request->kode_dosen;
            $dosen->email = $request->email;
            $dosen->no_tlp = $request->no_tlp;

            if (!empty($request->hasFile('foto'))) {
                $file = $request->file('foto');
                $imgExtension = $file->getClientOriginalExtension();
                $imgName = $request->nama . "-" . Carbon::now()->format('d-m-Y');
                $imgFullName = $imgName . "." . $imgExtension;
                $imgPath = 'img/dosen';
                $file->move(public_path($imgPath), $imgFullName);
                $dosen->foto = $imgFullName;
            }
            $dosen->save();
        }
        return redirect()->route('dosen.index')->with('toast_success', 'Data Berhasil Terupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        return view('contents.dashboard.admin.dosen.detail',compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('contents.dashboard.admin.dosen.edit',compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        if (!empty($request->file('foto'))) {
            //Delete Old File
            $oldImgPath = public_path(). '/img/dosen/' . $dosen->foto;
            //D:/laravel/UAS3/public/img/mahasiswa/AS-01-01-2022.png
            unlink($oldImgPath);

            //Update New File
            $file =$request->file('foto');
            $imgExtension = $file->getClientOriginalExtension();
            $imgName = $request->nama . "." . Carbon::now()->format('d-m-Y');
            $imgFullName = $imgName . "." . $imgExtension;
            $imgPath = 'img/dosen';
            $file->move(public_path($imgPath), $imgFullName);
            $dosen->foto = $imgFullName;

            //Merge request data
            $dosen->update([
                'nama' => $request->nama,
                'kode_dosen' => $request->kode_dosen,
                'email' => $request->email,
                'no_tlp' => $request->no_tlp,
                'foto' => $imgFullName,
        ]);
        } else {
            $dosen->update([
                'nama' => $request->nama,
                'kode_dosen' => $request->kode_dosen,
                'email' => $request->email,
                'no_tlp' => $request->no_tlp,
            ]);
        }
        return redirect()->route('dosen.index')->with('toast_success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        // Delete File
       $imgPath = public_path() . '/img/dosen/' . $dosen->foto;
       unlink($imgPath);

       // Delete Data
       $dosen->delete();

       return redirect()->route('dosen.index');
    }
}
