@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA DOSEN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Edit Data Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Edit Data Dosen</h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                   <form action="{{route('dosen.update', $dtdosen = $dosen->id)}}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                       <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{$dosen->nama}}">
                       </div>

                       <div class="form-group">
                        <input type="text" id="kode_dosen" name="kode_dosen" class="form-control" placeholder="kode_dosen" value="{{$dosen->kode_dosen}}"">
                       </div>

                       <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{$dosen->email}}">
                       </div>

                       <div class="form-group">
                        <input type="text" id="no_tlp" name="no_tlp" class="form-control" placeholder="No HP" value="{{$dosen->no_tlp}}">
                       </div>

                       <div class="form-group">
                        <img src="{{asset('img/dosen/'.$dosen->foto)}}" height="20%" width="20%" alt="foto">
                        <br>
                        <br>
                        <input type="file" id="foto" name="foto" class="form-control">
                       </div>

                       <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button> <a href="{{route('dosen.index')}}" class="btn btn-danger">Batal</a>
                       </div>
                   </form>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
