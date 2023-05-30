<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from geniusdevs.com/themeforest/prolab/probucket/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 17:17:20 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> E-AMIKBN </title>
  <!-- favicon -->
  <link rel="shortcut icon" href="{{asset('landing/assets/images/favicon.png')}}" type="image/x-icon">
  <!-- bootstrap -->
  <link rel="stylesheet" href="{{asset('landing/assets/css/bootstrap.min.css')}}">
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{asset('landing/assets/css/fontawesome.min.css')}}">
  <!-- Flat Icon -->
  <link rel="stylesheet" href="{{asset('landing/assets/css/flaticon.css')}}">
  <!-- animate -->
  <link rel="stylesheet" href="{{asset('landing/assets/css/animate.css')}}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{asset('landing/assets/css/owl.carousel.min.css')}}">
  <!-- magnific popup -->
  <link rel="stylesheet" href="{{asset('landing/assets/css/magnific-popup.css')}}">
  <!-- AOS css -->
  <link rel="stylesheet" href="{{asset('landing/assets/css/aos.css')}}">
  <!-- stylesheet -->
  <link rel="stylesheet" href="{{asset('landing/assets/css/style.css')}}">
  <!-- responsive -->
  <link rel="stylesheet" href="{{asset('landing/assets/css/responsive.css')}}">
</head>


<body>

  <!-- preloader area start -->
  {{-- <div class="preloader" id="preloader">
    <div class="preloader-inner">
      <div class="cube-wrapper">
        <div class="cube-folding">
          <span class="leaf1"></span>
          <span class="leaf2"></span>
          <span class="leaf3"></span>
          <span class="leaf4"></span>
        </div>
        <span class="loading" data-name="Loading">Loading</span>
      </div>
    </div>
  </div> --}}
  <!-- preloader area end -->

  <!-- Navebar Area start -->
  <header class="navigation">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          @include('layouts.landing.navbar')
        </div>
      </div>
    </div>
  </header>
  <!-- Navebar Area End -->

  @yield('content')

  <!-- Footer Section Start -->
  @include('layouts.landing.footer')
  <!-- Footer Section End -->

  <!-- Back to Top Start -->
  <div class="bottomtotop">
    <i class="fa fa-chevron-right"></i>
  </div>
  <!-- Back to Top End -->


  <!-- jquery -->
  <script src="{{asset('landing/assets/js/jquery.js')}}"></script>
  <!-- popper -->
  <script src="{{asset('landing/assets/js/popper.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('landing/assets/js/bootstrap.min.js')}}"></script>
  <!-- way poin js-->
  <script src="{{asset('landing/assets/js/waypoints.min.js')}}"></script>
  <!-- owl carousel -->
  <script src="{{asset('landing/assets/js/owl.carousel.min.js')}}"></script>
  <!-- magnific popup -->
  <script src="{{asset('landing/assets/js/jquery.magnific-popup.js')}}"></script>
  <!-- aos js-->
  <script src="{{asset('landing/assets/js/aos.js')}}"></script>
  <!-- counterup js-->
  <script src="{{asset('landing/assets/js/jquery.countdown.min.js')}}"></script>
  <!-- easing js-->
  <script src="{{asset('landing/assets/js/jquery.easing.1.3.js')}}"></script>
  <!-- Map js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&amp;sensor=false"></script>
	<script src="{{asset('landing/assets/js/gmap.js')}}"></script>
  <!-- main -->
  <script src="{{asset('landing/assets/js/contact.js')}}"></script>
  <!-- main -->
  <script src="{{asset('landing/assets/js/main.js')}}"></script>
  @include('sweetalert::alert')
</body>


<!-- Mirrored from geniusdevs.com/themeforest/prolab/probucket/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 17:17:20 GMT -->
</html>
