@extends('user.master')
@section('content')
<div class="page">
    <main id="main-splash" class="splash-slider main-page"
        style="height: auto !important; min-height: auto !important;">

        <!-- Swiper -->
        <div class="swiper-container" style="height: auto !important;">
            <div class="swiper-wrapper">

                <div class="swiper-slide height-half"
                    style="background-image: url({{ url('assets/user/uploads/about-featured.jpg') }});">
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

    <h1 class="text-white akzidenz-condensed-bold about-text-title revealOnScroll" data-animation="fadeInUp">TENTANG ARMAS LOGISTIC SERVICE </h1>


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

        .img-coba {
            width: 400px !important;
            height: 200px;
        }
    </style>
    <style>
        /*

CC 2.0 License Iatek LLC 2018
Attribution required

*/

        @media (min-width: 768px) {

            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active+.carousel-item,
            .carousel-inner .active+.carousel-item+.carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
                transition: none;
                margin-right: initial;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .active.carousel-item-left+.carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }

        }
    </style>
    <section id="latar-belakang" class="bg-white pb-5">
        <div class="container px-0">
            <div class="inner-padding">
                <div class="row">

                    <div class="col-12 justify-content-flex-center revealOnScroll slow delay-02s"
                        data-animation="fadeIn">
                        <div class="row">
                            <div class="col-12 px-0 py-4">
                                <h3 class="text-center text-armas-red akzidenz-condensed-bold pt-3 mt-3 pb-0 mb-0">
                                  LATAR BELAKANG NYA</h3>
                            </div>
                            <div class="col-12 px-3 text-center latar-belakang-content abel-regular">
                                <p>
                                    Proses distribusi suku cadang dari penyuplai ke manufaktur otomotif membutuhkan
                                    sistem manajemen logistik yang mumpuni.
                                    <br><br>
                                    Kini, perusahaan manufaktur suku cadang lebih memilih untuk memperbanyak
                                    pengiriman agar tidak perlu menyimpan suku cadang terlalu lama yang cenderung
                                    bisa mengambil banyak tempat di gudang mereka. Para manufaktur memerlukan jasa
                                    logistik truk yang mempunyai kemampuan sesuai dengan yang diharapkan.
                                    <br><br>
                                    Sebagai salah satu solusi untuk keperluan ini, PT Armas Logistic Service sudah
                                    lebih dari satu dekade membuktikan bahwa kami mampu menghadirkan solusi
                                    pengiriman yang praktis, aman, dan tepat waktu yang berperan untuk meringankan
                                    beban para perusahaan tersebut.
                                </p>
                            </div>
                        </div>
                    </div>

                </div> <!-- row end -->
            </div>
        </div> <!-- container-fluid end -->
    </section>
    <section id="visi-misi">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 p-0">
                    <div class="row">
                        <div class="col-lg-6 flex-center order-last-lg p-5-to-p-4-to-p-3 bg-lightgrey">
                            <div class="p-5-to-p-4-to-p-3">
                                <h3 class="text-left-to-center text-armas-red akzidenz-condensed-bold">VISI</h3>
                                <p class="akzidenz-regular visi-misi-content">
                                    Menjadi pilihan pelanggan dalam pelayanan penyimpangan dan pengangkutan barang
                                    yang humbug dan berkembang bersama pelanggan, terpecaya dalam pelayanan.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 order-first-lg p-0">
                            <img class="img-fluid" src="{{ url('assets/user/uploads/visi.jpg') }}" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 p-0">
                    <div class="row">
                        <div class="col-lg-6 flex-center p-5-to-p-4-to-p-3 bg-lightgrey">
                            <div class="p-5-to-p-4-to-p-3">
                                <h3 class="text-left-to-center text-armas-red akzidenz-condensed-bold">MISI</h3>
                                <div class="akzidenz-regular visi-misi-content">
                                    <ul class="list-style-disc">
                                        <li>Memberikan pelayanan penyimpanan barang dengan aman.</li>
                                        <li>Memberikan pelayanan pengangkutan terbaik sesuai persyaratan pelanggan.
                                        </li>
                                        <li>Menjadi armada yang pantun dan pauta terhadap rambu-rambu lalu lintas,
                                            mematuhi ketentuan kesehatan dan keselamatan kerja.</li>
                                        <li>Memberikan kecepatan, akurasi dan penyampaian informasi sebagai bentuk
                                            pelayanan informasi dan komunikasi.</li>
                                        <li>Menjunjung tinggi Etika kerja dan kepercayaan yang telah diberikan.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <img class="img-fluid" src="{{ url('assets/user/uploads/misi.jpg') }}" />
                        </div>
                    </div>
                </div>

            </div> <!-- row end -->
        </div> <!-- container-fluid end -->
    </section>
   
     

   <br>
    <main id="stats-odometer" class="splash-slider main-page">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide full stats-overlay"
                    style="background-image: url({{ url('assets/user/uploads/stats-bg.jpg') }}); align-items: flex-start;">
                    <div class="container section-content">
                        <div class="row">
                            <div class="col-xl-3 col-6 p-3">
                                <img class="img-fluid" src="{{ url('assets/user/uploads/building-icon.svg') }}" />
                                <h5 class="akzidenz-regular text-white py-2" style="letter-spacing: .01rem;">Tahun
                                    Didirikan</h5>
                                <span class="odometer abel-regular text-white tahun-didirikan">8888</span><span
                                    class="abel-regular text-span text-white"></span>
                            </div>
                            <div class="col-xl-3 col-6 p-3">
                                <img class="img-fluid" src="{{ url('assets/user/uploads/ribbon-icon.svg') }}" />
                                <h5 class="akzidenz-regular text-white py-2" style="letter-spacing: .01rem;">Status
                                    Usaha</h5>
                                <span id="roller" class="abel-regular text-white status-usaha"></span><span
                                    class="abel-regular text-span text-white"></span>
                            </div>
                            <div class="col-xl-3 col-6 p-3">
                                <img class="img-fluid" src="{{ url('assets/user/uploads/location-icon.svg') }}" />
                                <h5 class="akzidenz-regular text-white py-2" style="letter-spacing: .01rem;">Luas
                                    Area</h5>
                                <span class="odometer abel-regular text-white luas-area">00000</span><span
                                    class="abel-regular text-span text-white"> m<sup>2</sup></span>
                            </div>
                            <div class="col-xl-3 col-6 p-3">
                                <img class="img-fluid" src="{{ url('assets/user/uploads/people-icon.svg') }}" />
                                <h5 class="akzidenz-regular text-white py-2" style="letter-spacing: .01rem;">Jumlah
                                    Karyawan</h5>
                                <span class="odometer abel-regular text-white jumlah-karyawan">000</span><span
                                    class="abel-regular text-span text-white"> Orang</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <script>
        window.odometerOptions = {
            format: '(ddd).dd', // Change how digit groups are formatted, and how many digits are shown after the decimal point
        };
    </script>

    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        .odometer,
        .textroller {
            font-size: 2.5rem !important;
            letter-spacing: .25rem;
        }

        .text-span {
            font-size: 1.25rem;
        }

        .swiper-container {
            width: 100%;
            height: 80%;
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
    </style>
    <section id="nilai-perusahaan">
        <div class="bg-white">
            <div class="container-fluid p-5-to-p-4-to-p-3">
                <div class="px-5-to-px-4-to-px-3">
                    <div class="col-12 px-0">
                        <h3 class="text-center text-armas-red akzidenz-condensed-bold py-4">NILAI PERUSAHAAN</h3>
                    </div>

                    <div class="col-12 py-3 px-0">
                        <div class="row">

                            <h3
                                class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 akzidenz-condensed-bold gradient-box">
                                SEMANGAT HARUS BISA</h3>
                            <h3
                                class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 akzidenz-condensed-bold gradient-box">
                                KERJA KERAS </h3>
                            <h3
                                class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 akzidenz-condensed-bold gradient-box">
                                KERJA SAMA</h3>
                            <h3
                                class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 akzidenz-condensed-bold gradient-box">
                                DISIPLIN</h3>

                        </div> <!-- row end -->
                    </div>

                    <p class="abel-regular text-center py-3 px-5-to-px-4-to-px-3" style="font-size: 1.25rem;">
                        Kinerja kami adalah hasil dari pengabdian nilai inti yang kami pegang, yang memprioritaskan
                        semangat kerja keras, disiplin, kerjasama serta pola pikir optimis yang mendorong untuk
                        selalu bisa mengerjakan apapun yang datang ke arah kami.</p>

                </div>
            </div> <!-- container-fluid end -->

        </div> <!-- bg-lightgrey end -->
    </section>
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
    <section id="truk-kami">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 p-0">
                    <div class="row">
                        <div class="col-lg-4 flex-center order-last-lg p-5-to-p-4-to-p-3 bg-lightgrey">
                            <div class="p-5-to-p-4-to-p-3">
                                <h3 class="text-left-to-center text-armas-red akzidenz-condensed-bold">TRUK KAMI
                                </h3>
                                <p class="akzidenz-regular visi-misi-content">
                                    Saat ini, armada truk Armas memiliki 191 truk yang berjenis small, medium dan
                                    large.
                                    <br><br>
                                    Sejak tahun 2004, jumlah truk di armada kami terus bertambah, sesuai dengan
                                    demand yang meningkat berkat konsistensi kualitas jasa Armas. Kami selalu
                                    mengutamakan investasi terhadap truk dan berusaha menambah armada kami setiap
                                    tahun agar terus memberi jasa terbaik.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8 flex-center order-last-lg p-5-to-p-4-to-p-3 pb-0-d bg-lightgrey">
                            <div style="width: 100%;">
                                <div class="bg-white p-5-to-p-4-to-p-3 box-shadow bg-fixed-centered"
                                    style="background: url({{ url('assets/user/uploads/truk-kami-bg.svg') }});">
                                    <h3 class="text-left-to-center text-armas-red abel-regular">JENIS SPESIFIK TRUK
                                    </h3>
                                    <p class="akzidenz-regular text-grey visi-misi-content text-left-to-center">
                                        Total Armada : 179 Units (Sept’ 17)</p>
                                    <div class="row">
                                        <div class="col-lg-4 p-5-to-p-4-to-p-3">
                                            <img class="img-fluid img-100"
                                                src="{{ url('assets/user/uploads/truk-kami-small.svg') }}" />
                                            <br>
                                            <p class="akzidenz-regular text-center visi-misi-content m-0"><strong
                                                    class="akzidenz-bold">SMALL</strong> (4.2 X 2.3 X 2.3)</p>
                                        </div>
                                        <div class="col-lg-4 p-5-to-p-4-to-p-3">
                                            <img class="img-fluid img-100"
                                                src="{{ url('assets/user/uploads/truk-kami-medium.svg') }}" />
                                            <br>
                                            <p class="akzidenz-regular text-center visi-misi-content m-0"><strong
                                                    class="akzidenz-bold">MEDIUM</strong> (6.5 X 2.4 X 2.4)</p>
                                        </div>
                                        <div class="col-lg-4 p-5-to-p-4-to-p-3">
                                            <img class="img-fluid img-100"
                                                src="{{ url('assets/user/uploads/truk-kami-long.svg') }}" />
                                            <br>
                                            <p class="akzidenz-regular text-center visi-misi-content m-0"><strong
                                                    class="akzidenz-bold">LONG</strong> (7.5 X 2.4 X 2.4)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 p-0 bg-lightgrey">
                    <br>
                    <div class="row">
                        <div class="col-lg-6 flex-center p-5-to-p-4-to-p-3 w-100 h-100">
                            <div class="bg-white p-5-to-p-4-to-p-3 box-shadow w-100 h-100">
                                <h3 class="text-left-to-center text-armas-red abel-regular">JUMLAH TRUK</h3>
                                <h6 class="text-left-to-center text-dark-grey akzidenz-regular">
                                    {{$tahun[0]}}-{{$tahun[count($tahun)-1]}}</h6>
                                <div id="jumlahTrukLine" style="height: 200px; width: 100%;"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 flex-center p-5-to-p-4-to-p-3 w-100 h-100 noselect">
                            <div class="bg-fixed-centered p-5-to-p-4-to-p-3 box-shadow w-100 h-100"
                                style="background: url({{ url('assets/user/uploads/truk-kami.jpg') }})"
                                style="height: 200px;">
                                <h3 class="text-left-to-center text-armas-red abel-regular o-0">PT. ARMAS</h3>
                                <h6 class="text-left-to-center text-dark-grey akzidenz-regular o-0">LOGISTICS</h6>
                                <h3 class="text-left-to-center text-armas-red abel-regular o-0">PT. ARMAS</h3>
                                <h6 class="text-left-to-center text-dark-grey akzidenz-regular o-0">LOGISTICS</h6>
                                <h3 class="text-left-to-center text-armas-red abel-regular o-0">PT. ARMAS</h3>
                                <h6 class="text-left-to-center text-dark-grey akzidenz-regular o-0">LOGISTICS</h6>
                                <h3 class="text-left-to-center text-armas-red abel-regular o-0">PT. ARMAS</h3>
                                <h6 class="text-left-to-center text-dark-grey akzidenz-regular o-0">LOGISTICS</h6>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- row end -->
        </div> <!-- container-fluid end -->
    </section>
    <section id="persentase-perusahaan">
        <div class="bg-lightgrey">
            <div class="container-fluid p-5-to-p-4-to-p-3">
                <div class="row">
                    <div class="col-12 px-0">
                        <h3 class="text-center text-armas-red akzidenz-condensed-bold pt-4 pb-2 mb-0">PERSENTASE
                            PERUSAHAAN</h3>
                    </div>

                    <div class="col-12 p-0">
                        <div class="row">

                            <!--- <div class="col-lg-4 d-flex p-4">
                                <div class="bg-white box-shadow p-5-to-p-4-to-p-3">
                                    <div class="mh-9-rem">
                                        <h3 class="text-center text-armas-red abel-regular mt-2 mb-4">PELANGGAN KAMI
                                        </h3>
                                        <h6 class="text-center akzidenz-regular">Ocean Cash Felt, Summit Adyawinsa
                                            Indonesia, CMWI, Metalarts, Indonesia, USRA, IS Jaya, LJK dan Sanko.
                                        </h6>
                                    </div>
                                    <div id="pelangganKami"></div>

                                </div>
                            </div> --->

                            <div class="col-lg-8 d-flex p-4">
                                <div class="bg-white box-shadow p-5-to-p-4-to-p-3">
                                    <div class="mh-9-rem">
                                        <h3 class="text-center text-armas-red abel-regular mt-2 mb-4">JENIS MEREK TRUK
                                        </h3>
                                        <h6 class="text-center akzidenz-regular">Ocean Cash Felt, Summit Adyawinsa
                                            Indonesia, CMWI, Metalarts, Indonesia, USRA, IS Jaya, LJK dan Sanko.
                                        </h6>
                                    </div>
                                    <div id="jenisMerek"></div>

                                </div>
                            </div>

                            <div class="col-lg-4 d-flex p-4">
                                <div class="bg-white box-shadow p-5-to-p-4-to-p-3">
                                    <div class="mh-9-rem">
                                        <h3 class="text-center text-armas-red abel-regular mt-2 mb-4">JUMLAH TRUK
                                        </h3>
                                        <h6 class="text-center akzidenz-regular">Total Armada:<br>179 Units (Sept’
                                            17)</h6>
                                    </div>
                                    <div id="jumlahTruk"></div>
                                </div>
                            </div>

                        </div> <!-- row end -->
                    </div>

                </div> <!-- row end -->
            </div> <!-- container-fluid end -->
        </div> <!-- bg-white end -->
    </section>
    <!--- <section id="pelanggan-kami">
        <div class="container-fluid px-0 pb-3 pt-4">
            <div class="col-12 pb-5">
                <h3 class="text-center text-armas-red akzidenz-condensed-bold pt-3 mt-3 pb-0 mb-0">PELANGGAN KAMI
                </h3>
            </div>
            <div class="px-5 py-0">
                <div class="row revealOnScroll" data-animation="fadeIn">
                    @foreach($pelanggans as $pelanggan)
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6 text-center">
                        <div class="px-3">
                            <img class="img-fluid" src="{{url($pelanggan->gambar)}}" width="100" height="100" />
                        </div>
                    </div>
                    @endforeach

                </div>
               
            </div>
        </div> 
    </section> -->
    <section id="penghargaan" class="revealOnScroll slower" data-animation="fadeIn">
        <div class="bg-grey">
            <div class="container-fluid p-5-to-p-4-to-p-3 pb-0">
                <div class="px-5-to-px-4-to-px-3">
                    <div class="col-12 px-0">
                        <h3 class="text-center text-armas-red akzidenz-condensed-bold py-4 mb-0">PENGHARGAAN</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-grey">
            <div class="container-fluid p-0">

                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                    <div class="carousel-inner row w-10 mxauto" role="listbox">

                        <?php
                    $no = 1;
                    $state = 'active';
                    ?>
                        @foreach($penghargaans as $foto)
                        <div class="carousel-item {{$state}} col-md-4">
                            <img class="img-coba" src="{{$foto->gambar}}" alt="slide {{$no}}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$foto->judul}}</h5>
                            </div>
                        </div>
                        <?php $no++; $state = ''; ?>
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-lg text-muted"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-lg text-muted"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <!-- <div class="row">
                    @foreach($penghargaans as $penghargaan)
                    <div class="col-md-4 p-0">
                        <figure class="zoom-effect-lighten">
                            <img width="800" height="400" src="{{url('')}}/{{$penghargaan->gambar}}"
                                class="img-fluid wp-post-image" alt=""
                                srcset="{{url('')}}/{{$penghargaan->gambar}} 800w, uploads/skill-up-300x150.jpg 300w, uploads/skill-up-768x384.jpg 768w"
                                sizes="(max-width: 800px) 100vw, 800px" />
                            <figcaption class="fade-to-back">
                                <div class="selengkapnya-button flex-center">
                                    <h1 class="content-centered heading-title m-auto text-center text-white akzidenz-condensed-bold"
                                        style="letter-spacing: .15rem;">
                                        {{$penghargaan->judul}} </h1>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div> -->
                <!-- <div class="row">
                    <div class="col-6 text-right">
                        <a class="btn btn-primary mb-3 mr-1" href="{{$prevPage}}" role="button"
                            data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-primary mb-3 " href="{{$nextPage}}" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section id="lokasi-pool">

        <div class="bg-lighter-gray">
            <div class="container-fluid p-5-to-p-4-to-p-3 py-1">
                <div class="px-5-to-px-4-to-px-3">
                    <div class="col-12 px-0">
                        <h3 class="text-center text-armas-red akzidenz-condensed-bold py-4 mb-0">LOKASI POOL ARMAS
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-transparent">
            <div class="container-fluid p-0">
                <div class="row">

                    <div class="col-lg-4 p-0 border-left-armas-red border-right-armas-darkred">
                        <div class="bg-armas-gradient-ltr">
                            <h3 class="text-center text-white akzidenz-condensed-bold pt-4 mb-0">BEKASI</h3>
                            <h6 class="text-center text-white akzidenz-regular pb-4 mb-0">HEAD OFFICE</h6>
                        </div>
                        <div class="mapouter m-0" style="width: 100%;">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="100%" id="gmap_canvas"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9209042635102!2d106.97376651431077!3d-6.274130563163883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d96455d8293%3A0x5962cf1dcd820374!2sPT.%20Armas%20Logistic%20Service%20Head%20Office!5e0!3m2!1sen!2sid!4v1629709078976!5m2!1sen!2sid"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0 border-left-armas-red border-right-armas-darkred">
                        <div class="bg-armas-gradient-ltr">
                            <h3 class="text-center text-white akzidenz-condensed-bold pt-4 mb-0">BEKASI</h3>
                            <h6 class="text-center text-white akzidenz-regular pb-4 mb-0">POOL 01</h6>
                        </div>
                        <div class="mapouter m-0" style="width: 100%;">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="100%" id="gmap_canvas"
                                    src="https://www.google.com/maps/embed?origin=mfe&amp;pb=!1m3!2m1!1sPT.+Armas+Logistic+Service+Pool+Bekasi,+Pekayon+Jaya,+Bekasi+Sel.,+Kota+Bks,+Jawa+Barat!6i14!3m1!1sen!5m1!1sen"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0 border-left-armas-red border-right-armas-darkred">
                        <div class="bg-armas-gradient-ltr">
                            <h3 class="text-center text-white akzidenz-condensed-bold pt-4 mb-0">CIKARANG</h3>
                            <h6 class="text-center text-white akzidenz-regular pb-4 mb-0">POOL 02</h6>
                        </div>
                        <div class="mapouter m-0" style="width: 100%;">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="100%" id="gmap_canvas"
                                    src="https://www.google.com/maps/embed?origin=mfe&amp;pb=!1m3!2m1!1sPT.+Armas+Logistic+Service+Pool+Cikarang+Jl.+Raya+Tegal+Danas+No.199,+Jayamukti,+Cikarang+Pusat,+Bekasi,+Jawa+Barat+17530!6i14!3m1!1sen!5m1!1sen"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
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
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
<script src="{{url('assets/user/apexchart/apexcharts.js')}}"></script>
<script>
    $('#carouselExample').on('slide.bs.carousel', function (e) {

        /*

        CC 2.0 License Iatek LLC 2018
        Attribution required

        */

        var $e = $(e.relatedTarget);

        var idx = $e.index();
        console.log("IDX :  " + idx);

        var itemsPerSlide = 8;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                } else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });
</script>
<script>
    var label = null;
    var data = null;
    $.ajax({
        url: "{{url('about/truk')}}",
        success: function (result) {
            label = result.label;
            data = result.data;

            var options = {
                colors: ['#8B0000'],
                chart: {
                    height: 280,
                    type: "area"
                },
                dataLabels: {
                    enabled: false
                },
                series: [{
                    name: "TRUK",
                    data: data,
                }],
                fill: {
                    type: "gradient",

                },
                xaxis: {
                    categories: label
                }
            };

            var chart = new ApexCharts(document.querySelector("#jumlahTrukLine"), options);

            chart.render();
        }
    });
</script>
<script>
    $.ajax({
        url: "{{url('about/pelanggan')}}",
        success: function (result) {
            label = result.label;
            data = result.data;
            // console.log(label);
            var options = {
                series: data,
                labels: label,
                colors: ['#CD5C5C', '#DC143C', '#B22222', '#8B0000', '#F08080'],
                chart: {
                    width: 380,
                    type: 'donut',
                },
                plotOptions: {
                    pie: {
                        startAngle: -90,
                        endAngle: 270,
                    }
                },
                dataSeries: {
                    enabled: false,
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    type: 'solid',
                },
                legend: {
                    formatter: function (val, opts) {
                        return val
                    }
                },
                title: {

                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            // var chart = new ApexCharts(document.querySelector("#pelangganKami"), options);
            // chart.render();
        }
    });
</script>
<!-- merek truk -->
<script>
    $.ajax({
        url: "{{url('about/merek')}}",
        success: function (result) {
            label = result.label;
            data = result.data;
            var options = {
                series: data,
                labels: label,
                colors: ['#CD5C5C', '#DC143C', '#B22222', '#8B0000', '#F08080'],
                chart: {
                    width: 380,
                    type: 'donut',
                },
                plotOptions: {
                    pie: {
                        startAngle: -90,
                        endAngle: 270,
                    }
                },
                dataSeries: {
                    enabled: false,
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    type: 'solid',
                },
                legend: {
                    formatter: function (val, opts) {
                        return val
                    }
                },
                title: {

                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chartMerek = new ApexCharts(document.querySelector("#jenisMerek"), options);
            chartMerek.render();
        }
    });
</script>
<!-- jumlah truk -->
<script>
    $.ajax({
        url: "{{url('about/jumlah-truk')}}",
        success: function (result) {
            label = result.label;
            data = result.data;
            // console.log(label);
            var options = {
                series: data,
                labels: label,
                colors: ['#CD5C5C', '#DC143C', '#B22222', '#8B0000', '#F08080'],
                chart: {
                    width: 380,
                    type: 'donut',
                },
                plotOptions: {
                    pie: {
                        startAngle: -90,
                        endAngle: 270,
                    }
                },
                dataSeries: {
                    enabled: false,
                },
                fill: {
                    type: 'solid',
                },
                legend: {
                    formatter: function (val, opts) {
                        return val
                    }
                },
                title: {

                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#jumlahTruk"), options);
            chart.render();
        }
    });
</script>
@endpush