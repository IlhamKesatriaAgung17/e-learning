@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA MAHASISWA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Edit Data Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Edit Data Mahasiswa</h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                   <form action="{{route('mahasiswa.update', $dtmahasiswa = $mahasiswa->id)}}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                       <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{$mahasiswa->nama}}">
                       </div>

                       <div class="form-group">
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="Nim" value="{{$mahasiswa->nim}}"">
                       </div>

                       <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{$mahasiswa->email}}">
                       </div>

                       <div class="form-group">
                            <select name="semester" id="semester" class="form-control">
                                <option value="{{$mahasiswa->semester}}">{{$mahasiswa->semester}}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                       </div>

                       <div class="form-group">
                        <select name="angkatan" id="angkatan" class="form-control">
                            <option value="{{$mahasiswa->angkatan}}">{{$mahasiswa->angkatan}}</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                        </div>

                       <div class="form-group">
                        <input type="text" id="no_tlp" name="no_tlp" class="form-control" placeholder="No HP" value="{{$mahasiswa->no_tlp}}">
                       </div>

                       <div class="form-group">
                        <img src="{{asset('img/mahasiswa/'.$mahasiswa->foto)}}" height="20%" width="20%" alt="foto">
                        <br>
                        <br>
                        <input type="file" id="foto" name="foto" class="form-control">
                       </div>

                       <div class="form-group" style="float: right">
                        <a href="{{route('mahasiswa.index')}}" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                       </div>
                   </form>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
