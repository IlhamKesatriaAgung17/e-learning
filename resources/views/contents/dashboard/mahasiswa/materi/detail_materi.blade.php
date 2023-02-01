@extends('layouts.dashboard-user')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DETAIL MATERI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Detail Materi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header bg-success">
                <h3>Detail Materi<a href="{{route('mahasiswa.data-materi.semester-1')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                    <table align="left" cellpadding="4" width="100%" >
                        <center><img src="/adminlte-3.1.0/dist/img/{{$detailmateri->kategori_materi}}.jpg" height="40%" width="40%" alt="{{ $detailmateri->nama_materi }}"></center>
                        <tbody>
                            <tr>
                                <td><b>Nama&nbsp;Materi</b></td><td>:</td><td>{{ $detailmateri->nama_materi }}</td>
                            </tr>
                            <tr>
                                <td><b>Mata&nbsp;Kuliah</b></td><td>:</td><td>{{$detailmateri->matkul}}</td>
                            </tr>
                            <tr>
                                <td><b>Semester</b></td><td>:</td><td>{{$detailmateri->semester}}</td>
                            </tr>
                            <tr>
                                <td><b>Deskripsi</b></td><td>:</td><td style="text-align: justify">{{$detailmateri->deskripsi}}</td>
                            </tr>
                            <tr>
                                <td><b>File</b></td><td>:</td><td><a href="/img/materi/{{$detailmateri->file}}"><button class="btn btn-primary btn-sm" type="button">Download Materi<br>{{$detailmateri->nama_materi}}</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
