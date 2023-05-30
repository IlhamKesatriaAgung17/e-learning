<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dttestimoni = Testimoni::paginate();
        return view ('contents.dashboard.admin.testimoni.index',compact('dttestimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.landing.form_testimoni');
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
            'foto' =>'mimes:jpg,jpeg,png'
        ]);

        $foto = $request->file('foto');
        $nama_foto = $request->nama.date('Ymdhis').'.'.$request->file('foto')->getClientOriginalExtension();
        $foto->move('landing/assets/images/testimonialimage/',$nama_foto);

        $tuga = new Testimoni();
        if (!empty($request)) {
            $tuga->nama = $request->nama;
            $tuga->role = $request->role;
            $tuga->jenis_kelamin = $request->jenis_kelamin;
            $tuga->foto = $nama_foto;
            $tuga->pesan = $request->pesan;
            $tuga->save();
        }
        return redirect()->route('index')->with('success', 'Data Berhasil Dibuat');
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
    public function edit(Testimoni $testimoni)
    {
        return view('contents.dashboard.admin.testimoni.edit',compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $testimoni)
    {

        $model = Testimoni::findOrFail($testimoni);
        $model->update($request->all());
        return redirect()->route('testimoni.index')->with('success', 'Data Berhasil Diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
          // Delete File
       $imgPath = public_path() . '/landing/assets/images/testimonialimage/' . $testimoni->foto;
       unlink($imgPath);
        // Delete Data
       $testimoni->delete();

       return redirect()->route('testimoni.index')->with('success', 'Data Berhasil Dihapus');
    }
}
