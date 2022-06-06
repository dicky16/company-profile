@extends('user.master')
@push('css')
<link href="{{ url('assets/user/css/styles.css') }}" rel="stylesheet">
<link href="{{ url('assets/user/css/responsive.css') }}" rel="stylesheet">
<link href="{{ url('assets/user/css/font-awesome.min.css') }}" rel="stylesheet">
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
        Form Lamaran
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
    
    <div class="container">
        <div class="page-content mt50">
            <div class="row">
                <div class="col-md-4">
                    <div class="motijob-sidebar"><br><br>
                        <div class="candidate-profile-picture">
                            <div class="upload-img-field">
                                <img class="img-fluid img-56-vw" src="{{ url('assets/user/uploads/fotoformal.png') }}">
                                <a class="btn btn-primary" href="#">Upload Foto anda</a>
                            </div>
                        </div> <!-- end .agent-profile-picture -->
                        <div class="job-general-info">
                            <form action="#">
                                <div class="title clearfix">
                                    <h6>Detail</h6>
                                    <a class="pull-right" href="#"><i class="fa fa-edit"></i>Edit</a>
                                </div> <!-- end .end .title -->

                                <ul class="list-unstyled job-registration">
                                    <li><strong>Nama lengkap</strong><input type="text" placeholder="Muhammad Farraseka Fadhil">
                                    </li>
                                    <li><strong>Tanggal lahir:</strong><input type="text" placeholder="[17/08/1945]">
                                    </li>
                                    <li><strong>NIK</strong><input type="text" placeholder="[10999099]">
                                    </li>
                                    <li><strong>Umur:</strong><input type="text" placeholder="[18 tahun]">
                                    </li>
                                    <li><strong>Gender:</strong><input type="text" placeholder="[Perempuan]">
                                    </li>
                                   
                                    <li><strong>No Telpon:</strong><input type="text" placeholder="[082262200182]"></li>
                                    <li><strong>E-mail</strong><input type="text" placeholder="[admin@gmail.com]"></li>
                                   
                                    <li><strong>Link Sosial media</strong><input type="text"
                                            placeholder="[admin.biolinky.com]"></li>
                                    <li><strong>Sudah bekerja?</strong><input type="text" placeholder="[iya/blm]"></li>
                                    <li><strong>Terakhir bekerja di PT?</strong><input type="text"
                                            placeholder="[PT.Teknologi]"></li>
                                    <li><strong>Berapa tahun anda bekerja?</strong><input type="text"
                                            placeholder="[3 tahun]"></li>
                                    <li><strong>Jabatan terakhir?</strong><input type="text"
                                            placeholder="[Staff acounting]"></li> </br>
                                   
                                    <li><strong>Upload CV Anda</strong> <a class="btn btn-primary" href="#">Upload CV
                                            anda</a></li> </br>
                                   
                                </ul>
                            </form>

                        </div> <!-- end .candidate-general-info -->
                    </div>
                </div> <!-- end .3col grid layout -->

                <div class="col-md-8">
                    <div class="job-reg-form">
                        <form action="#">
                            <div class="form-banner-button">
                                <div class="preview-import pull-left">
                                    <div class="job-single-content mt20">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><span>*</span>Jelaskan kelebihan dan kekurangan
                                                    anda?</label>
                                            </div> <!-- end .4th grid-layout -->

                                            <div class="col-md-8">
                                                <div class="job-des-editore">
                                                    <div class="textarea-editor">
                                                        <textarea name="area" id="myNicEditor" cols="40"></textarea>
                                                        <br>
                                                        <center><a href="#" class="btn btn-success">Simpan</a></p>
                                                        </center>
                                                    </div> <!-- end textarea-editor -->
                                                </div> <!-- end .condidate-description -->
                                            </div> <!-- end .8th grid layout -->
                                        </div> <!-- end nasted .row -->
                                    </div> <!-- end .candidate-single-content -->



                                    <div class="job-single-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><span>*</span>Skill yang dibutuhkan?</label>
                                            </div> <!-- end .4th grid-layout -->

                                            <div class="col-md-8">
                                                <div class="job-skill-single clearfix">

                                                    <div class="skill-edit-button">
                                                        <a href="#" class="skill-edit btn-primary">Edit</a>
                                                        <a href="#" class="skill-delete btn-danger">Delete</a>
                                                        <a href="#" class="skill-save btn-success">Save</a>
                                                    </div> <!-- end .sill-edit-button -->

                                                    <div class="skill-edit-content">
                                                        <div class="skill-selectbox mb10">
                                                            <select>
                                                                <option value="#">Pilih skill</option>
                                                                <option value="#">php</option>
                                                                <option value="#">css</option>
                                                                <option value="#">html</option>
                                                                <option value="#">javascript</option>
                                                            </select>
                                                        </div> <!-- end .skill-selectbox -->

                                                        <div class="skill-description mb10">
                                                            <textarea name="skill-description"
                                                                placeholder="Description"></textarea>
                                                        </div> <!-- end .skill-description -->

                                                        <div class="skill-progressbar">

                                                            <p>
                                                                <span class="mini-amount">0%</span>
                                                                <input type="text" id="amount-first">

                                                            </p>

                                                            <div id="slider-skill-first"></div>
                                                        </div> <!-- end .skill-progressbar -->

                                                    </div> <!-- end .skill-edit-content -->
                                                </div> <!-- end .candidate-skills-single -->

                                                <div class="job-skill-single clearfix">

                                                    <div class="skill-edit-button">
                                                        <a href="#" class="skill-edit btn-primary">Edit</a>
                                                        <a href="#" class="skill-delete btn-danger">Delete</a>
                                                        <a href="#" class="skill-save btn-success">Save</a>
                                                    </div> <!-- end .sill-edit-button -->

                                                    <div class="skill-edit-content">
                                                        <div class="skill-selectbox mb10">
                                                            <select>
                                                                <option value="#">pilih skill</option>
                                                                <option value="#">php</option>
                                                                <option value="#">css</option>
                                                                <option value="#">html</option>
                                                                <option value="#">javascript</option>
                                                            </select>
                                                        </div> <!-- end .skill-selectbox -->

                                                        <div class="skill-description mb10">
                                                            <textarea name="skill-description"
                                                                placeholder="Description"></textarea>
                                                        </div> <!-- end .skill-description -->

                                                        <div class="skill-progressbar">

                                                            <p>
                                                                <span class="mini-amount">0%</span>
                                                                <input type="text" id="amount-second">

                                                            </p>

                                                            <div id="slider-skill-second"></div>
                                                        </div> <!-- end .skill-progressbar -->

                                                    </div> <!-- end .skill-edit-content -->
                                                </div> <!-- end .candidate-skills-single -->

                                                <div class="job-skill-single clearfix">

                                                    <div class="skill-edit-button">
                                                        <a href="#" class="skill-edit btn-primary">Edit</a>
                                                        <a href="#" class="skill-delete btn-danger">Delete</a>
                                                        <a href="#" class="skill-save btn-success">Save</a>
                                                    </div> <!-- end .sill-edit-button -->

                                                    <div class="skill-edit-content">
                                                        <div class="skill-selectbox mb10">
                                                            <select>
                                                                <option value="#">pilih skill</option>
                                                                <option value="#">php</option>
                                                                <option value="#">css</option>
                                                                <option value="#">html</option>
                                                                <option value="#">javascript</option>
                                                            </select>
                                                        </div> <!-- end .skill-selectbox -->

                                                        <div class="skill-description mb10">
                                                            <textarea name="skill-description"
                                                                placeholder="Description"></textarea>
                                                        </div> <!-- end .skill-description -->

                                                        <div class="skill-progressbar">

                                                            <p>
                                                                <span class="mini-amount">0%</span>
                                                                <input type="text" id="amount-third">

                                                            </p>

                                                            <div id="slider-skill-third"></div>
                                                        </div> <!-- end .skill-progressbar -->

                                                    </div> <!-- end .skill-edit-content -->
                                                </div> <!-- end .candidate-skills-single -->

                                                <div class="add-skill-button">
                                                    <a class="btn btn-success" href="#">Add a Skill</a>
                                                </div>
                                            </div> <!-- end .8th grid layout -->
                                        </div> <!-- end nasted .row -->
                                    </div> <!-- end .candidate-single-content -->

                                    <div class="job-single-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><span>*</span>Skill tambahan anda</label>
                                            </div> <!-- end .4th grid-layout -->

                                            <div class="col-md-8">
                                                <div class="add-skills-field">
                                                    <input type="text" placeholder="Kepemimpinan,public speaking">
                                                </div>
                                            </div> <!-- end .8th grid layout -->
                                        </div> <!-- end .nasted .row -->
                                    </div> <!-- end .candidate-single-content -->
                                    </br></br></br>
                                    <center>
                                        <div class="save-cancel-button ml20">
                                            <a href="#" class="btn btn-success">Save</a>
                                            <a href="#" class="btn btn-danger">Cancel</a>
                                        </div> <!-- end .save-cancel-button -->
                                    </center>

                        </form>
                        <!-- aku coba tambah dua div dibawah ini -->
                    </div>
                </div>
            </div> <!-- end .candidate-reg-form -->
        </div> <!-- end .9col grid layout -->

    </div> <!-- end .row -->
</div> <!-- end .page-content -->

<footer id="footer">

</footer> <!-- end #footer -->

</div> <!-- end #main-wrapper -->


@endsection
