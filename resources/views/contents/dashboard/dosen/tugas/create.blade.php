@extends('layouts.dashboard-dosen')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">TAMBAH DATA TUGAS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Tambah Data Tugas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Tugas</h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                   <form action="{{route('tugas.store')}}" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                       <div class="form-group">
                           <label for="nama_tugas">Nama Tugas</label>
                        <input type="text" id="nama_tugas" name="nama_tugas" class="form-control" placeholder="Nama tugas">
                       </div>

                       <div class="form-group">
                        <label for='matkul'>Mata Kuliah</label> <br>
                            <select id="matkul" name="matkul" class="form-control">
                                <option value="pilih">Pilih Mata Kuliah</option>
                                <option value="Pemrograman Web HTML">Pemrograman Web HTML</option>
                                <option value="ALgoritma">Algoritma</option>
                            </select>
                        </div>

                       <div class="form-group">
                        <label for='semester'>Semester</label> <br>
                        <select id="semester" name="semester" class="form-control">
                            <option value="pilih">Pilih Semester</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                        </select>
                       </div>

                       <div class="form-group">
                           <label for="tgl_mulai">Mulai</label>
                            <input type="datetime-local" id="tgl_mulai" name="tgl_mulai" class="form-control">
                       </div>

                       <div class="form-group">
                        <label for="tgl_mulai">Selesai</label>
                         <input type="datetime-local" id="tgl_selesai" name="tgl_selesai" class="form-control">
                    </div>

                       <div class="form-group">
                        <label for='deskripsi'>Deskripsi</label> <br>
                        <textarea  id="deskripsi" name="deskripsi" class="form-control" cols="142" rows="10" placeholder="deskripsi"></textarea>
                       </div>

                       <div class="form-group">
                        <label for="file">File/Dokumen</label>
                        <input type="file" id="file" name="file" class="form-control" placeholder="File">
                       </div>

                       {{-- <div class="form-group">
                        <input type="file" id="foto" name="foto" class="form-control">
                       </div> --}}

                       <div class="form-group" style="float: right">
                        <a href="{{route('tugas.index')}}" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                       </div>
                   </form>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
