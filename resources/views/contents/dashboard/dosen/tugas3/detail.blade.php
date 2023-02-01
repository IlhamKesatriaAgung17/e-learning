@extends('layouts.dashboard-dosen')

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
                <h3>Detail Tugas<a href="{{route('tugas3.index')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                    {{-- <table align="left" cellpadding="2" width="100%">
                        <img src="{{asset('img/tugas/'.$tugas->foto)}}" height="30%" width="30%" alt="{{$tuga->nama}}" style="float: left">
                        <tbody>
                            <tr>
                                <td><b>Nama&nbsp;Materi</b></td><td>:</td><td>{{ $tuga->nama_materi }}</td>
                            </tr>
                            <tr>
                                <td><b>Mata&nbsp;Kuliah</b></td><td>:</td><td>{{$tuga->matkul}}</td>
                            </tr>
                            <tr>
                                <td><b>Semester</b></td><td>:</td><td>{{$tuga->semester}}</td>
                            </tr>
                            <tr>
                                <td><b>Deskripsi</b></td><td>:</td><td style="text-align: justify">{{$tuga->deskripsi}}</td>
                            </tr>

                            <tr>
                                <td><b>File</b></td><td>:</td><td><a href="/img/tugas/{{$tuga->file}}"><button class="btn btn-primary btn-sm" type="button">Download Tugas {{$tuga->nama_tugas}}</button></a></td>
                            </tr>
                        </tbody>

                    </table> --}}
                    {{-- <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row"> --}}
                          <div class="col-12">
                            <h4>
                              <i class="fas fa-globe"></i> {{$tugas3->nama_tugas}}
                              <small class="float-right">Mulai : {{$tugas3->tgl_mulai}}</small>
                            </h4>
                          </div>
                          <!-- /.col -->
                        {{-- </div> --}}


                        <div class="row">
                          <!-- accepted payments column -->
                          <div class="col-lg-12">
                            &nbsp;
                            <p style="margin-left: 10%">
                              {!!$tugas3->deskripsi!!}
                            </p>
                          </div>
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            &nbsp;&nbsp;&nbsp;
                            <h4>
                                <small style="float: left">Selesai : {{$tugas3->tgl_selesai}}</small>
                            </h4>
                          <div class="col-12">
                            {{-- <a href="/img/tugas/{{$tugas2->file}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> --}}
                            <a href="/img/tugas/semester3/{{$tugas3->file}}"><button class="btn btn-primary  float-left" type="button"> <i class="fas fa-download"></i> Download Tugas {{$tugas3->nama_tugas}}</button></a>
                          </div>
                        </div>
                        {{-- </div>
                      </div> --}}
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
