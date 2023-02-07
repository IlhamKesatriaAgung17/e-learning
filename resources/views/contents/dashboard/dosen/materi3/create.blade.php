@extends('layouts.dashboard-dosen')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">TAMBAH DATA MATERI SEMESTER 3</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Tambah Data Materi Semester 3</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah Data Materi Semester 3</h3>
            </div>

           <div class="card-body">
            <table class="table table-bordered text-center">
                <form action="{{route('materi3.store')}}" method="POST" enctype="multipart/form-data">
                     @method('post')
                     @csrf
                     <div class="form-group">
                         <label for="">Kategori Materi :</label><br>
                         <input type="radio" id="pwfl" name="kategori_materi" value="PWFL">
                         <label for="PWFL">PWFL</label><br>
                         <input type="radio" id="basisdata" name="kategori_materi" value="BD">
                         <label for="BD">BD</label><br>
                         <input type="radio" id="AK" name="kategori_materi" value="AK">
                         <label for="AK">AK</label><br>
                     </div>

                    <div class="form-group">
                     <label for='nama_materi'>Nama Materi</label> <br>
                     <input type="text" id="nama_materi" name="nama_materi" class="form-control" placeholder="Nama Materi">
                    </div>

                    <div class="form-group">
                         <label for='matkul'>Mata Kuliah</label> <br>
                         <select id="matkul" name="matkul" class="form-control">
                             <option value="pilih">Pilih Mata Kuliah</option>
                             <option value="Pemrograman Web Framewok Laravel">Pemrograman Web Framewok Laravel</option>
                             <option value="Basis Data">Basis Data</option>
                             <option value="Arsitektur Komputer">Arsitektur Komputer</option>
                         </select>
                    </div>

                    <div class="form-group">
                     <label for='semester'>Semester</label> <br>
                     <select id="semester" name="semester" class="form-control">
                         <option value="pilih">Pilih Semester</option>
                         <option value="I">I</option>
                         <option value="II">II</option>
                         <option value="III">III</option>
                     </select>
                    </div>

                    <div class="form-group">
                     <label for='file'>File/Dokumen</label> <br>
                     <input type="file" id="file" name="file" class="form-control" placeholder="File">
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label><br>
                        <textarea name="deskripsi"  id="summernote"  cols="30" rows="10"></textarea>
                    </div>


                    {{-- <div class="form-group">
                     <input type="file" id="foto" name="foto" class="form-control">
                    </div> --}}

                    <div class="form-group" style="float: right">
                     <a href="{{route('materi3.index')}}" class="btn btn-danger">Batal</a>
                     <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
             </table>
           </div>
       </div>
    </div>
</div>
@endsection
