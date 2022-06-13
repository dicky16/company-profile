@extends('user.master')
@push('css')
<!-- <link href="{{ url('assets/user/css/styles.css') }}" rel="stylesheet"> -->
<link href="{{ url('assets/user/css/responsive.css') }}" rel="stylesheet">
<link href="{{ url('assets/user/css/custom.css') }}" rel="stylesheet">
<link href="{{ url('assets/user/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
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
    <style>
        .form-select {
            display: block;
            width: 100%;
            padding: .375rem 2.25rem .375rem .75rem;
            -moz-padding-start: calc(0.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .form-select {
                transition: none
            }
        }

        .form-select:focus {
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25)
        }

        .form-select[multiple],
        .form-select[size]:not([size="1"]) {
            padding-right: .75rem;
            background-image: none
        }

        .form-select:disabled {
            background-color: #e9ecef
        }

        .form-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #212529
        }

        .form-select-sm {
            padding-top: .25rem;
            padding-bottom: .25rem;
            padding-left: .5rem;
            font-size: .875rem
        }

        .form-select-lg {
            padding-top: .5rem;
            padding-bottom: .5rem;
            padding-left: 1rem;
            font-size: 1.25rem
        }
    </style>

    <div class="container">
        <form action="{{url('career/form')}}/{{$lowonganKerja->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="page-content mt50">
                <div class="row justify-content-center">
                    <img src="https://via.placeholder.com/150" id="preview" width="300" height="400">
                </div>
                <div class="row justify-content-center mt10">
                    <div class="d-flex justify-content-center">
                        <input type="file" class="form-control" accept="image/*" onchange="previewImage(event)" name="foto" >
                        <b class="text-danger ml-2">*</b>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @error('foto')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="page-content mt10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="motijob-sidebar">

                            <div class="job-general-info">
                                <!-- <form action="#"> -->

                                <ul class="list-unstyled job-registration">
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>Nama lengkap <i class="text-danger">*</i></strong>
                                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Khansa Lungit" value="{{session('nama_lengkap')}}">
                                            @error('nama_lengkap')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>Tanggal lahir <i class="text-danger">*</i></strong>
                                            <input type="date" class="form-control" value="{{session('tanggal_lahir')}}" name="tanggal_lahir" placeholder="[25/06/2002]" >
                                            @error('tanggal_lahir')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>NIK <i class="text-danger">*</i></strong>
                                            <input type="text" class="form-control" name="nik" value="{{session('nik')}}" placeholder="3201234567891011" >
                                            @error('nik')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>Umur <i class="text-danger">*</i></strong>
                                            <div class="input-group" style="flex-wrap: nowrap;">
                                                <input type="number" class="form-control" name="umur" style="border: 1px solid black;" placeholder="18" aria-label="Umur" aria-describedby="umur">
                                                <span class="input-group-text" id="umur" style="border: 1px solid black; border-left: none; border-radius: 0;">Tahun</span>
                                            </div>
                                            @error('umur')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>Gender <i class="text-danger">*</i></strong>
                                            <select class="form-control" name="jenis_kelamin" id="" >
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            @error('jenis_kelamin')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>No Telpon <i class="text-danger">*</i></strong>
                                            <input type="text" class="form-control" name="no_tlp" placeholder="08123456789" value="{{session('no_tlp')}}">
                                            @error('no_tlp')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>E-mail <i class="text-danger">*</i></strong>
                                            <input type="text" class="form-control" name="email" placeholder="khansalungit@gmail.com" value="{{session('email')}}">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>Link Sosial media <i class="text-danger">*</i></strong>
                                            <input type="text" class="form-control" placeholder="khansa.biolinky.com" name="link_sosmed" value="{{session('link_sosmed')}}">
                                            @error('link_sosmed')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>

                                </ul>
                                <!-- </form> -->

                            </div> <!-- end .candidate-general-info -->
                        </div>
                    </div> <!-- end .3col grid layout -->

                    <div class="col-md-6">
                        <div class="motijob-sidebar">
                            <div class="job-general-info">
                                <!-- <div class="job-reg-form"> -->
                                <!-- <form action="#"> -->
                                <!-- <div class="form-banner-button"> -->
                                <ul>
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>Pendidikan terakhir <i class="text-danger">*</i></strong>
                                            <select class="form-control" name="pendidikan_terakhir" id="pendidikanTerakhir">
                                                <option value="smp" {{ session('pendidikan_terakhir') == 'smp' ? 'selected' : '' }}>SMP</option>
                                                <option value="sma" {{ session('pendidikan_terakhir') == 'sma' ? 'selected' : '' }}>SMA</option>
                                                <option value="d1" {{ session('pendidikan_terakhir') == 'd1' ? 'selected' : '' }}>D1</option>
                                                <option value="d2" {{ session('pendidikan_terakhir') == 'd2' ? 'selected' : '' }}>D2</option>
                                                <option value="d3" {{ session('pendidikan_terakhir') == 'd3' ? 'selected' : '' }}>D3</option>
                                                <option value="s1" {{ session('pendidikan_terakhir') == 's1' ? 'selected' : '' }}>S1</option>
                                            </select>
                                            @error('pendidikan_terahir')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group mb-2">
                                            <strong>Sudah pernah bekerja? <i class="text-danger">*</i></strong>
                                            <select class="form-control" name="sudah_bekerja" onchange="hideStatusKerja();" id="statusKerja" >
                                                <option value="iya" {{ session('sudah_bekerja') == 'iya' ? 'selected' : '' }}>Pernah</option>
                                                <option value="belum" {{ session('sudah_bekerja') == 'belum' ? 'selected' : '' }}>Belum</option>
                                            </select>
                                            @error('sudah_bekerja')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li class="status">
                                        <div class="form-group mb-2">
                                            <strong>Terakhir bekerja di PT? <i class="text-danger">*</i></strong>
                                            <input type="text" class="form-control" placeholder="PT. Teknologi Maju" value="{{session('terakhir_bekerja')}}" name="terakhir_bekerja">
                                        </div>
                                    </li>
                                    <li class="status">
                                        <div class="form-group mb-2">
                                            <strong>Berapa tahun anda bekerja? <i class="text-danger">*</i></strong>
                                            <div class="input-group" style="flex-wrap: nowrap;">
                                                <input type="number" class="form-control" name="lama_bekerja" style="border: 1px solid black;" placeholder="1.5" aria-label="Umur" aria-describedby="lama_bekerja">
                                                <span class="input-group-text" id="lama_bekerja" style="border: 1px solid black; border-left: none; border-radius: 0;">Tahun</span>
                                            </div>
                                            @error('lama_bekerja')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li class="status">
                                        <div class="form-group mb-2">
                                            <strong>Jabatan terakhir? <i class="text-danger">*</i></strong>
                                            <input type="text" class="form-control" placeholder="Staff acounting" name="jabatan_terakhir" value="{{session('jabatan_terakhir')}}">
                                        </div>
                                    </li>
                                    <li class="status">
                                        <div class="form-group mb-2">
                                            <strong>Gaji terakhir? <i class="text-danger">*</i></strong>
                                            <div class="input-group" style="flex-wrap: nowrap;">
                                                <span class="input-group-text" id="gaji_terakhir" style="border: 1px solid black; border-right: none; border-radius: 0;">Rp</span>
                                                <input type="number" class="form-control" name="gaji_terakhir" style="border: 1px solid black;" placeholder="5000000" aria-label="Umur" aria-describedby="gaji_terakhir">
                                            </div>
                                            @error('gaji_terakhir')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group mb-2">
                                            <form id="form1" name="form1" method="post" action="">
                                                <strong>Upload CV Anda <i class="text-danger">*</i></strong>
                                                <input class="form-control" type="file" name="cv" accept="application/pdf">
                                                @error('cv')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </form>
                                        </div>
                                    </li> 
                                    <br>
                                    <p class="m-0 pl-4 pb-2"><b>Soal</b><b class="text-danger"> *</b></p>
                                    <ol start="1" type="1">
                                        <li>Four Kids,Oliver,Rachel,Sarah,and Todd,were playing upstairs when
                                            you heard a loud crash.you ran to the room and found
                                            a broken vase on the floor.when you questioned the kids on who broke
                                            the vase,they said: <br> "it wasn't me!"screamed oliver <br>
                                            "it was Oliver!"yalled Rachel <br>"No,it was Rachel,"blamed Sarah
                                            <br>"Rachel is a liar,"said Todd <br>Patrick,the babysitter who
                                            liked logic puzzles,told you that only one of them was telling the
                                            truth.Which of the kids broke the vase?
                                        </li>
                                        <br>
                                        <ol start="1" type="a">
                                            <i>
                                                <li>
                                                    <div class="form-group mb-2 row align-items-center">
                                                        <label for="pilihan-1" class="col-sm-4 col-form-label">Oliver</label>
                                                        <div class="col-sm-2">
                                                            <input type="radio" name="nilai_soal" id="pilihan-1" value="a" {{ session('nilai_soal') === 'a' ? 'checked' : '' }}>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group mb-2 row align-items-center">
                                                        <label for="pilihan-2" class="col-sm-4 col-form-label">Rachel</label>
                                                        <div class="col-sm-2">
                                                            <input type="radio" name="nilai_soal" id="pilihan-2" value="b" {{ session('nilai_soal') === 'b' ? 'checked' : '' }}>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group mb-2 row align-items-center">
                                                        <label for="pilihan-3" class="col-sm-4 col-form-label">Sarah</label>
                                                        <div class="col-sm-2">
                                                            <input type="radio" name="nilai_soal" id="pilihan-3" value="c" {{ session('nilai_soal') === 'c' ? 'checked' : '' }}>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group mb-2 row align-items-center">
                                                        <label for="pilihan-4" class="col-sm-4 col-form-label">Tod</label>
                                                        <div class="col-sm-2">
                                                            <input type="radio" name="nilai_soal" id="pilihan-4" value="d" {{ session('nilai_soal') === 'd' ? 'checked' : '' }}>
                                                        </div>
                                                    </div>
                                                </li>
                                            </i>
                                        </ol>
                                    </ol>
                                    <br>
                                </ul>
                                <div class="preview-import pull-left">

                                    <!-- aku coba tambah dua div dibawah ini -->
                                </div>
                            </div>
                        </div> <!-- end .candidate-reg-form -->

                    </div> <!-- end .9col grid layout -->

                </div> <!-- end .row -->
                <center>
                    <div class="save-cancel-button ml20 mt20">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="#" class="btn btn-danger">Cancel</a>
                    </div> <!-- end .save-cancel-button -->
                </center>
        </form>

    </div> <!-- end .page-content -->

    <footer id="footer">

    </footer> <!-- end #footer -->

</div> <!-- end #main-wrapper -->

@endsection
@push('scripts')
<script>
    hideStatusKerja();
    function hideStatusKerja() {
        var statusKerja = $("#statusKerja").val();
        if(statusKerja == "belum") {
            $(".status").hide();
        } else {
            $(".status").show();
        }
    }
</script>
<script>
    const previewImage = e => {
        const reader = new FileReader();
        reader.readAsDataURL(e.target.files[0]);
        reader.onload = () => {
            const preview = document.getElementById('preview');
            preview.src = reader.result;
        };
    };
</script>
<script>
    var i = 1;
    $('#addSkill').click(function () {
        i++;
        var skill = $("#skill").val();
        if (skill) {
            $('#listSkill').append('<tr id="row' + i + ' mt5" class="dynamic-added row' + i +
                '"><td><input type="text" value="' + skill +
                '" name="skill[]" placeholder="Skill" class="form-control name_list"  /></td><td><button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            $("#skill").val("");
        } else {
            alert('Pilih Skill terlebih dahulu');
        }
    });

    $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('.row' + button_id).remove();
    });
</script>
@if(session('error'))
<script>
    Swal.fire(
        'Error!',
        '{{session('error')}}',
        'error'
    )
</script>
@endif
@if ($errors->any())
    <script>
        Swal.fire(
        'Error!',
        'Tolong lengkapi dan check kembali data yang anda isi.',
        'error'
    )
    </script>
@endif
@endpush