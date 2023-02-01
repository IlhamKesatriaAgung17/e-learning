@extends('layouts.dashboard-dosen')
@section('content')
<section class="content">
<div class="content-wrapper">
    <div class="container-fluid">
        <br>
        <h5 class="mb-3">DASHBOARD DOSEN</h5>
        <div class="col-lg-12 col-md-12 col-sm-12 p-1">
            <div class="row">
                <div class="col">
                    <div class="card card-widget widget-user-2 ">
                        <div class="widget-user-header bg-primary">
                            <div class="widget-user-image">
                            <img class="img-circle elevation-2 img-thumbnail bg-success" src="{{ asset('img/' . Auth::user()->avatar) }}" alt="User Avatar">
                            </div>
                            <h3 class="widget-user-username"><strong>Selamat Datang, {{ Auth::user()->name }}</strong></h3>
                            <p class="widget">&nbsp;&nbsp; Semangat mengajarnya, semoga dipermudah segala urusannya</p>
                        </div>
                        {{-- <div class="card-footer p-0 bg-warning">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#about" class="nav-link">
                                    <strong> View Profile </strong> <span class="float-right badge bg-primary"><i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://wa.me/6285624448878" class="nav-link">
                                       <strong> Contact </strong> <span class="float-right badge bg-primary"><i class="fas fa-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div >
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>{{$jumlah_materi}}</h3>

                        <p>Jumlah Materi Semester 1</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-book"></i>
                      </div>
                      <a href="{{ route('materi.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                  <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>{{$jumlah_materi2}}</h3>

                        <p>Jumlah Materi Semester 2</p>
                      </div>
                      <div class="icon">
                          <i class="fa fa-book" aria-hidden="true"></i>
                      </div>
                      <a href="{{ route('materi2.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-primary">
                        <div class="inner">
                          <h3>{{$jumlah_materi3}}</h3>

                          <p>Jumlah Materi Semester 3</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                        <a href="{{ route('materi3.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                      <div class="inner">
                        <h3>{{$jumlah_tugas}}</h3>

                        <p>Jumlah Tugas</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-list" aria-hidden="true"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
          </div>

    </div><!-- /.container-fluid -->
</div>
</section>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script src="{{ asset('adminlte-3.1.0/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte-3.1.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script>
    $(function () {
        $('#calendar').datetimepicker({
            format: 'L',
            inline: true
        })
    })
</script>
@endsection

