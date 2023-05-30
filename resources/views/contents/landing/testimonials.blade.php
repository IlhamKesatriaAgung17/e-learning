  <!-- Testimonial Area Start -->
  <section class="testimonial-area" id="testimonial-area">
    <div class="curve curve-bottom"></div>
    <div class="curve curve-top"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="section-title extra">
            <h2 class="title">Apa kata mereka?</h2>
            <p>
              Berikut ini merupakan testimoni penggunaan sistem e-Amik.
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-7">
          <div class="testimonial-img">
            <img class="img1" src="landing/assets/images/testimonialimage/1.jpg" alt="">
            <img class="img2" src="landing/assets/images/testimonialimage/2.jpg" alt="">
            <img class="img3" src="landing/assets/images/testimonialimage/1.jpg" alt="">
            <img class="img4" src="landing/assets/images/testimonialimage/2.jpg" alt="">
            <img class="img5" src="landing/assets/images/testimonialimage/1.jpg" alt="">
            <img class="img6" src="landing/assets/images/testimonialimage/2.jpg" alt="">
          </div>
          <div class="testimonial-slider">
            @if ($testimoni->isEmpty())
            <div class="text-center my-2"><i>Data Kosong</i></div>
            <br>
            @else
            @foreach ($testimoni as $data)
            <div class="item">
                <div class="client">
                  <div class="client-image">
                    <img src="{{asset('landing/assets/images/testimonialimage/'.$data->foto)}}" class="img-fluid2" alt="">
                  </div>
                  <p class="client-say">
                    {{$data->pesan}}
                  </p>
                  <h4 class="client-name">
                    <a href="#">
                      {{$data->nama}}
                    </a>
                  </h4>
                  <h5 class="designation">{{$data->role}}</h5>
                </div>
              </div>
            @endforeach
            @endif
            {{-- <div class="item">
              <div class="client">
                <div class="client-image">
                  <img src="landing/assets/images/testimonialimage/Laki-Laki.jpg" class="img-fluid" alt="">
                </div>
                <p class="client-say">
                 Materi seblumnya dapat diakses kemabli sehingga kami dapat mengulang materi yang sudah dipelajari
                </p>
                <h4 class="client-name">
                  <a href="#">
                    Tiara Asa Nurani
                  </a>
                </h4>
                <h5 class="designation">Mahasiswa AMIk </h5>
              </div>
            </div> --}}
          </div>
          <br>
          <Center>
            <Button class="btn btn-sm btn-primary"><a href="{{route('testimoni-form.create')}}" class="text-white">Tambah Komentar</a> </Button>
          </Center>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Area End -->
