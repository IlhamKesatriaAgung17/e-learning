@extends('layouts.dashboard-dosen')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA TUGAS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Edit Data Tugas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Edit Data Tugas</h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                   <form action="{{route('tugas2.update', $dttugas2 = $tugas2->id)}}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="nama_tugas">Nama Tugas</label>
                         <input type="text" id="nama_tugas" name="nama_tugas" class="form-control" value="{{$tugas2->nama_tugas}}">
                        </div>

                        <div class="form-group">
                         <label for='matkul'>Mata Kuliah</label> <br>
                             <select id="matkul" name="matkul" class="form-control">
                                <option value="{{$tugas2->matkul}}">{{$tugas2->matkul}}</option>
                                <option value="Pemrograman Web PHP">Pemrograman Web PHP</option>
                                <option value="Sistem Informasi Manajemen">Sistem Informasi Manajemen</option>
                             </select>
                         </div>

                        <div class="form-group">
                         <label for='semester'>Semester</label> <br>
                         <select id="semester" name="semester" class="form-control">
                             <option value="{{$tugas2->semester}}">{{$tugas2->semester}}</option>
                             <option value="I">I</option>
                             <option value="II">II</option>
                             <option value="III">III</option>
                         </select>
                        </div>

                        <div class="form-group">
                            <label for="tgl_mulai">Mulai</label>
                             <input type="datetime-local" id="tgl_mulai" name="tgl_mulai" class="form-control" value="{{$tugas2->tgl_mulai}}">
                        </div>

                        <div class="form-group">
                         <label for="tgl_mulai">Selesai</label>
                          <input type="datetime-local" id="tgl_selesai" name="tgl_selesai" class="form-control" value="{{$tugas2->tgl_selesai}}">
                     </div>

                        <div class="form-group">
                         <label for=''>Deskripsi</label> <br>
                         <textarea name="deskripsi"  id="summernote"  cols="30" rows="10">{!!$tugas2->deskripsi!!}</textarea>
                        </div>

                        <div class="form-group">
                            <label for='file'>File/Dokumen</label> <br>
                            <input type="file" id="file" name="file" class="form-control">
                            <br>
                            <a href="/img/tugas/semester2/{{$tugas2->file}}"><button class="btn btn-primary" type="button">Download Tugas {{$tugas2->nama_tugas}}</button></a>
                        </div>

                       <div class="form-group" style="float: right">
                        <a href="{{route('tugas2.index')}}" class="btn btn-danger">Batal</a>&nbsp;&nbsp;<button type="submit" class="btn btn-success">Simpan Data</button>
                       </div>
                   </form>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
