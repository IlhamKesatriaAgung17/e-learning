@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DETAIL MATA KULIAH</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Detail Mata Kuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header bg-success">
                <h3>Detail Mata Kuliah<a href="{{route('matkul.index')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                    <table align="right" cellpadding="2" align="right" width="600" >
                        <img src="{{asset('img/matkul/'.$matkul->foto)}}" height="30%" width="30%" alt="{{$matkul->nama}}" style="float: left">
                        <tbody>
                            <tr>
                                <td><b>Nama</b></td><td>:</td><td>{{$matkul->nama_mk}}</td>
                            </tr>
                            <tr>
                                <td><b>Kode matkul</b></td><td>:</td><td>{{$matkul->kode_matkul}}</td>
                            </tr>
                            <tr>
                                <td><b>SKS</b></td><td>:</td><td>{{$matkul->sks}}</td>
                            </tr>
                        </tbody>
                    </table>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
