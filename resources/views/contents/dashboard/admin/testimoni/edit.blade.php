@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA TESTIMONI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Edit Testimoni</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Edit Testimoni</h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                   <form action="{{route('testimoni.update', $dttestimoni = $testimoni->id)}}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                       <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="nama" value="{{$testimoni->nama}}">
                       </div>

                       <div class="form-group">
                        <input type="text" id="role" name="role" class="form-control" placeholder="role" value="{{$testimoni->role}}">
                       </div>

                       <div class="form-group">
                        <label for='matkul'>Jenis Kelamin</label> <br>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                <option value="{{$testimoni->jenis_kelamin}}">{{$testimoni->jenis_kelamin}}</option>
                                <option value="1.jpg">Laki-Laki</option>
                                <option value="2.jpg">Perempuan</option>
                            </select>
                       </div>

                       <div class="form-group">
                        <textarea type="text" id="pesan" name="pesan" class="form-control" placeholder="pesan" value="{{$testimoni->pesan}}">
                       </div>

                       <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button> <a href="{{route('matkul.index')}}" class="btn btn-danger">Batal</a>
                       </div>
                   </form>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
