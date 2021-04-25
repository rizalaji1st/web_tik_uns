@include('includes.konten.header')

<body>

  @include('includes.konten.navbar')

    <main id="main">
        @yield('content')
    </main><!-- End #main -->

  @include('includes.konten.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.konten.script')

</body>

</html>