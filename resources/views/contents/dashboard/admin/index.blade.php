@extends('layouts.dashboard')
@section('content')
<section class="content">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ADMIN DASHBOARD</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!--content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>#</h3>

                      <p>Jumlah Mahasiswa</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>#</h3>

                      <p>Jumlah Dosen</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                      <div class="inner">
                        <h3>#</h3>

                        <p>Jumlah Mata Kuliah</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-book" aria-hidden="true"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                      <div class="inner">
                        <h3>#</h3>

                        <p>Jumlah Kelas</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-university" aria-hidden="true"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- small box -->
                    <div class="small-box bg-dark">
                      <div class="inner">
                        <h3 class="text-center">TIME</h3>
                      </div>
                      <div class="icon">
                        <i class="far fa-clock"></i>
                      </div>
                      <form action="#" method="POST">
                        @csrf
                        <div class="form group">
                            <center>
                                <label id="clock" style="font-size: 40px; color:#de0a0a; -webkit-text-stroke: 3px #ecf1f3;
                                 text-shadow: 4px 4px 10px #050505,
                                4px 4px 20px #535551,
                                4px 4px 30px #535551,
                                4px 4px 40px #535551;">
                            </label>
                            </center>
                          </div>
                      </form>
                    </div>
                  </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <div class="card card-widget widget-user-2 ">
                                <div class="widget-user-header bg-secondary">
                                    <div class="widget-user-image">
                                    <img class="img-circle elevation-2 img-thumbnail bg-success" src="{{ asset('img/' . Auth::user()->avatar) }}" alt="User Avatar">
                                    </div>
                                    <h3 class="widget-user-username"><strong>Welcome, {{ Auth::user()->name }}</strong></h3>
                                </div>
                                <div class="card-footer p-0 bg-warning">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <div class="card bg-secondary">
                                <div class="card-header border-0 mx-auto">
                                    <h3 class="card-title">
                                        <i class="far fa-calendar-alt"></i>
                                        @php
                                            echo date('l, d F Y');
                                        @endphp
                                    </h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="calendar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

