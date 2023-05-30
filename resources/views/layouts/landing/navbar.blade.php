<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
  <!-- Page Header Start-->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html">
      <img src="assets/images/logo-color.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu"
      aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainmenu">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('index')}}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#feature">Fitur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#panduan">Panduan</a>
        </li>
        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu">
            <a class="dropdown-item" href="blog-grid.html"><i class="fas fa-chevron-right"></i> Blog 3 Grid</a>
            <a class="dropdown-item" href="blog-sidebar.html"><i class="fas fa-chevron-right"></i>Blog With Sidebar</a>
            <a class="dropdown-item" href="blog-details-with-sidebar.html"><i class="fas fa-chevron-right"></i>Blog Details With Sidebar</a>
            <a class="dropdown-item" href="blog-details.html"><i class="fas fa-chevron-right"></i>Blog Details</a>
            <a class="dropdown-item" href="login.html"><i class="fas fa-chevron-right"></i>Login</a>
            <a class="dropdown-item" href="register.html"><i class="fas fa-chevron-right"></i>Register</a>
            <a class="dropdown-item" href="forgot-pass.html"><i class="fas fa-chevron-right"></i>Forgot Password</a>
            <a class="dropdown-item" href="404.html"><i class="fas fa-chevron-right"></i>404</a>
                            </div>
                        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="#testimonial-area">Testimoni</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#faq">Pertanyaan</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="#contact">Kontak</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
        </li> --}}
        @if (Route::has('login'))
        {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
            @auth
                @if ( auth()->user()->role == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }}</a>
                </li>
                {{-- <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                @elseif ( auth()->user()->role == 2)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mahasiswa.dashboard') }}">{{ Auth::user()->name }}</a>
                </li>
                @elseif ( auth()->user()->role == 3)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dosen.dashboard') }}">{{ Auth::user()->name }}</a>
                </li>
                {{-- <a href="{{ route('user.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}

                {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif --}}
            @endauth
        {{-- </div> --}}
       @endif
      </ul>
    </div>
  </nav>
