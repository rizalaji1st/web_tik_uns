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

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Lokasi Kami</h2>
        <p>UPT. Teknologi Informasi dan Komunikasi (TIK)</p>
      </header>

      <div class="row">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15820.608362272269!2d110.8571832!3d-7.5583906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf243eb2b3adb9441!2sUPT.%20Teknologi%20Informasi%20dan%20Komunikasi%20(TIK)%20UNS!5e0!3m2!1sen!2sid!4v1619932337071!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </div>

    </div>

  </section><!-- End Values Section -->

@endsection
