  <!-- Contact Area Start -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="section-title">
            <h2 class="title">Hubungi Kami</h2>
            <p>
              Jika terdpat kendala maupun ada hal yang ingin disampaikan Anda dapat menghubungi dengan kontak dibawah ini.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="info-box box1">
            <div class="left">
              <div class="icon">
                <i class="fas fa-phone"></i>
              </div>
            </div>
            <div class="right">
              <div class="content">
                <p>+62 856 2444 8878</p>
                <p>+62 896 2116 3045</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="info-box box2">
            <div class="left">
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
            </div>
            <div class="right">
              <div class="content">
                <p>amikbuminusantara@ac.id</p>
                <p>buminusantara@ac.id</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="info-box box3">
            <div class="left">
              <div class="icon">
                <i class="fas fa-map-marked-alt"></i>
              </div>
            </div>
            <div class="right">
              <div class="content">
                <p>Jl. Cideng Raya No.181, Kertawinangun, Kec. Kedawung, Kabupaten Cirebon</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="contact-form-wrapper">
            <form id="contact-form" method="POST" action="{{route('in')}}" encytype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <input type="text" class="input-field borderd" id="name" name="name" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-12">
                  <input type="email" class="input-field borderd" id="email" name="email" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="col-12">
                  <textarea class="input-field borderd textarea" rows="3" id="message" name="message"
                    placeholder="Ketik Pesan" required></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="mybtn1"> <span>Kirim Pesan</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="google_map_wrapper">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.433829885751!2d108.53210837424022!3d-6.716795365669657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee2100b2e6031%3A0xb003e6857b8efa97!2s(AMIK)%20Bumi%20Nusantara%20Cirebon!5e0!3m2!1sid!2sid!4v1667927292164!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Area End -->
