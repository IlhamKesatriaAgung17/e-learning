@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DETAIL DOSEN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Detail Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header bg-success">
                <h3>Detail DOsena<a href="{{route('dosen.index')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                    <table align="right" cellpadding="2" align="right" width="700" >
                        <img src="{{asset('img/dosen/'.$dosen->foto)}}" height="30%" width="30%" alt="{{$dosen->nama}}" style="float: left">
                        <tbody>
                            <tr>
                                <td><b>Nama</b></td><td>:</td><td>{{$dosen->nama}}</td>
                            </tr>
                            <tr>
                                <td><b>Kode Dosen</b></td><td>:</td><td>{{$dosen->kode_dosen}}</td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td><td>:</td><td>{{$dosen->email}}</td>
                            </tr>
                            <tr>
                                <td><b>No HP</b></td><td>:</td><td>{{$dosen->no_tlp}}</td>
                            </tr>
                        </tbody>
                    </table>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
