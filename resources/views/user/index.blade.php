@extends('user.master')
@section('content')
<div class="page">
    <main id="main-splash" class="splash-slider main-page">

        <!-- Swiper -->
        <div class="swiper-container s1">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                <div class="swiper-slide full" data-swiper-autoplay="8000"
                    style="background-image: url({{ url($slider->gambar) }});">
                    <div class="overlayed text-white" style="width: 100%;">
                        <!-- <div class="featured-content-meta revealOnScroll slow" data-animation="fadeInRight">
                            <ul class='post-meta'>
                                <li><span class='post-meta-key'>Truck:</span> <img class="img-fluid img-56-vw"
                                        src="{{ url('assets/user/uploads/armas-truck-splash.svg') }}" /></li>
                            </ul>
                        </div> -->
                        <div class="featured-content-paragraph revealOnScroll slow" data-animation="fadeInUp">
                            <div class="row justify-content-center" style="width: 100%;">
                                <div class="col-lg-5 abel-regular py-3 px-0 text-right-to-center">{!! $slider->deskripsi !!}</div>
                                <!-- <div class="col-lg akzidenz-bold-italic fs-5-rem-mobile py-3 px-2"> ARMAS </div>
                                <div class="col-lg-5 abel-regular py-3 px-0 text-left-to-center">Goes Forward</div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="swiper-slide full" data-swiper-autoplay="8000"
                    style="background-image: url({{ url('assets/user/uploads/armas_splash_2.png') }});">
                    <div class="overlayed text-white" style="width: 100%;">
                        <div class="featured-content-meta revealOnScroll slow" data-animation="fadeInRight">
                            <ul class='post-meta'>
                            </ul>
                        </div>
                        <div class="featured-content-paragraph revealOnScroll slow" data-animation="fadeInUp">
                            <div class="container d-flex justify-content-center"
                                style="font-size: calc(1.3vw + 1.3vh + .7vmin);">
                                <div class="row">
                                    <div class="abel-regular p-2 mobile-w-100">Semangat Harus Bisa, </div>
                                    <div class="abel-regular p-2 mobile-w-100">Kerja Keras, </div>
                                    <div class="abel-regular p-2 mobile-w-100">Kerja Sama, </div>
                                    <div class="abel-regular p-2 mobile-w-100">Dislipin</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Add Pagination -->
            <!-- Add Arrows -->
            <div class="swiper-button-next text-right" id="real-swp-next" style="opacity: 0"><i
                    class="fal fa-arrow-right text-white"></i></div>
            <div class="swiper-button-prev text-left" id="real-swp-prev" style="opacity: 0"><i
                    class="fal fa-arrow-left text-white"></i></div>
        </div>

    </main>

    <a class="scroll-to-button akzidenz-condensed-regular easing animate bounce" style="font-size: 1.25rem;"
        id="next-button" href="#tentang-kami"><i class="fal fa-arrow-down"></i> Scroll to Discover</a>
    <div class="swiper-pagination"></div>

    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: transparent;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-pagination-fraction,
        .swiper-pagination-custom,
        .swiper-container-horizontal>.swiper-pagination-bullets {
            left: 0;
            right: 0;
            width: auto !important;
            bottom: 1rem !important;
            padding: .25rem;
            position: absolute !important;
            color: white !important;
            text-align: center;
            z-index: 1 !important;
        }

        @media (max-width: 992px) {

            .swiper-pagination-fraction,
            .swiper-pagination-custom,
            .swiper-container-horizontal>.swiper-pagination-bullets {
                left: 1rem !important;
                right: auto !important;
                text-align: left !important;
            }
        }

    </style>
    <section id="tentang-kami">
        <div class="container-fluid section-content background-fixed-parallax"
            style="background-image: url({{ url('assets/user/assets/images/bg_home_1.jpg') }});">
            <div class="inner-padding">
                <div class="row">

                    <div class="col-xl-5 col-lg-6 col-md-7 justify-content-flex-center revealOnScroll slow delay-02s"
                        data-animation="fadeIn">
                        <div class="row">
                            <div class="col-12 px-0 py-4">
                                <h3
                                    class="text-left text-white tentang-kami-armas-red-gradient-title akzidenz-condensed-bold pt-3 mt-3 pb-0 mb-0">
                                    TENTANG KAMI</h3>
                            </div>
                            <div class="col-12 px-4 tentang-kami-content">
                                <p>Terbentuk pada tahun 2004, Armas bergerak dalam jasa kurir dan pengiriman dari
                                    pabrik perusahaan kepada para dealer tertentu, dan telah menjadi pilihan yang
                                    tepat dan terpercaya bagi perusahaan otomotif seluruh Indonesia. Armas merupakan
                                    bagian dari jembatan solusi perusahaan manufaktur otomotif agar kinerja
                                    perusahaan tersebut menjadi lebih berdaya guna.</p>
                            </div>
                            <div class="col-12 px-4">
                                <div class="lanjutan-area">
                                    <button
                                        class="btn btn-danger lanjutan-text lanjutan-button akzidenz-condensed-regular"><a
                                            class="read-more" href="{{url('about')}}">LANJUTAN</a></button>
                                    <hr class="lanjutan-line"><i class="fas fa-arrow-right lanjutan-arrow"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-6 col-md-5">
                    </div>

                </div> <!-- row end -->
            </div>
        </div> <!-- container-fluid end -->
    </section>
    <section id="home-our-service" class="revealOnScroll slower" data-animation="fadeIn">
        <div class="bg-black">
            <div class="container-fluid p-0">

                <div class="row">

                    <div class="col-md-4 p-0">
                        <figure class="zoom-effect-lighten">
                            <img width="1200" height="833" src="{{ url('assets/user/uploads/jenis-sistem-pengiriman.png') }}"
                                class="img-fluid wp-post-image" alt=""
                                srcset="{{ url('assets/user/uploads/jenis-sistem-pengiriman.png 1200w') }}, {{ url('assets/user/uploads/jenis-sistem-pengiriman-300x208.png 300w') }}, {{ url('assets/user/uploads/jenis-sistem-pengiriman-768x533.png 768') }}w, {{ url('assets/user/uploads/jenis-sistem-pengiriman-1024x711.png 1024w') }}"
                                sizes="(max-width: 1200px) 100vw, 1200px">
                            <figcaption class="fade-to-back">
                                <h1 class="content-centered heading-title m-auto text-center text-white akzidenz-condensed-bold"
                                    style="letter-spacing: .15rem;">
                                    JENIS SISTEM PENGIRIMAN</h1>
                                <div class="selengkapnya-button flex-center">
                                    <button class="btn btn-danger lanjutan-text akzidenz-condensed-regular"><a
                                            class="read-more" href="{{url('service')}}">SELENGKAPNYA</a></button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-4 p-0">
                        <figure class="zoom-effect-lighten">
                            <img width="1200" height="833" src="{{ url('assets/user/uploads/visi-misi.png') }}"
                                class="img-fluid wp-post-image" alt=""
                                srcset="{{ url('assets/user/uploads/visi-misi.png 1200w') }}, {{ url('assets/user/uploads/visi-misi-300x208.png 300w') }}, {{ url('assets/user/uploads/visi-misi-768x533.png 768w') }}, {{ url('assets/user/uploads/visi-misi-1024x711.png 1024w') }}"
                                sizes="(max-width: 1200px) 100vw, 1200px">
                            <figcaption class="fade-to-back">
                                <h1 class="content-centered heading-title m-auto text-center text-white akzidenz-condensed-bold"
                                    style="letter-spacing: .15rem;">
                                    VISI MISI</h1>
                                <div class="selengkapnya-button flex-center">
                                    <button class="btn btn-danger lanjutan-text akzidenz-condensed-regular"><a
                                            class="read-more" href="{{url('about')}}">SELENGKAPNYA</a></button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-4 p-0">
                        <figure class="zoom-effect-lighten">
                            <img width="1200" height="833" src="{{ url('assets/user/uploads/sumber-daya-manusia.png') }}"
                                class="img-fluid wp-post-image" alt=""
                                srcset="{{ url('assets/user/uploads/sumber-daya-manusia.png 1200w') }}, {{ url('assets/user/uploads/sumber-daya-manusia-300x208.png 300w') }}, {{ url('assets/user/uploads/sumber-daya-manusia-768x533.png 768w') }}, {{ url('assets/user/uploads/sumber-daya-manusia-1024x711.png 1024w') }}"
                                sizes="(max-width: 1200px) 100vw, 1200px">
                            <figcaption class="fade-to-back">
                                <h1 class="content-centered heading-title m-auto text-center text-white akzidenz-condensed-bold"
                                    style="letter-spacing: .15rem;">
                                    SUMBER DAYA MANUSIA</h1>
                                <div class="selengkapnya-button flex-center">
                                    <button class="btn btn-danger lanjutan-text akzidenz-condensed-regular"><a
                                            class="read-more" href="{{url('service')}}">SELENGKAPNYA</a></button>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section id="pelanggan-kami">
       
         <div class="container-fluid px-0 pb-3 pt-4">
            <div class="col-12 pb-5">
                <h3 class="text-center text-armas-red akzidenz-condensed-bold pt-3 mt-3 pb-0 mb-0">PELANGGAN KAMI
                </h3>
            </div>
            <div class="px-5 py-0">
                <div class="row revealOnScroll" data-animation="fadeIn">
                    @foreach($pelanggans as $pelanggan)
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 text-center">
                        <div class="px-2">
                            <img class="img-fluid" src="{{url($pelanggan->gambar)}}" width="100" height="100" />
                        </div>
                    </div>
                    @endforeach
                </div> <!-- row end -->
            </div>
        </div> <!-- container-fluid end -->
    
    </section>
    <section id="kontrol-sistem" class="bg-white">
        <div class="container-fluid py-4">
            <div class="row">

                <div class="col-xl-6 inner-padding justify-content-flex-center">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="text-left-to-center text-armas-red akzidenz-condensed-bold pt-3 mt-3 pb-0 mb-0">
                                KONTROL SISTEM</h2>
                        </div>
                        <div class="col-12 py-4 tentang-kami-content">
                            <p>Armas memiliki sistem monitoring perjalanan yang melibatkan teknologi GPS di dalam
                                semua truk di armada kami, serta menjalankan sistem penjadwalan yang sangat ketat.
                                Kami sikeras memonitor semua truk yang sedang mengantar sampai mereka sampai ke
                                tujuan mereka.
                            </p>
                        </div>
                        <div class="col-12 revealOnScroll" data-animation="fadeInUp">
                            <img class="img-fluid img-100" src="{{ url('assets/user/uploads/gif2.gif') }}" />
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 pt-5 pb-0 pr-0">

                    <div class="left-inner-padding-mobile">

                        <div class="row">


                            <div class="col-12 pl-3 pr-0 py-2 revealOnScroll delay-01s" data-animation="fadeInRight">
                                <div class="text-white p-2"
                                    style="background-image: linear-gradient(to right, #810303, #b51920);">
                                    <div class="row">
                                        <div class="col-2 pl-2 justify-content-flex-start">
                                            <h1 class="akzidenz-condensed-medium m-0" style="font-size: 4.5rem;">1
                                            </h1>
                                        </div>
                                        <div class="col-2 p-0 flex-center">
                                            <img src="{{ url('assets/user/uploads/1-penjadualan-pemberangkatan.svg') }}"
                                                class="img-fluid img-60 wp-post-image" alt=""> </div>
                                        <div class="col-8 justify-content-flex-start">
                                            <h3 class="akzidenz-condensed-regular kontrol-sistem-desc m-0">
                                                <p>PENJADUALAN<br>PEMBERANGKATAN</p>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 pl-3 pr-0 py-2 revealOnScroll delay-03s" data-animation="fadeInRight">
                                <div class="text-white p-2"
                                    style="background-image: linear-gradient(to right, #810303, #b51920);">
                                    <div class="row">
                                        <div class="col-2 pl-2 justify-content-flex-start">
                                            <h1 class="akzidenz-condensed-medium m-0" style="font-size: 4.5rem;">2
                                            </h1>
                                        </div>
                                        <div class="col-2 p-0 flex-center">
                                            <img src="{{ url('assets/user/uploads/2-pemberangkatan-pengiriman.svg') }}"
                                                class="img-fluid img-60 wp-post-image" alt=""> </div>
                                        <div class="col-8 justify-content-flex-start">
                                            <h3 class="akzidenz-condensed-regular kontrol-sistem-desc m-0">
                                                <p>PEMBERANGKATAN<br>PENGIRIMAN</p>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 pl-3 pr-0 py-2 revealOnScroll delay-05s" data-animation="fadeInRight">
                                <div class="text-white p-2"
                                    style="background-image: linear-gradient(to right, #810303, #b51920);">
                                    <div class="row">
                                        <div class="col-2 pl-2 justify-content-flex-start">
                                            <h1 class="akzidenz-condensed-medium m-0" style="font-size: 4.5rem;">3
                                            </h1>
                                        </div>
                                        <div class="col-2 p-0 flex-center">
                                            <img src="{{ url('assets/user/uploads/3-monitoring-perjalanan-sampai-tujuan.svg') }}"
                                                class="img-fluid img-60 wp-post-image" alt=""> </div>
                                        <div class="col-8 justify-content-flex-start">
                                            <h3 class="akzidenz-condensed-regular kontrol-sistem-desc m-0">
                                                <p>MONITORING PERJALANAN<br>SAMPAI TUJUAN</p>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 pl-3 pr-0 py-2 revealOnScroll delay-07s" data-animation="fadeInRight">
                                <div class="text-white p-2"
                                    style="background-image: linear-gradient(to right, #810303, #b51920);">
                                    <div class="row">
                                        <div class="col-2 pl-2 justify-content-flex-start">
                                            <h1 class="akzidenz-condensed-medium m-0" style="font-size: 4.5rem;">4
                                            </h1>
                                        </div>
                                        <div class="col-2 p-0 flex-center">
                                            <img src="{{ url('assets/user/uploads/4-penanganan-masalah.svg') }}"
                                                class="img-fluid img-60 wp-post-image" alt=""> </div>
                                        <div class="col-8 justify-content-flex-start">
                                            <h3 class="akzidenz-condensed-regular kontrol-sistem-desc m-0">
                                                <p>PENANGANAN MASALAH </p>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 py-2"></div>

                            <div class="col-12 pr-5">
                                <div class="lanjutan-area">
                                    <button
                                        class="btn btn-danger lanjutan-text lanjutan-button akzidenz-condensed-regular"><a
                                            class="read-more" href="service">LANJUTAN</a></button>
                                    <hr class="lanjutan-line"><i style="top: .8rem;"
                                        class="fas fa-arrow-right lanjutan-arrow"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div> <!-- row end -->
        </div> <!-- container-fluid end -->
    </section>
    <section id="jenis-truk">
        <div class="container-fluid pt-5 pb-0">
            <div class="white-to-grey-bg">

                <div class="inner-padding">
                    <h3 class="text-left-to-center text-armas-red akzidenz-condensed-bold px-5 pt-3 mt-3 pb-0 mb-0">
                        JENIS TRUK</h3>
                </div>

                <div class="row">


                    <div class="col-xl-4 px-0 bg-fixed-centered"
                        style="background-image: url({{ url('assets/user/uploads/armas-truck-small-bg.svg') }});">
                        <div class="row">

                            <div class="col-12 p-55 flex-center revealOnScroll" data-animation="fadeInRight">
                                <ul class='post-meta'>
                                    <li><span class='post-meta-key'>Truck:</span> <img class="img-fluid img-100"
                                            src="{{ url('assets/user/uploads/armas-truck-small.svg') }}" /></li>
                                </ul>
                            </div>

                            <div class="col-12 py-1 bg-armas">
                                <div class="row">
                                    <div class="col-3 p-0">
                                        <h4 class="text-right text-white akzidenz-condensed-bold truck-size p-0 m-0">
                                            SMALL</h4>
                                    </div>
                                    <div class="col-9 p-0">
                                        <h4
                                            class="text-center text-white akzidenz-condensed-regular truck-dimension p-0 m-0">
                                            <p>(4.2 X 2.3 X 2.3)</p>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-xl-4 px-0 bg-fixed-centered"
                        style="background-image: url({{ url('assets/user/uploads/armas-truck-medium-bg.svg') }});">
                        <div class="row">

                            <div class="col-12 p-55 flex-center revealOnScroll" data-animation="fadeInRight">
                                <ul class='post-meta'>
                                    <li><span class='post-meta-key'>Truck:</span> <img class="img-fluid img-100"
                                            src="{{ url('assets/user/uploads/armas-truck-medium.svg') }}"></li>
                                </ul>
                            </div>

                            <div class="col-12 py-1 bg-armas">
                                <div class="row">
                                    <div class="col-3 p-0">
                                        <h4 class="text-right text-white akzidenz-condensed-bold truck-size p-0 m-0">
                                            MEDIUM</h4>
                                    </div>
                                    <div class="col-9 p-0">
                                        <h4
                                            class="text-center text-white akzidenz-condensed-regular truck-dimension p-0 m-0">
                                            <p>(6.5 X 2.4 X 2.4)</p>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-xl-4 px-0 bg-fixed-centered"
                        style="background-image: url({{ url('assets/user/uploads/armas-truck-large-bg.svg') }});">
                        <div class="row">

                            <div class="col-12 p-55 flex-center revealOnScroll" data-animation="fadeInRight">
                                <ul class='post-meta'>
                                    <li><span class='post-meta-key'>Truck:</span> <img class="img-fluid img-100"
                                            src="{{ url('assets/user/uploads/armas-truck-large.svg') }}"></li>
                                </ul>
                            </div>

                            <div class="col-12 py-1 bg-armas">
                                <div class="row">
                                    <div class="col-3 p-0">
                                        <h4 class="text-right text-white akzidenz-condensed-bold truck-size p-0 m-0">
                                            LARGE</h4>
                                    </div>
                                    <div class="col-9 p-0">
                                        <h4
                                            class="text-center text-white akzidenz-condensed-regular truck-dimension p-0 m-0">
                                            <p>(7.5 X 2.4 X 2.4)</p>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div> <!-- row end -->

            </div> <!-- white-to-grey-bg -->

            <div class="revealOnScroll slower delay-05s" data-animation="fadeIn">
                <img class="img-fluid img-100" src="{{ url('assets/user/uploads/trucks-splash.png') }}" />
            </div>

        </div> <!-- container-fluid end -->
    </section>
   
</div>
@endsection
