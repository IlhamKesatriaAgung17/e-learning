@extends('layouts.dashboard')

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
                <form action="{{route('materi2.update', $dtmateri = $materi->id)}}" method="POST" enctype="multipart/form-data">
                     @method('patch')
                     @csrf

                     <div class="form-group">
                         <label for="">Kategori Materi :</label><br>
                         <input type="radio" id="PWH" name="kategori_materi" value="PWH">
                         <label for="PWH">PWH</label><br>
                         <input type="radio" id="Algo" name="kategori_materi" value="Algo">
                         <label for="Algo">Algo</label><br>
                     </div>

                    <div class="form-group">
                     <label for='nama_materi'>Nama Materi</label> <br>
                     <input type="text" id="nama_materi" name="nama_materi" class="form-control" placeholder="Nama" value="{{$materi->nama_materi}}">
                    </div>

                    <div class="form-group">
                     <label for='matkul'>Mata Kuliah</label> <br>
                         <select id="matkul" name="matkul" class="form-control">
                             <option value="pilih">{{$materi->matkul}}</option>
                             <option value="Pemrograman Web HTML">Pemrograman HTML</option>
                             <option value="Algoritma">Algoritma</option>
                         </select>
                    </div>

                    <div class="form-group">
                     <label for='semester'>Semester</label> <br>
                     <select id="semester" name="semester" class="form-control">
                         <option value="pilih">{{$materi->semester}}</option>
                         <option value="I">I</option>
                         <option value="II">II</option>
                         <option value="III">III</option>
                     </select>
                    </div>
                    <div class="form-group">
                     <label for='deskripsi'>Deskripsi</label> <br>
                     <textarea name="deskripsi" id="deskripsi" cols="142" rows="10">{{$materi->deskripsi}}</textarea>
                    </div>
                    <div class="form-group">
                     <label for='file'>File/Dokumen</label> <br>
                     <input type="file" id="file" name="file" class="form-control">
                     <br>
                     <a href="/img/materi/{{$materi->file}}"><button class="btn btn-primary" type="button">Download {{$materi->nama_materi}}</button></a>
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
