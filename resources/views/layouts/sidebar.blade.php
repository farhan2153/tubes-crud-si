  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{ asset('AdminLTE-3.2.0') }}/dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      {{-- <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{ asset('AdminLTE-3.2.0') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="/dashboard" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Pengguna
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pegawai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengguna" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/kota" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Kota
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jadwal" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Jenis
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kereta" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kereta Api</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/maskapai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Maskapai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kapallaut" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kapal Laut</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Tiket
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/tiketkeretaapi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tiket Kereta Api</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tiketpesawat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tiket Pesawat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tiketkapal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tiket Kapal Laut</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pemesanan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pemesanankeretaapi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemesanan Tiket Kereta Api</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pemesananpesawat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemesanan Tiket Pesawat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pemesanankapallaut" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemesanan Tiket Kapal Laut</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="/jadwal" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kota" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Kota
              </p>
            </a>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                {{ Auth::user()->name }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" method="POST">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>{{ __('Logout') }}</p>
                </a>
              </li>
            </ul>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
