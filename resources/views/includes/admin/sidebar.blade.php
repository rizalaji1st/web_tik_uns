<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('assets/AdminLTE/index3.html')}}" class="brand-link">
      <img src="{{asset('assets/FilePuskom/cropped-icon-uns.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TIK UNS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @can('are-admin')
            <li class="nav-header">Menu Khusus Admin</li>
            <li class="nav-item @yield('manajemenAkunActive')">
              <a href="{{url('/admin/manajemen-akun')}}" class="nav-link">
                <i class="fas fa-user-cog nav-icon"></i>
                <p>
                  Manajemen Akun
                </p>
              </a>
            </li>
            <li class="nav-item @yield('manajemenKategoriActive')">
              <a href="{{url('/admin/manajemen-kategori')}}" class="nav-link">
                <i class="fas fa-sliders-h nav-icon"></i>
                <p>
                  Manajemen Kategori
                </p>
              </a>
            </li>
            <li class="nav-item @yield('manajemenKontenActive')">
              <a href="{{url('/admin/manajemen-konten')}}" class="nav-link">
                <i class="fas fa-file-alt nav-icon"></i>
                <p>
                  Manajemen Konten
                </p>
              </a>
            </li>
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>