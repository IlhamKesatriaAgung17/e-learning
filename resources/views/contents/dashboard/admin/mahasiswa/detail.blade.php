@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DETAIL MAHASISWA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Detail Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header bg-success">
                <h3>Detail Mahasiswa<a href="{{route('mahasiswa.index')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                    <table align="right" cellpadding="2" width="700" >
                        <img src="{{asset('img/mahasiswa/'.$mahasiswa->foto)}}" height="30%" width="30%" alt="{{$mahasiswa->nama}}" style="float: left">
                        <tbody>
                            <tr>
                                <td><b>Nama</b></td><td>:</td><td>{{$mahasiswa->nama}}</td>
                            </tr>
                            <tr>
                                <td><b>NIM</b></td><td>:</td><td>{{$mahasiswa->nim}}</td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td><td>:</td><td>{{$mahasiswa->email}}</td>
                            </tr>
                            <tr>
                                <td><b>Semester</b></td><td>:</td><td>{{$mahasiswa->semester}}</td>
                            </tr>
                            <tr>
                                <td><b>Angkatan</b></td><td>:</td><td>{{$mahasiswa->angkatan}}</td>
                            </tr>
                            <tr>
                                <td><b>No HP</b></td><td>:</td><td>{{$mahasiswa->no_tlp}}</td>
                            </tr>
                        </tbody>
                    </table>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
