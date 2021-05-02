@section('tentangActive','active')
@section('title','Tentang')
@extends('layouts.konten')
@section('content')
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        Unit Pelaksana Teknis Teknologi Informasi dan Komunikasi (UPT TIK) <br>
        Universitas Sebelas Maret (UNS) <br>
        <br>
        UPT TIK merupakan salah satu unit pelaksana teknis di Universitas Sebelas Maret. UPT TIK memiliki tugas pokok menyelenggarakan mata kuliah lab komputer, training dan technical support. UPT TIK terus mengantisipasi tuntutan kemajuan teknologi informasi dengan mengembangkan jaringan internet dan intranet yang telah terhubung ke seluruh unit serta terus mengembangkan sistem informasi administrasi baik di bidang akademik, keuangan, sarana-prasarana maupun kepegawaian. <br>
        <br>
        Jl. Insinyur Sutami, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126 <br>
        <br>
        Telp : 0858 9000 1103 <br>
        <br>
        Wa : 0858 9000 1103 <br>
    </div>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
      async
    ></script>

  </section><!-- End Hero -->
@endsection
