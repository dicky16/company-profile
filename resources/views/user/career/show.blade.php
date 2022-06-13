@extends('user.master')
@section('content')
<div class="page">
    <main id="main-splash" class="splash-slider main-page"
        style="height: auto !important; min-height: auto !important;">

        <!-- Swiper -->
        <div class="swiper-container" style="height: auto !important;">
            <div class="swiper-wrapper">

                <div class="swiper-slide height-half"
                    style="background-image: url({{ url('assets/user/uploads/contact-splash.jpg') }}); ">
                    <div class="overlayed text-white" style="width: 100%;">
                        <div class="featured-content-meta">
                            <ul class='post-meta'>
                                <li><span class='post-meta-key'>Globe:</span> <img class="img-fluid img-56-vw"
                                        src=" {{ url('assets/user/uploads/armas-globe-white-big.svg') }}" /></li>
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
        {{$lowonganKerja->name}}</h1>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="post-block single-post wow fadeInUp" data-wow-delay="0.4s">
                <div class="post-holder">
                    <div class="img-holder">
                        <img src="{{ url($lowonganKerja->cover) }}" class="rounder mx-auto d-block"
                            alt="image description" width="500" height="500">
                    </div>
                    @php
                    $newDateOpen = date("d-m-Y", strtotime($lowonganKerja->open));
                    $newDateClose = date("d-m-Y", strtotime($lowonganKerja->close));
                    @endphp
                    <time datetime="2011-01-12">Pendaftaran awal {{$newDateOpen}}
                        <br>
                        akhir
                        pendaftaran {{$newDateClose}}</time>
                    <h2>{{$lowonganKerja->departemen}} ({{$lowonganKerja->sub_departemen}})
                    </h2>
                    <p><b>Deskripsi :</b>
                        <br>
                        {!! $lowonganKerja->description !!}
                    </p>
                    <a href="{{url('career/form')}}/{{$lowonganKerja->id}}"> <button type="button"
                            class="btn btn-primary btn-lg btn-block" 
                            {{ new DateTime() >= new DateTime($lowonganKerja->close) ? 'disabled' : '' }}>Apply Now</button></a>
                    <p class="text-center text-danger">{{ new DateTime() >= new DateTime($lowonganKerja->close) ? 'Pendaftaran sudah ditutup' : '' }}</p>

                </div>
            </div>
        </div>


        <h3 style="margin-top: 50px;">Lowongan Lainnya</h3>
        <div class="row mt-50 justify-content-center">
            @for($i = 0; $i < count($lowongans); $i++)
            @if($lowongans[$i]->id != $lowonganKerja->id)
            <div class="card col-3col-sm-12 col-md-3 col-xs-12 mt10" style="width: 18rem;">
                <img class="card-img-top" src=" {{ url($lowongans[$i]->cover) }}" alt="Card image cap">
                <div class="card-body">
                    @php
                    $newDateOpen = date("d-m-Y", strtotime($lowongans[$i]->open));
                    $newDateClose = date("d-m-Y", strtotime($lowongans[$i]->close));
                    @endphp
                    <p class="card-text">Pendaftaraan tanggal <br> {{$newDateOpen}} s/d {{$newDateClose}}</p>
                    <h5 class="card-title">{{$lowongans[$i]->departemen}} ({{$lowongans[$i]->sub_departemen}})</h5>

                    <p class="card-text">{!! $lowongans[$i]->name !!}</p>

                </div>
                <!-- <div class="card-footer"> -->
                    <a href="{{url('career')}}/{{$lowongans[$i]->id}}"><button type="button"
                            class="btn btn-primary">ReadMore</button> </a>
                <!-- </div> -->
            </div>
            @endif
            @endfor
        </div>
    </div>

    <style>
        .card:hover{
            transform: scale(1);
            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        }
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

        .contact-link {
            font-weight: bold !important;
        }
    </style>

</div>
@endsection