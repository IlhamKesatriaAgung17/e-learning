@extends('layouts.dashboard-user')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DETAIL TUGAS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Detail Tugas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header bg-success">
                <h3>Detail Tugas<a href="{{route('mahasiswa.tugas.semester-3')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                    <table align="left" cellpadding="4" width="100%" >
                        {{-- <img src="/adminlte-3.1.0/dist/img/{{$detailtugas->kategori_materi}}.jpg" height="40%" width="40%" alt="{{ $detailmateri->nama_materi }}" style="float: left"> --}}
                        {{-- <tbody>
                            <tr>
                                <td><b>Nama&nbsp;Materi</b></td><td>:</td><td>{{ $detailmateri->nama_materi }}</td>
                            </tr>
                            <tr>
                                <td><b>Mata&nbsp;Kuliah</b></td><td>:</td><td>{{$detailmateri->matkul}}</td>
                            </tr>
                            <tr>
                                <td><b>Semester</b></td><td>:</td><td>{{$detailmateri->semester}}</td>
                            </tr>
                            <tr>
                                <td><b>Deskripsi</b></td><td>:</td><td style="text-align: justify">{{$detailmateri->deskripsi}}</td>
                            </tr>
                            <tr>
                                <td><b>File</b></td><td>:</td><td><a href="/img/materi/{{$detailmateri->file}}"><button class="btn btn-primary btn-sm" type="button">Download Materi<br>{{$detailmateri->nama_materi}}</button></a></td>
                            </tr>
                        </tbody> --}}
                        <div class="col-12">
                            <h4>
                              <i class="fas fa-globe"></i> {{$detailtugas3->nama_tugas}}
                              <small class="float-right">Mulai : {{$detailtugas3->tgl_mulai}}</small>
                            </h4>
                        </div>

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-12" style="text-align: justify">
                              <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                {!!$detailtugas3->deskripsi!!}
                              </p>
                            </div>
                        </div>

                        <div class="row no-print">
                            &nbsp;&nbsp;&nbsp;
                            <h4>
                                <small style="float: left">Selesai : {{$detailtugas3->tgl_selesai}}</small>
                            </h4>
                          <div class="col-12">
                            {{-- <a href="/img/tugas/{{$detailtugas3->file}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> --}}
                            <a href="/img/tugas/semester3/{{$detailtugas3->file}}"><button class="btn btn-primary  float-left" type="button"> <i class="fas fa-download"></i> Download Tugas {{$detailtugas3->nama_tugas}}</button></a>
                          </div>
                        </div>
                    </table>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
