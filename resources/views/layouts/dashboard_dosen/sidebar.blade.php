<aside class="main-sidebar sidebar-dark-primary elevation-4 " style="background-color: blue">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('adminlte-3.1.0\dist\img\AMIK.png') }}" alt="Logo Ilham" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>E_AMIKBN</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/' . Auth::user()->avatar) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#about" class="d-block"><strong>{{ Auth::user()->name }}</strong></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item show">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pager"></i>
                        <p>
                            Landing Page
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/" class="nav-link ">
                                <i class="fas fa-home nav-icon"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav id="dasbor" class=" dasbor mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <h5 class="text-light">Dashboard</h5>
                <li class="nav-item {{ Route::is('dosen.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard')}}" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p class="text nav-text">
                        Dashboard
                      </p>
                    </a>
                </li>
                <li class="nav-item {{ Route::is('dosen.data-materi','materi.index','materi.create','materi.edit','materi.show','materi2.index','materi2.create','materi2.edit','materi2.show','materi3.index','materi3.create','materi3.edit','materi3.show') ? 'active' : '' }}">
                    <a href="{{ route('dosen.data-materi')}}" class="nav-link ">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Materi</p>
                    </a>
                </li>
                <li class="nav-item {{ Route::is('dosen.data-materi','materi.index','materi.create','materi.edit','materi.show','materi2.index','materi2.create','materi2.edit','materi2.show','materi3.index','materi3.create','materi3.edit','materi3.show') ? 'active' : '' }}">
                    <a href="{{ route('dosen.data-materi')}}" class="nav-link ">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Materi Umum</p>
                    </a>
                </li>

                <li class="nav-item {{ Route::is('dosen.data-tugas','tugas.index','tugas.create','tugas.edit','tugas.show','tugas2.index','tugas2.create','tugas2.edit','tugas2.show','tugas3.index','tugas3.create','tugas3.edit','tugas3.show') ? 'active' : '' }}">
                    <a href="{{ route('dosen.data-tugas')}}" class="nav-link ">
                        <i class="nav-icon fa fa-list" aria-hidden="true"></i>
                        <p>Tugas</p>
                    </a>
                </li>

                <li class="nav-item {{ Route::is('dosen.data-pengumpulan-tugas') ? 'active' : '' }}">
                    <a href="{{ route('dosen.data-pengumpulan-tugas')}}" class="nav-link ">
                        <i class="nav-icon fa fa-list" aria-hidden="true"></i>
                        <p>Pengumpulan Tugas</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
