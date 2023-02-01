<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('APP_NAME', 'My Dashboard') }}</title>
  <link rel="shortcut icon" href="{{ asset('img/favicon.jpg')}}" type="">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset ('adminlte-3.1.0/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte-3.1.0/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('adminlte-3.1.0/dist/css/adminlte.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('adminlte-3.1.0/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- summernote -->
 <link rel="stylesheet" href="{{ asset('adminlte-3.1.0/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head>
<body class="hold-transition sidebar-mini" onload="realtimeclock()">
<div class="wrapper">
    @auth
        @include('layouts.dashboard_dosen.sidebar')

        @include('layouts.dashboard_dosen.navbar')

    @endauth

    @yield('content')

    @auth
        @include('layouts.dashboard_dosen.footer')
    @endauth

</div>


<!-- jQuery -->
<script src="{{ asset ('adminlte-3.1.0/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('adminlte-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('adminlte-3.1.0/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('js/jam.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte-3.1.0/dist/js/demo.js')}}"></script>
<style>

</style>
<script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte-3.1.0/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- CodeMirror -->
<script src="{{ asset('adminlte-3.1.0/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{ asset('adminlte-3.1.0/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{ asset('adminlte-3.1.0/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{ asset('adminlte-3.1.0/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>

<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
{{-- <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script> --}}
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

@yield('script')

{{-- @include('sweetalert::alert') --}}

</body>
{{-- <script>
    $('.delete').click( function(){
        var sertifikatid =$(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        var link =$(this).attr('action')
        swal({
        title: "Yakin?",
        text: "Kamu akan menghapus data portfolio dengan nama " +sertifikatid+ " ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location="sertifikats.destroy/"+sertifikatid+""
            swal("Data berhasil di hapus", {
            icon: "success",
            });
        } else {
            swal("Data tidak jadi dihapus");
        }
        });
    });

</script> --}}
</html>
