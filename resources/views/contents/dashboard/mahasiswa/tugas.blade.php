@extends('layouts.dashboard-user')
@section('content')
<section class="content">
<div class="content-wrapper">
    <div class="container-fluid">
        <br>
        <h2 class="mb-3">TUGAS KULIAH</h2>
        <div class="card card-success">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('adminlte-3.1.0/dist/img/semester1.jpg')}}" alt="Dist Photo 3">
                </div>
                <div class="card-body p-1">
                    <h5 class="card-title text-black">SEMESTER 1</h5>
                    <br>
                    <a href="{{ route('mahasiswa.tugas.semester-1')}}" class="text-primary">Detail</a>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('adminlte-3.1.0/dist/img/semester2.jpg')}}" alt="Dist Photo 3">
                </div>
                <div class="card-body p-1">
                    <h5 class="card-title text-black">SEMESTER 2</h5>
                    <br>
                    <a href="{{ route('mahasiswa.tugas.semester-2')}}" class="text-primary">Detail</a>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('adminlte-3.1.0/dist/img/semester3.jpg')}}" alt="Dist Photo 3">
                </div>
                <div class="card-body p-1">
                    <h5 class="card-title text-black">SEMESTER 3</h5>
                    <br>
                    <a href="{{ route('mahasiswa.tugas.semester-3')}}" class="text-primary">Detail</a>
                </div>
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

