@extends('layouts.dashboard-user')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PENGUMPULAN TUGAS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Pengumpulan Tugas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            {{-- <div class="card-header bg-success">
                <h3>Detail Tugas<a href="{{route('mahasiswa.tugas.semester-1')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div> --}}
           <div class="card-body">
                <table class="table table-bordered text-center">
                    <form action="{{route('pengumpulan-tugas.store')}}" method="POST" enctype="multipart/form-data">
                         @method('post')
                         @csrf
                        <div class="form-group">
                            <label for="nama_tugas">Nama Mahasiswa</label>
                         <input type="text" id="nama_mhs" name="nama_mhs" class="form-control" placeholder="Nama Mahasiswa">
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
                             <option value="I(Satu)">I(Satu)</option>
                             <option value="II(Dua)">II(Dua)</option>
                             <option value="III(Tiga)">III(Tiga)</option>
                         </select>
                        </div>

                        <div class="form-group">
                         <label for="file">File/Dokumen</label>
                         <input type="file" id="file" name="file" class="form-control" placeholder="File">
                        </div>

                        <div class="form-group" style="float: right">
                         {{-- <a href="{{route('mahasiswa.tugas.semester-1.detail')}}" class="btn btn-danger">Batal</a> --}}
                         <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </form>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
