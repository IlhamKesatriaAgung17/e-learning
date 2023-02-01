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
                        <li class="breadcrumb-item active">Data Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Dosen</h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                   <form action="{{route('dosen.store')}}" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                       <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                       </div>

                       <div class="form-group">
                        <input type="text" id="kode_dosen" name="kode_dosen" class="form-control" placeholder="Kode Dosen">
                       </div>

                       <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                       </div>

                       <div class="form-group">
                        <input type="text" id="no_tlp" name="no_tlp" class="form-control" placeholder="No HP">
                       </div>

                       <div class="form-group">
                        <input type="file" id="foto" name="foto" class="form-control">
                       </div>

                       <div class="form-group" style="float: right">
                        <a href="{{route('dosen.index')}}" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                       </div>
                   </form>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
