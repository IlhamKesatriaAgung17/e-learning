<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: blue">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white"></i></a>
      </li>
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search" style="color: white"></i>
        </a>
        <div class="navbar-search-block">
            <form class="form-inline">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times" ></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
       </li>
        <!-- menu fullscreen-->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt" style="color: white"></i>
            </a>
        </li>
    </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdownUserMenu" aria-haspopup="true" aria-expanded="false" style="color: white">
              {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownUserMenu">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}<span class="float-right"><i class="fas fa-sign-out-alt"></i></span>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST"style="display: none;">
                @csrf
              </form
            </div>
        </li>
    </ul>
</nav>


