@extends('user.master')
@push('css')
<link href="{{ url('assets/user/style.css') }}" rel="stylesheet">
<link href="{{ url('assets/user/css/responsive.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('assets/user/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ url('assets/user/css/font-icons.css') }}" />
<style>
    .img-coba{
            width:800px !important;
            height:400px;
        }
</style>

@endpush
@section('content')
<div class="page">
    <main id="main-splash" class="splash-slider main-page"
        style="height: auto !important; min-height: auto !important;">

        <!-- Swiper -->
        <div class="swiper-container" style="height: auto !important;">
            <div class="swiper-wrapper">

                <div class="swiper-slide height-half"
                    style="background-image: url({{ url('assets/user/uploads/contact-splash.jpg') }});">
                    <div class="overlayed text-white" style="width: 100%;">
                        <div class="featured-content-meta">
                            <ul class='post-meta'>
                                <li><span class='post-meta-key'>Globe:</span> <img class="img-fluid img-56-vw"
                                        src="{{ url('assets/user/uploads/armas-globe-white-big.svg') }}" /></li>
                            </ul>
                        </div>
                        <div class="featured-content-paragraph">
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <!-- Add Arrows -->
            <div class="swiper-button-next text-right" id="real-swp-next" style="opacity: 0"><i
                    class="fal fa-arrow-right text-white"></i></div>
            <div class="swiper-button-prev text-left" id="real-swp-prev" style="opacity: 0"><i
                    class="fal fa-arrow-left text-white"></i></div>
        </div>

    </main>

    <h1 class="text-white akzidenz-condensed-bold about-text-title revealOnScroll" data-animation="fadeInUp">BERITA
    </h1>
    <br>
    <section class="blog-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="olv-blog-posts">
                        <div class="row">
                            @foreach($data as $berita)
                            
                            <?php
                                date_default_timezone_set("Asia/Jakarta");
                                $desArr = explode(".", $berita->deskripsi);
                            ?>
                            <div class="col-12">
                                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb">
                                        <img class="img-coba"src="{{ url($berita->gambar) }}" alt="">
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <h6>By <a href="#">{{ $berita->nama }}, </a><a href="#">{{date('d F Y', strtotime($berita->created_at))}}</a></h6>
                                    </div>
                                    <?php $beritaLessArr = explode(' ', $berita->deskripsi);
                                    $beritaLess = "";
                                    if(count($beritaLessArr) < 20) {
                                        $beritaLess = $berita->deskripsi;
                                    } else {
                                        for ($i=0; $i < 21; $i++) { 
                                            $beritaLess .= $beritaLessArr[$i].' ';
                                        }
                                        $beritaLess .= ' ...';
                                    } ?>
                                    <!-- Post Title -->
                                    <h2>{{$berita->judul}}</h2>
                                    <!-- Post Excerpt -->
                                    <p>{!!$beritaLess!!}</p>
                                    <!-- Read More btn -->
                                    <a href="{{url('news')}}/{{$berita->id}}">Read More</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="olv-pagination-area">
                        <nav>
                            <ul class="pagination">
                            {{ $data->links() }}
                                <!---- <li class="page-item active"><a class="page-link" href="#">1.</a></li>
                                <li class="page-item"><a class="page-link" href="#">2.</a></li>
                                <li class="page-item"><a class="page-link" href="#">3.</a></li>
                                <li class="page-item"><a class="page-link" href="#">4.</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li> --->
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="olv-blog-sidebar">
                        <div class="latest-blog-posts mb-100">
                            <h5>Latest Posts</h5>
                            @foreach($latest as $terbaru)
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="{{ url('') }}/{{$terbaru->gambar}}" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <h6><a href="{{url('news')}}/{{$terbaru->id}}">{{ $terbaru->judul}}</a></h6>
                                    <div class="post-meta">
                                        <h6>By <a href="#">{{ $terbaru->nama }}, </a>/<a href="#"> {{ date('d F Y', strtotime($terbaru->created_at)) }}</a></h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .gmap_canvas {
            height: 50vh;
            width: 100%;
        }

    </style>
</div>
@endsection
