@extends('layouts.dashboard-dosen')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA MATERI SEMESETER 2</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Edit Data Materi Semester 2</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Edit Data Materi Semester 2</h3>
            </div>

           <div class="card-body">
            <table class="table table-bordered text-center">
                <form action="{{route('materi2.update', $dtmateri2 = $materi2->id)}}" method="POST" enctype="multipart/form-data">
                     @method('patch')
                     @csrf

                    <div class="form-group">
                        <label for='kategori_materi'>Kategori Materi :</label> <br>
                        <select id="kategori_materi" name="kategori_materi" class="form-control">
                            <option value="{{$materi2->kategori_materi}}">{{$materi2->kategori_materi}}</option>
                            <option value="PHP">PHP</option>
                            <option value="SIM">SIM</option>
                        </select>
                    </div>

                    <div class="form-group">
                     <label for='nama_materi'>Nama Materi</label> <br>
                     <input type="text" id="nama_materi" name="nama_materi" class="form-control" placeholder="Nama" value="{{$materi2->nama_materi}}">
                    </div>

                    <div class="form-group">
                     <label for='matkul'>Mata Kuliah</label> <br>
                         <select id="matkul" name="matkul" class="form-control">
                             <option value="{{$materi2->matkul}}">{{$materi2->matkul}}</option>
                             <option value="Pemrograman Web HTML">Pemrograman HTML</option>
                             <option value="Algoritma">Algoritma</option>
                         </select>
                    </div>

                    <div class="form-group">
                     <label for='semester'>Semester</label> <br>
                     <select id="semester" name="semester" class="form-control">
                         <option value="{{$materi2->semester}}">{{$materi2->semester}}</option>
                         <option value="I">I</option>
                         <option value="II">II</option>
                         <option value="III">III</option>
                     </select>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label><br>
                        <textarea name="deskripsi"  id="summernote"  cols="30" rows="10">{{$materi2->deskripsi}}</textarea>
                    </div>
                    <div class="form-group">
                     <label for='file'>File/Dokumen</label> <br>
                     <input type="file" id="file" name="file" class="form-control">
                     <br>
                     <a href="/img/materi/semester2/{{$materi2->file}}"><button class="btn btn-primary" type="button">Download {{$materi2->nama_materi}}</button></a>
                    </div>

                    <div class="form-group">
                     <button type="submit" class="btn btn-success">Simpan Data</button> <a href="{{route('materi.index')}}" class="btn btn-danger">Batal</a>
                    </div>
                </form>
             </table>
           </div>
       </div>
    </div>
</div>
@endsection
