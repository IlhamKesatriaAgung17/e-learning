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
                <h3>Detail Tugas<a href="{{route('mahasiswa.tugas.semester-1')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div>
           <div class="card-body">
                <table class="table table-bordered text-center">
                    <table align="left" cellpadding="4" width="100%" >
                        <div class="col-12">
                            <h4>
                              <i class="fas fa-globe"></i> {{$detailtugas->nama_tugas}}
                              <small class="float-right">Mulai : {{$detailtugas->tgl_mulai}}</small>
                            </h4>
                        </div>

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-12" style="text-align: justify">
                              <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                {!!$detailtugas->deskripsi!!}
                              </p>
                            </div>
                        </div>

                        <div class="row no-print">
                            &nbsp;&nbsp;&nbsp;
                            <h4>
                                <small style="float: left">Selesai : {{$detailtugas->tgl_selesai}}</small>
                            </h4>
                          <div class="col-12">
                            {{-- <a href="/img/tugas/{{$detailtugas->file}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> --}}
                            <a href="/img/tugas/semester1/{{$detailtugas->file}}"><button class="btn btn-primary  float-left" type="button"> <i class="fas fa-download"></i> Download Tugas {{$detailtugas->nama_tugas}}</button></a>
                          </div>
                        </div>
                    </table>


                </table>
           </div>
       </div>
    </div>
</div>
@endsection
