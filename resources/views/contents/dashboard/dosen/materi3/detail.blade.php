@extends('layouts.dashboard')

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
                <h3>Detail Materi<a href="{{route('materi.index')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                    <table align="right" cellpadding="2" align="right" width="700" >
                        <img src="{{asset('img/materi/'.$materi->foto)}}" height="30%" width="30%" alt="{{$materi->nama}}" style="float: left">
                        <tbody>
                            <tr>
                                <td><b>Nama</b></td><td>:</td><td>{{$materi->nama}}</td>
                            </tr>
                            <tr>
                                <td><b>Mata Kuliah</b></td><td>:</td><td>{{$materi->matkul}}</td>
                            </tr>
                            <tr>
                                <td><b>Semester</b></td><td>:</td><td>{{$materi->semester}}</td>
                            </tr>
                            <tr>
                                <td><b>File</b></td><td>:</td><td>{{$materi->file}}</td>
                            </tr>
                        </tbody>
                    </table>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
