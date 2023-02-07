<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\Materi2Controller;
use App\Http\Controllers\Materi3Controller;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\Tugas2Controller;
use App\Http\Controllers\Tugas3Controller;
use App\Http\Controllers\PengumpulanTugasController;
use App\Http\Controllers\PengumpulanTugas2Controller;
use App\Http\Controllers\PengumpulanTugas3Controller;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\TestimoniController;
// use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.welcome');
// });
Route::get('/',[LandingController::class, 'index'])->name('index');
// Route::get('/testimoni-details/{testimoni}', 'LandingController@testimoni')->name('testimoni-details');
// Route::get('/testimoni', function () {
//     return redirect()->route('testimonis');
// });

// Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'proslogin']);
// Route::get('/logout', [LoginController::class, 'logout']);
// Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('guest');
// Route::post('/register', [LoginController::class, 'insertRegis']);
// // Route::get('/',[AdminController::class, 'index']);
// Route::get('/index', [AdminController::class, 'index']);


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('testimoni-form', TestimoniController::class);

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('dosen', DosenController::class);
    Route::resource('matkul', MatkulController::class);
});

Route::group(['prefix'=>'mahasiswa', 'middleware'=>['isUser','auth']], function(){
    Route::get('dashboard', [DashboardMahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
    Route::get('data-materi', [DashboardMahasiswaController::class, 'data_materi'])->name('mahasiswa.data-materi');
    Route::get('data-materi/semester-1', [DashboardMahasiswaController::class, 'materi_1'])->name('mahasiswa.data-materi.semester-1');
    Route::get('data-materi/semester-2', [DashboardMahasiswaController::class, 'materi_2'])->name('mahasiswa.data-materi.semester-2');
    Route::get('data-materi/semester-3', [DashboardMahasiswaController::class, 'materi_3'])->name('mahasiswa.data-materi.semester-3');
    Route::get('/data-materi/semester-1/detail/{detailmateri}', [App\Http\Controllers\DashboardMahasiswaController::class, 'detail_materi'])->name('mahasiswa.data-materi.semester-1.detail');
    Route::get('/data-materi/semester-2/detail/{detailmateri2}', [App\Http\Controllers\DashboardMahasiswaController::class, 'detail_materi2'])->name('mahasiswa.data-materi.semester-2.detail');
    Route::get('/data-materi/semester-3/detail/{detailmateri3}', [App\Http\Controllers\DashboardMahasiswaController::class, 'detail_materi3'])->name('mahasiswa.data-materi.semester-3.detail');
    Route::get('tugas', [DashboardMahasiswaController::class, 'tugas'])->name('mahasiswa.tugas');
    Route::get('tugas/semester-2', [DashboardMahasiswaController::class, 'tugas_2'])->name('mahasiswa.tugas.semester-2');
    Route::get('tugas/semester-3', [DashboardMahasiswaController::class, 'tugas_3'])->name('mahasiswa.tugas.semester-3');
    Route::get('tugas/semester-1', [DashboardMahasiswaController::class, 'tugas_1'])->name('mahasiswa.tugas.semester-1');
    Route::get('/tugas/semester-1/detail/{detailtugas}', [App\Http\Controllers\DashboardMahasiswaController::class, 'detail_tugas'])->name('mahasiswa.tugas.semester-1.detail');
    Route::get('/tugas/semester-2/detail/{detailtugas2}', [App\Http\Controllers\DashboardMahasiswaController::class, 'detail_tugas2'])->name('mahasiswa.tugas.semester-2.detail');
    Route::get('/tugas/semester-3/detail/{detailtugas3}', [App\Http\Controllers\DashboardMahasiswaController::class, 'detail_tugas3'])->name('mahasiswa.tugas.semester-3.detail');
    Route::resource('pengumpulan-tugas', PengumpulanTugasController::class);
    Route::resource('pengumpulan-tugas2', PengumpulanTugas2Controller::class);
    Route::resource('pengumpulan-tugas3', PengumpulanTugas3Controller::class);
    // Route::get('data-materi-semester-1-detail', [DashboardMahasiswaController::class, 'materi_detail'])->name('mahasiswa.data-materi-semester-1-detail');
    // Route::get('mahasiswa/detail/{$data}', [DashboardMahasiswaController::class, 'detail_materi']);
    // Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    // Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
});

Route::group(['prefix'=>'dosen', 'middleware'=>['isDosen','auth']], function(){
    Route::get('dashboard', [DashboardDosenController::class, 'index'])->name('dosen.dashboard');
    Route::get('data-materi', [DashboardDosenController::class, 'data_materi'])->name('dosen.data-materi');
    Route::get('data-tugas', [DashboardDosenController::class, 'data_tugas'])->name('dosen.data-tugas');
    Route::get('data-pengumpulan-tugas', [DashboardDosenController::class, 'pengumpulan_tugas'])->name('dosen.data-pengumpulan-tugas');
    Route::get('data-pengumpulan-tugas1', [DashboardDosenController::class, 'pengumpulan_tugas1'])->name('dosen.data-pengumpulan-tugas1');
    Route::get('data-pengumpulan-tugas2', [DashboardDosenController::class, 'pengumpulan_tugas2'])->name('dosen.data-pengumpulan-tugas2');
    Route::get('data-pengumpulan-tugas3', [DashboardDosenController::class, 'pengumpulan_tugas3'])->name('dosen.data-pengumpulan-tugas3');
    Route::delete('data-pengumpulan-tugas1/destroy/{tuga}', [DashboardDosenController::class, 'destroy'])->name('dosen.data-pengumpulan-tugas1.destroy');
    Route::delete('data-pengumpulan-tugas2/destroy2/{tuga}', [DashboardDosenController::class, 'destroy2'])->name('dosen.data-pengumpulan-tugas2.destroy2');
    Route::delete('data-pengumpulan-tugas3/destroy3/{tuga}', [DashboardDosenController::class, 'destroy3'])->name('dosen.data-pengumpulan-tugas3.destroy3');
    Route::resource('materi', MateriController::class);
    Route::resource('materi2', Materi2Controller::class);
    Route::resource('materi3', Materi3Controller::class);
    Route::resource('tugas', TugasController::class);
    Route::resource('tugas2', Tugas2Controller::class);
    Route::resource('tugas3', Tugas3Controller::class);
    // Route::get('download/{$id}', [MateriController::class, 'download']);
    // Route::get('profile', [DosenController::class, 'profile'])->name('dosen.profile');
    // Route::get('settings', [DosenController::class, 'settings'])->name('dosen.settings');
});

// Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');
