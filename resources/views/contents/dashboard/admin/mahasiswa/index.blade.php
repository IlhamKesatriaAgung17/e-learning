@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <!--Header & Breadcrumb content -->
    <div class="content-header text-dark">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA MAHASISWA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">Data Mahasiswa</li>
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
            <h3 class="card-title">MAHASISWA</h3>
            <a href="{{route('mahasiswa.create')}}" class="btn btn-success btn-sm float-right">Tambah Data <i class="fas fa-plus-square"></i></a>


            </div>
           <div class="card-body table-responsive p-0">
            @if ($dtmahasiswa->isEmpty())
                <div class="text-center my-2"><i>Data Kosong</i></div>
            @else
                <table class="table table-bordered">
                    <tr class="text-center bg-primary">
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Semester</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dtmahasiswa as $no => $item )
                    <tr class="bg-light">
                        <td>{{$dtmahasiswa->firstItem()+$no}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->nim}}</td>
                        <td>{{$item->email}}</td>
                        <td class="text-center">{{$item->semester}}</td>

                        <td class="text-center">
                            <div class="btn-group">
                            <a href="{{route('mahasiswa.show',['mahasiswa' => $item->id]) }}"><i class="fas fa-eye btn btn-primary btn-sm"></i></a>
                            &nbsp;
                            <a href="{{route('mahasiswa.edit',['mahasiswa' => $item->id]) }}"><i class="fas fa-edit btn btn-warning btn-sm"></i></a>
                            &nbsp;
                            <a href="#data{{ $item->id }}" data-toggle="modal"><i class="fas fa-trash-alt btn btn-danger btn-sm delete"></i></a>
                            </div>
                        </td>
                    </tr>

                    {{-- MODAL FOR DELETE ITEM --}}
                    <div class="modal fade" tabindex="-1" id="data{{ $item->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Hapus Data {{ $item->nama }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin akan menghapus data ini ?</p>
                                </div>
                                <div class="modal-footer">
                                    <form method="POST" action="{{ route('mahasiswa.destroy', $item->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>&nbsp;&nbsp;Hapus {{ $item->nama }}
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
                {{ $dtmahasiswa->links() }}
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
