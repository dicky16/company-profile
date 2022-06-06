@extends('user.master')
@push('css')
<link href="{{ url('assets/user/assets/css/card.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <h1 class="text-white akzidenz-condensed-bold about-text-title revealOnScroll" data-animation="fadeInUp">
        Dokumentasi
    </h1>


    <style>
        /* Styles for wrapping the search box */

        .main {
            width: 50%;
            margin: 50px auto;
        }

        /* Bootstrap 4 text input with search icon */

        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
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


    <style>
        .gmap_canvas {
            height: 50vh;
            width: 100%;
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
            .img-coba{
                width:400px !important;
                height:200px;
            }

        }
    </style>
    <br>
    <br><br>
    <section class="pt-5 pb-5">
        <div class="container">
           
           
            <h2 class="text-center text-armas-red akzidenz-condensed-bold py-4 mb-0">FOTO</h2>
            

            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                <div class="carousel-inner row w-10 mxauto" role="listbox">
                    
                    <?php $no = 1; $state = 'active'; ?>
                    @foreach($fotos as $foto)
                    <div class="carousel-item col-md-4 {{$state}}">
                        <img class="img-coba" src="{{url($foto->path)}}" width="400" height="200"
                            alt="slide {{$no}}">
                    </div>
                    <?php $no++; $state = ''; ?>
                    @endforeach

                    <!-- <div class="carousel-item col-md-4">
                        <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=3" alt="slide 3">
                    </div>
                    <div class="carousel-item col-md-4">
                        <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=4" alt="slide 4">
                    </div>
                    <div class="carousel-item col-md-4">
                        <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=5" alt="slide 5">
                    </div>
                    <div class="carousel-item col-md-4">
                        <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=6" alt="slide 6">
                    </div>
                    <div class="carousel-item col-md-4">
                        <img class="img-fluid mx-auto d-block" src="http://i.imgur.com/g27lAMl.png" alt="slide 7">
                    </div>
                    <div class="carousel-item col-md-4">
                        <img class="img-fluid mx-auto d-block" src="http://i.imgur.com/g27lAMl.png" alt="slide 7">
                    </div> -->
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
            <!-- <div class="row justify-content-center">
                <div class="col-6"> -->

            <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{url($fotos[0]->path)}}" class="d-block w-100" alt="...">
                            </div>
                            @foreach($fotos as $foto)
                            <div class="carousel-item">
                                <img src="{{url($foto->path)}}" class="d-block w-100" alt="...">
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> -->
            <!-- </div>
            </div> -->

        </div>
</div>
</section>
<!----Video--->
<h1 class="text-center text-armas-red akzidenz-condensed-bold py-4 mb-0">Video</h1>
<div class="container">
    <div class="row">
        @foreach($videos as $video)
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="10" height="10" src="{{($video->path)}}" frameborder="0"
                            allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br>
<div class="container">
    <div class="d-flex flex-row-reverse justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">

                {{ $videos->links() }}

            </ul>
        </nav>
    </div>
</div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
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
    // setGallery();
    function setGallery() {
        $.get("{{url('gallery-data')}}", function (data) {
            var fotoHtml = "";
            var isiHtml = "";
            var foto = data.data;
            console.log(foto);
            var state = 'active';
            let jumlah = foto.length;
            let hasilBagi = parseInt(jumlah / 3);
            let sisa = jumlah % 3;
            console.log(hasilBagi);
            console.log(sisa);
            if (data.sukses == true) {
                for (let index = 0; index < hasilBagi + 1; index++) {
                    if (index != 0) {
                        state = '';
                    }
                    for (let j = index; j < sisa; j++) {
                        isiHtml +=
                            '<div class="col-md-4 mb-3">' +
                            '<div class="card">' +
                            '<img class="img-fluid" alt="100%x200" src="{{url("")}}/' + foto[j].path +
                            '" width="200" height="200">' +
                            '<div class="card-body">' +
                            '<h5 class="card-title">' + foto[j].judul +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }

                    fotoHtml +=
                        '<div class="carousel-item ' + state + '">' +
                        '<div class="row">' +
                        isiHtml +
                        '</div>' +
                        '</div>';
                    isiHtml = "";
                }
                $("#isiFoto").html(isiHtml);
                // console.log(fotoHtml);
                $("#foto").html(fotoHtml);
            }
        });
    }
</script>
@endpush