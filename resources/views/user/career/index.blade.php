@extends('user.master')
@push('css')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
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

    <h1 class="text-white akzidenz-condensed-bold about-text-title revealOnScroll" data-animation="fadeInUp">CAREER
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
        .img-coba{
            width:800px !important;
            height:200px;
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


    <style>
        .gmap_canvas {
            height: 50vh;
            width: 100%;
        }

    </style>
    <style>
    /* .card{
        border-radius: 2px;
        background: #fff;
        box-shadow: 0 3px 3px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
        transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
        padding: 3px 3px 3px 3px;
        cursor: pointer;
        margin-left: auto;
    } */

    .card:hover{
        transform: scale(1);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
</style>
    <br>
    
    <div clas="container">
        <div class="row">
            <div class="d-flex flex-row-reverse">
                <!-- Example dropdown danger button -->

                <div class="col-sm">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Departemen
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('career')}}">Semua</a></li>
                            @foreach($department as $departemen)
                            <li><a class="dropdown-item" href="{{url('career')}}/lowongan/{{$departemen->id}}">{{$departemen->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- search -->
                <div class="col-sm">
                    <form action="{{url('career')}}" method="get">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" name="query" class="form-control change-search" placeholder="Search">
                        </div>
                    </form>
                </div>

            </div>
        </div><br><br>

        <div class="row justify-content-center">
            @foreach($lowonganKerjas as $lowonganKerja)
            <div class="card col-sm-12 col-md-3 col-xs-12 mt10" style="width: 18rem;">
                <img class="img-coba" src="{{ url($lowonganKerja->cover) }}" alt="Card image cap">
                <div class="card-body">
                    @php
                    $newDateOpen = date("d-m-Y", strtotime($lowonganKerja->open));
                    $newDateClose = date("d-m-Y", strtotime($lowonganKerja->close));
                    @endphp
                    <p class="card-text">Pendaftaraan tanggal <br> {{$newDateOpen}} s/d {{$newDateClose}}</p>
                    <h5 class="card-title">{{$lowonganKerja->departemen}} ({{$lowonganKerja->sub_departemen}})</h5>

                    <p class="card-text">{!! $lowonganKerja->name !!}</p>

                </div>
                <!-- <div class="card-footer"> -->
                    <a href="{{url('career')}}/{{$lowonganKerja->id}}"><button type="button"
                            class="btn btn-primary" style="margin-bottom: 10px;">Read More</button> </a>
                <!-- </div> -->
            </div>
            <br>
            @endforeach
        </div><br>
    </div>
    <div class="container">
        <div class="d-flex flex-row-reverse">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    
                    {{ $lowonganKerjas->links() }}
                   <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"> --->
                        
                   
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    // $('.change-search').on('keyup',function(e){
    //     var querySearch = $(".change-search").val();
    //     $.get("{{url('career-data')}}",{
    //         query: querySearch
    //     }, function(data) {
    //         // console.log(data);

    //     });
    // });
</script>
@if(session('error'))
<script>
    alert("{{session('error')}}")
</script>
@endif
@endpush
