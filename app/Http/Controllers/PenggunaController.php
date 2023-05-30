<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpengguna = User::paginate();
        return view('contents.dashboard.admin.pengguna.index',compact('dtpengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('contents.dashboard.admin.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @param  array  $data
     * @return \App\Models\User
     */
    public function store(Request $request)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'role' => $data['role'],
        //     'password' => Hash::make($data['password']),
        //     'avatar' =>"Admin.png",
        // ]);

        // return redirect()->route('login');
        // $pengguna = new User();
        // if (!empty($request)) {
        //     $pengguna->name = $request->name;
        //     $pengguna->email = $request->email;
        //     $pengguna->role = $request->role;
        //     $pengguna->password = Hash::make($pengguna['password']);
        //     $pengguna->save();
        // }
        // return redirect()->route('pengguna.index')->with('toast_success', 'Data Berhasil Terupdate');
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
    public function edit(User $pengguna)
    {
        return view('contents.dashboard.admin.pengguna.edit',compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pengguna)
    {
        $model = User::findOrFail($pengguna);
        $model->update($request->all());
        return redirect()->route('pengguna.index')->with('success', 'Data Berhasil Diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $pengguna)
    {
        $model = User::findOrFail($pengguna);
        $model->delete($request->all());
        return redirect()->route('pengguna.index')->with('success', 'Data berhasil dihapus.');
    }
}
