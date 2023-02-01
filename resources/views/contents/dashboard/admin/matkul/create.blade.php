@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA MATA KULIAH</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Mata Kuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Mata Kuliah</h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                   <form action="{{route('matkul.store')}}" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                       <div class="form-group">
                        <input type="text" id="nama_mk" name="nama_mk" class="form-control" placeholder="Nama">
                       </div>

                       <div class="form-group">
                        <input type="text" id="kode_matkul" name="kode_matkul" class="form-control" placeholder="Kode matkul">
                       </div>

                       <div class="form-group">
                        <input type="text" id="sks" name="sks" class="form-control" placeholder="SKS">
                       </div>

                       <div class="form-group">
                        <input type="file" id="foto" name="foto" class="form-control">
                       </div>

                       <div class="form-group" style="float: right">
                        <a href="{{route('matkul.index')}}" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                       </div>
                   </form>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
