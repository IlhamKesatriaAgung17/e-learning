@extends('layouts.dashboard-dosen')
@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA MATERI SEMESTER 1</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dosen.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dosen.data-materi')}}">Data Materi Kuliah</a></li>
                        <li class="breadcrumb-item">Data Materi Semester 1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content text-dark">
       <div class="container-fluid">
        <div class="card">
           <div class="card-header">
            <h3 class="card-title">MATERI SEMESTER 1</h3>
            <a href="{{route('dosen.data-materi')}}" class="btn btn-primary btn-sm float-right">Kembali<i class="fas fa-plus-square"></i></a>
           </div>
           <a href="{{route('materi.create')}}" class="btn btn-success btn-sm float-right">Tambah Data <i class="fas fa-plus-square"></i></a>
           <div class="card-body table-responsive p-0">
            @if ($materi->isEmpty())
                <div class="text-center my-2"><i>Data Kosong</i></div>
            @else
                <table class="table table-bordered">
                    <tr class="text-center bg-primary">
                        <th>No</th>
                        <th width="100px">Kategori Materi</th>
                        <th width="300px">Nama Materi</th>
                        <th>Matkul</th>
                        <th>Semester</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($materi as $no => $items )
                    <tr class="bg-light text-center">
                        <td>{{$materi->firstitem()+$no}}</td>
                        <td>{{$items->kategori_materi}}</td>
                        <td>{{$items->nama_materi}}</td>
                        <td>{{$items->matkul}}</td>
                        <td>{{$items->semester}}</td>
                        <td><a href="{{ url('/img/materi/'.$items->file)}}"><button class="btn btn-primary" type="button">Download File</button></a></td>
                        <td class="text-center">
                            <div class="btn-group">
                            <a href="{{route('materi.edit',['materi' => $items->id]) }}"><i class="fas fa-edit btn btn-warning btn-sm"></i></a>
                            &nbsp;
                            <a href="#data{{ $items->id }}" data-toggle="modal"><i class="fas fa-trash-alt btn btn-danger btn-sm delete"></i></a>
                            </div>
                        </td>
                    </tr>

                    {{-- MODAL FOR DELETE items --}}
                    <div class="modal fade" tabindex="-1" id="data{{ $items->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Hapus Data {{ $items->nama_materi }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin akan menghapus data ini ?</p>
                                </div>
                                <div class="modal-footer">
                                    <form method="POST" action="{{ route('materi.destroy', $items->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>&nbsp;&nbsp;Hapus {{ $items->nama_materi }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </table>
            @endif
           </div>
           <div class="card-footer">
            <div class="float-right mt-3">
                {{ $materi->links() }}
            </div>
        </div>
        </div>
       </div>
    </div>
</div>
@endsection
{{-- @section('script')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection --}}
