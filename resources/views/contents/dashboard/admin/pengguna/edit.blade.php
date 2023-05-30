@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA PENGGUNA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Pengguna</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Pengguna</h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                   <form action="{{route('pengguna.update', $dtpengguna = $pengguna->id)}}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                       <div class="form-group">
                        <label for='name'>Nama</label> <br>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $pengguna->name}}" required autocomplete="name" placeholder="Nama">
                       </div>

                       <div class="form-group">
                        <label for='email'>Email</label> <br>
                        <input  for="email" id="email" name="email" required autocomplete="email" value="{{ $pengguna->email}}" class="form-control" placeholder="Email">
                       </div>

                       <div class="form-group">
                        <label for='role'>Role</label> <br>
                        <select id="role" name="role" class="form-control">
                            <option value="{{$pengguna->role}}">
                                Pilih Role
                            </option>
                            <option value="1">Admin</option>
                            <option value="2">Mahasiswa</option>
                            <option value="3">Dosen</option>
                        </select>
                   </div>
                       <div class="form-group" style="float: right">
                        <a href="{{route('pengguna.index')}}" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-success">Update Data</button>
                       </div>
                   </form>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
