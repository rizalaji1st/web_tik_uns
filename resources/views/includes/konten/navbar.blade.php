<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/FilePuskom/logo_dark.png')}}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto @yield('berandaActive') " href="{{url('/')}}">Beranda</a></li>
          <li class="dropdown"><a class="@yield('profilActive')" href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/upt-tik-uns')}}">UPT Tekonologi, Informasi, dan Komunikasi</a></li>
              <li><a href="{{url('/visi-misi-dan-tujuan')}}">Visi, Misi, dan Tujuan</a></li>
              <li><a href="{{url('/struktur-organisasi')}}">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto @yield('beritaActive')" href="{{url('/blog/berita')}}">Berita</a></li>
          <li><a class="nav-link scrollto @yield('layananActive')" href="{{url('/blog/layanan')}}">Layanan</a></li>
          <li><a class="nav-link scrollto @yield('tentangActive')" href="{{url('/tentang')}}">Tentang</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
