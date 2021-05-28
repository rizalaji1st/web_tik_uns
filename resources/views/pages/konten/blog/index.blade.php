@extends('layouts.konten')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        <ol>
            <li><a href="{{url('/blog')}}">Blog</a></li>
        </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog" >
        <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

            @foreach ($kontens as $konten)
            <article class="entry">

                <div class="entry-img">
                <img src="{{Storage::url($konten->path_gambar)}}" alt="" class="img-fluid" style="width: 100%">
                </div>

                <h2 class="entry-title">
                    <a href="{{url('/blog/detail/'.$konten->slug)}}">{{$konten->judul}}</a>
                </h2>

                <div class="entry-meta">
                <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{$konten->createdBy->name}}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#">{{$konten->created_at->format('d F Y')}}</a></li>
                </ul>
                </div>
                @php
                    $arrDeskripsi = explode('</p>',$konten->konten)
                @endphp
                <div class="entry-content">
                    @if (count(explode('</p>',$konten->konten)) > 1)
                        {!! $arrDeskripsi[0].'</p>' !!}
                    @else
                        {!! $konten->konten !!}
                    @endif
                    <div class="read-more">
                        <a href="{{url('/blog/detail/'.$konten->slug)}}">Read More</a>
                    </div>
                </div>

            </article>
            @endforeach

            
            </div><!-- End blog entries list -->

            <div class="col-lg-4">

            <div class="sidebar">

                <h3 class="sidebar-title">Categories</h3>
                <div class="sidebar-item categories">
                    <ul>
                        @foreach ($kategoris as $kategori)
                            <li><a href="{{url('/blog/'.$kategori->nama)}}"><i class="bi bi-tags"></i> {{$kategori->nama}}</a></li>
                        @endforeach
                    </ul>
                </div><!-- End sidebar categories-->

                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                @foreach ($latest_kontens as $konten)
                    <div class="post-item clearfix">
                        <img src="{{Storage::url($konten->path_gambar)}}" alt="">
                        <h4><a href="{{url('/blog/detail/'.$konten->slug)}}">{{$konten->judul}}</a></h4>
                        <time datetime="2020-01-01">{{$konten->created_at->format('d F y')}}</time>
                    </div>
                @endforeach

                </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

        </div>
    </section><!-- End Blog Single Section -->
@endsection