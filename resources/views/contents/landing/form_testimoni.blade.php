@extends('layouts.landing')
@section('content')
  <!-- Contact Area Start -->
  <section class="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="section-title">
            <h2 class="title">Tambah Testimoni</h2>
            <p>
              Yukk berikan pendapatmu tentang penggunaan sistem ini.
            </p>
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
                        <option value="1.jpg">Laki-Laki</option>
                        <option value="2.jpg">Perempuan</option>
                    </select>
                    <br>
                </div>
                <div class="col-12">
                  <textarea class="input-field borderd textarea" rows="3" id="pesan" name="pesan" placeholder="Ketik Pesan" required></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-sm btn-primary btn-block">Kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Area End -->

@endsection
