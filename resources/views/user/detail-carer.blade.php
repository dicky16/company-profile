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

	<h1 class="text-white akzidenz-condensed-bold about-text-title revealOnScroll" data-animation="fadeInUp">Career</h1>
	<br><br>

	<!-- <div class="container"> -->
		<div class="row d-flex justify-content-center">
			<!-- Content of the page -->
			<article id="content" class="col-xs-12 col-md-8">
				<!-- Post Block of the page -->
				<div class="post-block single-post wow fadeInUp" data-wow-delay="0.4s">
					<div class="post-holder">
						<div class="img-holder">
							<img src="{{ url('assets/user/assets/images/it.jpg') }}" alt="image description">
						</div>
						<time datetime="2011-01-12">Pendaftaran awal 12/03/2021
							akhir
							pendaftaran 21/07/2021</time>
						<h2>Finance (Acounting)</h2>
						<p>Deskripsi:Dibutuhkan orang yang bisa membuat jurnal,membuat laporan
							keuangan dan
							berpengalaman</p>
						<blockquote>
							<p>Persyratan yang dibutuhkan:<br>
								1.D3/S1 Akuntansi<br>
								2.Bisa menggunakan Microsoft office dengan baik dan benar <br>
								3.Bisa membuat jurnal
							</p>
						</blockquote>
						<p>Persiapan yang dibutuhkan: <br>
							1.CV <br>
							2.Link photopolio </br>
							3.Persiapkan mental setelah apply now maka akan mengisi beberapa
							soal <br>
						</p>
						<a href="{{url('form')}}"> <button type="button" class="btn btn-primary btn-lg btn-block">Apply no
								Now</button></a>

					</div>
				</div>
		</div>
	<!-- </div> -->

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

</div>
@endsection