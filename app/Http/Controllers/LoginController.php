<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Carbon;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function proslogin(Request $a){
        $message = [
            'email.required' => 'Email yang tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ];
        $cek = $a -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ],$message);

        if (Auth::attempt($cek)){
            $a -> session() -> regenerate();


            return redirect()->intended('/index');
        }
        return back()->with('loginError', 'Maaf Username atau Password Salah');
    }

    public function logout(Request $a){
        Auth::logout();

        $a->session()->invalidate();
        $a->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(){
        return view('auth.register');
    }

    public function insertRegis(Request $a){
        try{
        $validate = $a->validate([
            'name' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
            'role' => 'required|min:3|max:255'
        ]);
        //dd('Regist Berhasil');
        $usersid=Pengguna::id();
        $validate['password'] = Hash::make($validate['password']);
        User::create([
            'name' => $a->name,
            'email' => $a->email,
            'password' => $validate['password'] ,
            'role' => $a->role,
            'id_user' => $usersid
        ]);
        $usersid=Pengguna::id();

        Pengguna::create([
            'Id_user' => $usersid,
            'Nama' => $a->name,
            'Email' => $a->email,
            'Tanggal_lahir' => "2000-01-01",
        ]);
        Timeline::create([
            'id_user' => $usersid,
            'status' => "Bergabung"
        ]);
        //return request()->all();
        return redirect('/index')->with('success', 'Berhasil Register!');
    }catch (\Exception $e){
            return redirect()->back()->with('error', 'Data Tidak Tersimpan!');
    }
    }
}
