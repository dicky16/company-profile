@extends('user.master')
@push('css')
<link href="{{ url('assets/user/assets/css/card.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="page">
        <main id="main-splash" class="splash-slider main-page"
            style="height: auto !important; min-height: auto !important;">

            <!-- Swiper -->
            <div class="swiper-container" style="height: auto !important;">
                <div class="swiper-wrapper">

                    <div class="swiper-slide height-half" style="background-image: url({{ url('assets/user/uploads/contact-splash.jpg') }});">
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

        <h1 class="text-white akzidenz-condensed-bold about-text-title revealOnScroll" data-animation="fadeInUp">
            Dokumentasi
        </h1>


        
        <br>
        <br>
        <center>
            <h1 style="color:#fff">Pertanyaan 1</h1>
            <h3 style="color: #fff;">Mana yang paling berbeda dari pilihan dibawah ini?</h3>
        </center>
        <center>
            <h3 style="color: #fff;">A.Australia</h3>
            <h3 style="color: #fff;">B.Indonesia</h3>
            <h3 style="color: #fff;">C.Myanmar </h3>
            <h3 style="color: #fff;">D.Singapore </h3>
        </center>
        <center>
            <h5 style="color: #fff;">Pililah jawaban dibawah ini!!!</h2>
        </center>
        <center><button class="button">A</button> <button class="button">B</button>
            <button class="button">C</button>
            <button class="button">D</button>
        </center><br>
        <center><a href="#" class="btn btn-default">Pref</a>
            <a href="#" class="btn btn-default">Next</a>
            </p>
        </center>
        
        
       
        
        
    </div>
@endsection