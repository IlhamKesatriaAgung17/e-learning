@extends('layouts.landing.nav_testimoni')
@section('content')
<!-- Hero Area Start -->
<div class="hero-areas">
    <center>
        {{-- <img class="img-fluid" src="{{asset('landing/assets/images/logo.png')}}" alt="" width="300px" height="80px"> --}}
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_BdVuMPcttO.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
        {{-- <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_ryphgzdj.json"  background="transparent"  speed="1"  style="width: 310px; height: 310px;"  loop  autoplay></lottie-player> --}}
    </center>
      <!-- Contact Area Start -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="section-title text-white">
            <h2 class="text-white">Tambah Komentar</h2>
            <p class="text-white">
              Yukk berikan pendapatmu tentang penggunaan sistem ini.
            </p>
            <br>
            <button class="btn-warning"><a href="{{route('index')}}">Kembali</a></button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-form-wrapper">
            <form method="POST" action="{{route('testimoni-form.store')}}"  enctype="multipart/form-data">
                @method('post')
                @csrf
              <div class="row">
                <div class="col-md-12">
                  <input type="text" class="input-field borderd" id="nama" name="nama" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-12">
                    <select id="role" name="role" class="form-control">
                        <option value="pilih">Pilih Role</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Dosen">Dosen</option>
                    </select>
                    <br>
                </div>
                <div class="col-md-12">
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                        <option value="pilih">Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <br>
                </div>
                <div class="col-md-12">
                    <input style="background-color: white" type="file" class="input-field borderd" id="foto" name="foto" placeholder="Masukan foto" required>
                </div>
                <div class="col-12">
                  <textarea class="input-field borderd textarea" rows="3" id="pesan" name="pesan" placeholder="Ketik Pesan" required></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn-sm btn-success">Kirim Komentar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  <!-- Contact Area End -->
</div>
<!-- Hero Area End -->


@endsection
