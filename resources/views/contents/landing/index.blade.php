@extends('layouts.landing')
@section('content')
<!-- Hero Area Start -->
<div id="home" class="hero-area">
    <div class="curve curve-bottom"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex align-self-center">
          <div class="left-content">
            <div class="content">
              <h1 class="title">
                E-LEARNING AMIK BUMI NUSANTARA CIREBON
              </h1>

              <p class="subtitle">
                Belajar online lebih mudah dan terstruktur bersama
                E-AMIKBN
              </p>
              <div class="links">
                <a href="/login" class="mybtn1"><span>Login</span> </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-first order-lg-last">
          <div class="right-img">
            <div class="discount-circle">
              <div class="discount-circle-inner">
                <div class="price">
                  100%
                  <span>Easy</span>
                </div>
              </div>
            </div>
            <img class="img-fluid img" src="landing/assets/images/logo.png" alt="">
          </div>
        </div>
      </div>
    </div>
</div>
<!-- Hero Area End -->

@include('contents.landing.about')

@include('contents.landing.features')

@include('contents.landing.tutorials')

@include('contents.landing.testimonials')

@include('contents.landing.faq')

@include('contents.landing.contact')
@endsection
