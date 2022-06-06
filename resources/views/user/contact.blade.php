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

    <h1 class="text-white akzidenz-condensed-bold about-text-title revealOnScroll" data-animation="fadeInUp">KONTAK
        KAMI</h1>


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

        .contact-link {
            font-weight: bold !important;
        }

    </style>
    <section id="contact-details">
        <div class="container-fluid p-0">
            <div class="row">

                <div class="col-lg-4 p-0 d-flex bg-armas-gradient-ltr">
                    <figure class="m-0 mh-322-px">
                        <figcaption class="contact-details p-4">
                            <div class="contact-title text-white mb-0 px-3 py-4">
                                <img class="img-fluid" src="{{ url('assets/user/uploads/kantor_pusat.svg') }}" />
                                <h4 class="akzidenz-condensed-bold mt-1" style="letter-spacing: .1rem;">
                                    &nbsp;&nbsp;KANTOR PUSAT</h4>
                            </div>
                            <h5 class="contact-content abel-regular text-white mb-0 p-4"
                                style="letter-spacing: 0.01rem;">
                                Ruko Grand Galaxy City RSK 3 No. 90
                                <br>
                                Bekasi Selatan, Kota Bekasi 17146
                            </h5>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 p-0 d-flex bg-armas-gradient-ltr m-1-px-mobile">
                    <figure class="m-0 mh-322-px">
                        <figcaption class="contact-details p-4">
                            <div class="contact-title text-white mb-0 px-3 py-4">
                                <img class="img-fluid" src=" {{ url('assets/user/uploads/jam_operasional.svg') }}" />
                                <h4 class="akzidenz-condensed-bold mt-1" style="letter-spacing: .1rem;">
                                    &nbsp;&nbsp;JAM OPERASIONAL</h4>
                            </div>
                            <h5 class="contact-content abel-regular text-white mb-0 p-4"
                                style="letter-spacing: 0.01rem;">
                                Senin - Jum’at
                                <br>
                                09:00 - 17:00
                            </h5>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 p-0 d-flex bg-armas-gradient-ltr">
                    <figure class="m-0 mh-322-px">
                        <figcaption class="contact-details p-4">
                            <div class="contact-title text-white mb-0 px-3 py-4">
                                <img class="img-fluid" src="{{ url('assets/user/uploads/hubungi_kami.svg') }}" />
                                <h4 class="akzidenz-condensed-bold mt-1" style="letter-spacing: .1rem;">
                                    &nbsp;&nbsp;HUBUNGI KAMI</h4>
                            </div>
                            <h5 class="contact-content abel-regular text-white mb-0 px-4 pb-4">
                                <table class="table m-0" style="max-width: 15rem; min-width: 12.5rem;">
                                    <tbody>
                                        <tr>
                                            <th scope="row"
                                                style="text-align: left; font-weight: normal; letter-spacing: 0.01rem;">
                                                Phone</th>
                                            <td style="text-align: right;"><a class="text-white"
                                                    href="tel:+6221-8273-2647">+62-(21) 8273-2647</a><br>
                                                <a class="text-white"
                                                    href="tel:>+62-851-0021-5758">+62-851-0021-5758</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">&nbsp;</th>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <th scope="row abel-regular"
                                                style="text-align: left; font-weight: normal; letter-spacing: 0.01rem;">
                                                Fax</th>
                                            <td style="text-align: right;"><a class="text-white"
                                                    href="fax:+6221-8273-2648">+62(21) 8273-2648</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </h5>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </section>
    <section id="contact-maps" class="revealOnScroll slower" data-animation="fadeIn" style="height: 100% !important;">
        <div class="bg-transparent">
            <div class="container-fluid p-0">

                <div class="mapouter m-0" style="width: 100vw;">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="100%" id="gmap_canvas"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9209042635102!2d106.97376651431077!3d-6.274130563163883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d96455d8293%3A0x5962cf1dcd820374!2sPT.%20Armas%20Logistic%20Service%20Head%20Office!5e0!3m2!1sen!2sid!4v1629709078976!5m2!1sen!2sid"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
    <section id="contact-form-submission">
        <div class="bg-white">
            <div class="container px-3">

                <div role="form" class="wpcf7" id="wpcf7-f196-p4-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="{{url('pesan')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                        @csrf
                        <div class="row">

                            <div class="col-12 text-center pt-5">
                                <h1 class="akzidenz-condensed-bold text-armas-red py-2">KIRIM PESAN</h1>
                            </div>
                            <div class="col-lg-4">
                                <label style="width: 100% !important;"><br />
                                    <span class="wpcf7-form-control-wrap your-name">
										<input type="text" name="nama"
                                            value="" size="40"
                                            required aria-invalid="false"
                                            placeholder="Your Name"/>
										</span><br />
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label style="width: 100% !important;"><br />
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Your Email" /></span><br />
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label style="width: 100% !important;"><br />
                                    <span class="wpcf7-form-control-wrap phone-number"><input type="number"
                                            name="no_hp" value=""
                                            class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Phone Number" /></span><br />
                                </label>
                            </div>
                            <div class="col-12 py-4">
                                <label style="width: 100% !important;"><br />
                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="pesan"
                                            cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                            aria-invalid="false" placeholder="Your Message"></textarea></span><br />
                                </label>
                            </div>
                            <div class="col-12 pt-2 mt-3">
                                <div class="submit-button"><input type="submit" value="SUBMIT"
                                        class="wpcf7-form-control wpcf7-submit btn btn-danger abel-regular" /></div>
                            </div>
                        </div>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('scripts')
@if(session('success'))
<script>
	Swal.fire(
  'Good job!',
  '{{session('success')}}',
  'success'
)
</script>
@endif
@if(session('error'))
<script>
	Swal.fire(
  'Error!',
  'Form tidak boleh kosong!',
  'error'
)
</script>
@endif
@endpush
