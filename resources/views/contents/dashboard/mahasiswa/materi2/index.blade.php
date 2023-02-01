@extends('layouts.dashboard-user')
@section('content')
<section class="content">
<div class="content-wrapper">
    <div class="container-fluid">
        <br>
        <h2 class="mb-3">MATERI KULIAH SEMESTER 2 <a href="{{route('mahasiswa.data-materi')}}" class="btn btn-primary float-right">Kembali</a></h2>

        <div class="card card-success">
          <div class="card-body">
            <div class="row">
            @if ($materi_2->isEmpty())
                <div class="text-center my-2"><i>Data Kosong</i></div>
            @else
            @foreach ($materi_2 as $list )
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="/adminlte-3.1.0/dist/img/{{$list->kategori_materi}}.jpg" alt="Dist Photo 3">
                </div>
                <div class="card-body p-1">
                    <h5 class="card-title text-black">{{$list->nama_materi}}</h5>
                    <br>
                    <a href="{{ route('mahasiswa.data-materi.semester-2.detail', ['detailmateri2' => $list->id]) }}" class="text-primary">Detail</a>
                </div>
            </div>
            @endforeach
            @endif
            </div>
          </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
</section>
<!-- /.content-wrapper -->
@endsection


