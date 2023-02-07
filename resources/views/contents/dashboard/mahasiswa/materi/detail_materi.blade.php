@extends('layouts.dashboard-user')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DETAIL MATERI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Detail Materi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content text-dark">
       <div class="card card-info card-outline">
            <div class="card-header bg-success">
                <h3>Detail Materi<a href="{{route('mahasiswa.data-materi.semester-1')}}" class="btn btn-primary float-right">Kembali</a></h3>
            </div>

           <div class="card-body">
                <table class="table table-bordered text-center">
                    <table align="left" cellpadding="4" width="100%" >
                         {{-- <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row"> --}}
                            <div class="col-12">
                                <h4>
                                  <i class="fas fa-globe"></i> {{$detailmateri->nama_materi}}
                                  <small class="float-right">Mata Kuliah : {{$detailmateri->matkul}}</small>
                                </h4>
                              </div>
                              <!-- /.col -->
                            {{-- </div> --}}


                            <div class="row">
                              <!-- accepted payments column -->
                              <div class="col-lg-12">
                                &nbsp;
                                <p style="margin-left: 10%">
                                  {!!$detailmateri->deskripsi!!}
                                </p>
                              </div>
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                              <div class="col-12">
                                {{-- <a href="/img/tugas/{{$detailmateri->file}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> --}}
                                <a href="/img/materi/semester1/{{$detailmateri->file}}"><button class="btn btn-primary  float-left" type="button"> <i class="fas fa-download"></i> Download Materi {{$detailmateri->nama_materi}}</button></a>
                              </div>
                            </div>
                            {{-- </div>
                          </div> --}}
                    </table>
                </table>
           </div>
       </div>
    </div>
</div>
@endsection
