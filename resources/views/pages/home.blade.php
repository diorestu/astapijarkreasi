@extends('layout.index')

@section('title')
    Halaman Utama
@endsection

@section('content')
    <div class="page-content bg-white">
		<!-- Slider -->
		<div class="banner-three" style="background-image: url(images/background/bg13.png), linear-gradient(#42a5f5, #1976d2);">
			<div class="container">
				<div class="banner-inner">
					<div class="row align-items-center">
						<div class="col-md-6">

							<div class="banner-content text-white">
								<h1 data-wow-delay="1s" data-wow-duration="3s" class="wow fadeInUp m-b20">Ciptakan Teknologi Dalam Genggaman</h1>
								<p  data-wow-delay="1.5s" data-wow-duration="3s" class="wow fadeInUp m-b30">Kami menawarkan solusi berbasis Teknologi Informasi yang dapat membantu segala proses bisnis anda</p>
								<a  data-wow-delay="2s" data-wow-duration="3s" href="about-us-3.html" class="wow fadeInUp  btn btn-corner gradient btn-primary">Mulai Bergabung</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="dz-media wow fadeIn" data-wow-delay="1s" data-wow-duration="3s">
								<img src="images/main-slider/slider3/img5.png" class="move-1" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Services -->
		<section class="content-inner">
			<div class="container">
				<div class="section-head style-3 text-center mb-4">
					<h2 class="title">Layanan Kami</h2>
					<div class="dlab-separator style-2 bg-primary"></div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="min-height: 250px; ">
						<div class="icon-bx-wraper style-5 box-hover text-center m-b30">
							<div class="icon-bx"> 
								<span class="icon-cell"><i class="flaticon-office"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dlab-title m-b15">Web Desain</h4>
								<p class="m-b20">Desain menjadi salah satu hal yang diperlukan untuk menarik konsumen. Bagian visual ini harus mencerminkan segala identitas bisnis yang Anda miliki.</p>
								<p class="m-b20"> Kami melayani pembuatan desain aplikasi,
									website dan produk bisnis anda sehingga bisa lebih menarik konsumen.</p>
								<a href="services-3.html" class="btn btn-outline-primary"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s" style="min-height: 250px;">
						<div class="icon-bx-wraper style-5 box-hover active text-center m-b30">
							<div class="icon-bx"> 
								<span class="icon-cell"><i class="flaticon-coding"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dlab-title m-b15">Web & Aplikasi Mobile</h4>
								<p class="m-b20">Perkembangan teknologi informasi yang semakin pesat membuat pertukaran informasi yang lebih cepat dan aman.
								</p>
								<p>Kami menawarkan pekerjaan pengembangan aplikasi baik dalam bentuk website ataupun mobile yang bisa dijalankan di smartphone Anda.</p>
								<a href="services-3.html" class="btn btn-outline-primary"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s" style="min-height: 250px;">
						<div class="icon-bx-wraper style-5 box-hover text-center m-b30">
							<div class="icon-bx"> 
								<span class="icon-cell"><i class="flaticon-laptop"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dlab-title m-b15">Sistem Informasi</h4>
								<p class="m-b20">Sistem informasi menjadi penting dalam pengelolaan bisnis Anda mulai dari skala kecil hingga mengengah keatas.
								</p>
								<p>
									Kami menawarkan pengembangan sistem informasi yang dapat membantu seluruh proses bisnis anda menjadi lebih mudah dan rapi.
								</p>
								<a href="services-3.html" class="btn btn-outline-primary"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- About Us -->
		<section class="content-inner bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 m-b30">
						<div class="dz-media">
							<img src="{{ asset('images/main-slider/slider3/img2.png') }}" class="move-2" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="section-head style-3 mb-4">
							<h2 class="title">Kenapa Memilih Kami ?</h2>
							<div class="dlab-separator style-2 bg-primary"></div>
						</div>
						<p>Kami mengelola sistem informasi untuk beberapa Dinas Pemerintahan serta BUMN dan Perusahaan Swasta lainnya.</p>
						<p class="m-b30">Pengembangan aplikasi dan sistem informasi juga mengacu pada proses bisnis anda dan mudah untuk dioperasikan.</p>
						<div class="row">
							<div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" >
								<div class="dlab-content-bx style-2 text-center">
									<div class="icon-content">
										<h2 class="counter m-b0">21</h2>
										<span class="title">Klien Saat Ini</span>
									</div>
								</div>
							</div>
							<div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="dlab-content-bx style-2 text-center">
									<div class="icon-content">
										<h2 class="counter m-b0">14</h2>
										<span class="title">Web dan Aplikasi</span>
									</div>
								</div>
							</div>
							<div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="dlab-content-bx style-2 text-center">
									<div class="icon-content">
										<h2 class="counter m-b0">9</h2>
										<span class="title">Wilayah Kerja</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Our Fetures -->
		<section class="content-inner bg-white">
			<div class="container">
				<div class="section-head style-3 text-center">
					<h2 class="title">Fitur Kami</h2>
					<div class="dlab-separator style-2 bg-primary"></div>
				</div>
				<div class="row align-items-center about-wraper-2">
					<div class="col-lg-4">
						<div class="row">
							<div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<div class="icon-bx-wraper left m-b50 icon-up">
									<div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"> 
										<a href="javascript:void(0);" class="icon-cell text-white"><i class="flaticon-idea"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Analisis dan Gagasan Ide</h4>
										<p>Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper left m-b50 icon-up">
									<div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"> 
										<a href="javascript:void(0);" class="icon-cell text-white"><i class="flaticon-vector"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Perencanaan dan Desain</h4>
										<p>Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="dz-media text-center m-b30">
							<img src="images/about/img7.png" class="move-1" alt="">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
							<div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<div class="icon-bx-wraper left m-b50 icon-up">
									<div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"> 
										<a href="javascript:void(0);" class="icon-cell text-white"><i class="flaticon-coding"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Proses Pengembangan Sistem</h4>
										<p>Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper left m-b50 icon-up">
									<div class="icon-bx-sm radius gradient-sec shadow-primary m-b20"> 
										<a href="javascript:void(0);" class="icon-cell text-white"><i class="flaticon-rocket"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Pengujian dan Evaluasi Sistem</h4>
										<p>Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Projects -->
		<section class="content-inner bg-gray">
			<div class="container">
				<div class="section-head style-3 text-center">
					<h2 class="title">Produk Kami</h2>
					<div class="dlab-separator style-2 bg-primary"></div>
				</div>
				
				{{-- Filter Section --}}
				<div class="site-filters style-3 clearfix center m-b40">
					<ul class="filters" data-toggle="buttons">
						<li class="btn active">
							<input type="radio">
							<a href="javascript:void(0);">All</a> 
						</li>
						<li data-filter=".web_design" class="btn">
							<input type="radio">
							<a href="javascript:void(0);">Web Design</a> 
						</li>
						<li data-filter=".web_development" class="btn">
							<input type="radio">
							<a href="javascript:void(0);">Web Development</a> 
						</li>
						<li data-filter=".branding" class="btn">
							<input type="radio">
							<a href="javascript:void(0);">Branding</a> 
						</li>
						<li data-filter=".mobile_app" class="btn">
							<input type="radio">
							<a href="javascript:void(0);">Mobile App</a> 
						</li>
						<li data-filter=".seo" class="btn">
							<input type="radio">
							<a href="javascript:void(0);">SEO</a> 
						</li>
					</ul>
				</div>
				{{-- Filter Section --}}

				<div class="clearfix">
					<ul id="masonry" class="row">
						<li class="card-container col-lg-3 col-md-6 web_development seo">
							<div class="dlab-box dlab-overlay-box style-3 m-b30">
								<div class="dlab-media dlab-img-overlay1">
									<img src="images/projects/project-1/pic2.jpg" alt="">
								</div>
								<div class="dlab-info">
									<h5 class="title"><a href="javascript:void(0);">Software </a></h5>
									<p class="post-author">By <a href="javascript:void(0);">Jhone Doe</a></p>
								</div>
							</div>
						</li>
						<li class="card-container col-lg-3 col-md-6 web_development seo">
							<div class="dlab-box dlab-overlay-box style-3 m-b30">
								<div class="dlab-media dlab-img-overlay1">
									<img src="images/projects/project-1/pic3.jpg" alt="">
								</div>
								<div class="dlab-info">
									<h5 class="title"><a href="javascript:void(0);">Software</a></h5>
									<p class="post-author">By <a href="javascript:void(0);">Jhone Doe</a></p>
								</div>
							</div>
						</li>
						<li class="card-container col-lg-6 web_design">
							<div class="dlab-box dlab-overlay-box style-3 m-b30">
								<div class="dlab-media dlab-img-overlay1">
									<img src="images/projects/project-1/pic1.jpg" alt="">
								</div>
								<div class="dlab-info">
									<h5 class="title"><a href="javascript:void(0);">Software Landing Page Design</a></h5>
									<p class="post-author">By <a href="javascript:void(0);">Jhone Doe</a></p>
								</div>
							</div>
						</li>
						<li class="card-container col-lg-6 web_development web_design">
							<div class="dlab-box dlab-overlay-box style-3 m-b30">
								<div class="dlab-media dlab-img-overlay1">
									<img src="images/projects/project-1/pic6.jpg" alt="">
								</div>
								<div class="dlab-info">
									<h5 class="title"><a href="javascript:void(0);">Software Landing Page Design</a></h5>
									<p class="post-author">By <a href="javascript:void(0);">Jhone Doe</a></p>
								</div>
							</div>
						</li>
						<li class="card-container col-lg-3 col-md-6 mobile_app branding">
							<div class="dlab-box dlab-overlay-box style-3 m-b30">
								<div class="dlab-media dlab-img-overlay1">
									<img src="images/projects/project-1/pic4.jpg" alt="">
								</div>
								<div class="dlab-info">
									<h5 class="title"><a href="javascript:void(0);">Software </a></h5>
									<p class="post-author">By <a href="javascript:void(0);">Jhone Doe</a></p>
								</div>
							</div>
						</li>
						<li class="card-container col-lg-3 col-md-6 mobile_app branding">
							<div class="dlab-box dlab-overlay-box style-3 m-b30">
								<div class="dlab-media dlab-img-overlay1">
									<img src="images/projects/project-1/pic5.jpg" alt="">
								</div>
								<div class="dlab-info">
									<h5 class="title"><a href="javascript:void(0);">Software</a></h5>
									<p class="post-author">By <a href="javascript:void(0);">Jhone Doe</a></p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		
		<!-- Newsletter -->
		<section class="content-inner-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" style="background-image: url(images/background/bg12.png), var(--gradient-sec); background-size: cover, 200%; background-repeat: no-repeat;">
			<div class="container">
				<div class="row align-items-center subscribe-wraper-1">
					<div class="col-lg-7 col-md-6">
						<h2 class="text-white title m-b30">Dapatkan promo terbaru dengan berlangganan yuk!</h2>
					</div>
					<div class="col-lg-5 col-md-6">
						<div class="dlab-subscribe style-3 max-w500">
							<form class="dzSubscribe" action="https://samar.dexignzone.com/xhtml/script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg"></div>
								<div class="form-group m-b30">
									<div class="input-group mb-0">
										<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Email Address">
										<div class="input-group-addon">
											<button name="submit" value="Submit" type="submit" class="btn btn-corner gradient shadow btn-primary">Subscribe Now</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
			
		<!-- Pricing Table -->
		<section class="content-inner">
			<div class="container">
				<div class="section-head style-3 text-center">
					<h2 class="title">Harga Layanan</h2>
					<div class="dlab-separator style-2 bg-primary"></div>
				</div>
				<div class="pricingtable-row">
					<div class="row">
						<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="pricingtable-wrapper style-3 m-b30">
								<div class="pricingtable-inner">
									<div class="pricingtable-head">
										<div class="pricingtable-title">
											<h3>Basic Plan</h3>
										</div>
										<div class="icon-cell">
											<img src="images/pricingtable/icon1.png" alt="">
										</div>
									</div>
									<div class="pricingtable-price"> 
										<h2 class="pricingtable-bx">$49<small class="pricingtable-type">/Month</small></h2>
									</div>
									<ul class="pricingtable-features">
										<li>Graphic Design </li>
										<li>Web Design</li>
										<li>UI/UX</li>
										<li>HTML/CSS</li>
										<li>SEO Marketing</li>
										<li>Business Analysis</li>
									</ul>
									<div class="pricingtable-footer"> 
										<a href="pricing-table-3.html" class="btn btn-corner btn-outline-primary">Start Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
							<div class="pricingtable-wrapper style-3 active m-b30">
								<div class="pricingtable-inner">
									<div class="pricingtable-head">
										<div class="pricingtable-title">
											<h3>Standart Plan</h3>
										</div>
										<div class="icon-cell">
											<img src="images/pricingtable/icon2.png" alt="">
										</div>
									</div>
									<div class="pricingtable-price"> 
										<h2 class="pricingtable-bx">$99<small class="pricingtable-type">/Month</small></h2>
									</div>
									<ul class="pricingtable-features">
										<li>Graphic Design </li>
										<li>Web Design</li>
										<li>UI/UX</li>
										<li>HTML/CSS</li>
										<li>SEO Marketing</li>
										<li>Business Analysis</li>
									</ul>
									<div class="pricingtable-footer"> 
										<a href="pricing-table-3.html" class="btn btn-corner btn-outline-primary">Start Now</a> 
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
							<div class="pricingtable-wrapper style-3 m-b30">
								<div class="pricingtable-inner">
									<div class="pricingtable-head">
										<div class="pricingtable-title">
											<h3>Premium Plan</h3>
										</div>
										<div class="icon-cell">
											<img src="images/pricingtable/icon3.png" alt="">
										</div>
									</div>
									<div class="pricingtable-price"> 
										<h2 class="pricingtable-bx">$149<small class="pricingtable-type">/Month</small></h2>
									</div>
									<ul class="pricingtable-features">
										<li>Graphic Design </li>
										<li>Web Design</li>
										<li>UI/UX</li>
										<li>HTML/CSS</li>
										<li>SEO Marketing</li>
										<li>Business Analysis</li>
									</ul>
									<div class="pricingtable-footer"> 
										<a href="pricing-table-3.html" class="btn btn-corner btn-outline-primary">Start Now</a> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Testimonials -->
		<section class="content-inner-1 bg-gray" style="background-image: url(images/background/bg3.png);">
			<div class="container">
				<div class="section-head style-3 text-center">
					<h2 class="title">Testimonial Klien</h2>
					<div class="dlab-separator style-2 bg-primary"></div>
				</div>
				<div class="testimonials-carousel2 owl-carousel owl-theme owl-none owl-theme owl-dots-primary-full wow fadeIn">
					<div class="item">
						<div class="testimonial-2">
							<div class="testimonial-pic quote-right">
								<img src="images/testimonials/pic1.jpg" alt="">
							</div>
							<div class="testimonial-text">
								<p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
								<strong class="testimonial-name">Cak Dikin</strong> 
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-2">
							<div class="testimonial-pic quote-right">
								<img src="images/testimonials/pic3.jpg" alt="">
							</div>
							<div class="testimonial-text">
								<p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
								<strong class="testimonial-name">Cak Dikin</strong> 
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-2">
							<div class="testimonial-pic quote-right">
								<img src="images/testimonials/pic3.jpg" alt="">
							</div>
							<div class="testimonial-text">
								<p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
								<strong class="testimonial-name">Cak Dikin</strong> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Clients Logo -->
		<div class="p-tb50 bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
			<div class="container">
				<div class="clients-carousel owl-none owl-carousel">
					<div class="item">
						<div class="clients-logo">
							<img class="logo-main" src="images/logo/logo-blue1.png" alt="">
							<img class="logo-hover" src="images/logo/logo-light1.png" alt="">
						</div>
					</div>
					<div class="item">
						<div class="clients-logo">
							<img class="logo-main" src="images/logo/logo-blue2.png" alt="">
							<img class="logo-hover" src="images/logo/logo-light2.png" alt="">
						</div>
					</div>
					<div class="item">
						<div class="clients-logo">
							<img class="logo-main" src="images/logo/logo-blue3.png" alt="">
							<img class="logo-hover" src="images/logo/logo-light3.png" alt="">
						</div>
					</div>
					<div class="item">
						<div class="clients-logo">
							<img class="logo-main" src="images/logo/logo-blue4.png" alt="">
							<img class="logo-hover" src="images/logo/logo-light4.png" alt="">
						</div>
					</div>
					<div class="item">
						<div class="clients-logo">
							<img class="logo-main" src="images/logo/logo-blue5.png" alt="">
							<img class="logo-hover" src="images/logo/logo-light5.png" alt="">
						</div>
					</div>
					<div class="item">
						<div class="clients-logo">
							<img class="logo-main" src="images/logo/logo-blue6.png" alt="">
							<img class="logo-hover" src="images/logo/logo-light6.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Contact Form -->
		{{-- <section class="content-inner">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="dlab-media">
							<img src="images/about/img8.png" class="move-1" alt="">
						</div>
					</div>
					<div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
						<form class="dlab-form style-1 dzForm" method="POST" action="https://samar.dexignzone.com/xhtml/script/contact.php">
							<div class="section-head style-3">
								<h2 class="title m-t10">Get In Touch With Us</h2>
								<div class="dlab-separator style-2 bg-primary"></div>
							</div>
							<div class="dzFormMsg"></div>
							<input type="hidden" class="form-control" name="dzToDo" value="Contact" >
							<input type="hidden" class="form-control" name="reCaptchaEnable" value="0" >
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group">
										<input name="dzName" type="text" required class="form-control" placeholder="Full Name">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-group">
										<input name="dzEmail" type="text" required class="form-control" placeholder="Email Address">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-group">
										<input name="dzOther[phone]" type="text" required class="form-control" placeholder="Phone No.">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<input name="dzOther[project_title]" type="text" required class="form-control" placeholder="Project Title">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<select name="dzOther[choose_service]" class="form-control" required>
											<option>Choose Service</option>
											<option value="1">Web Development</option>
											<option value="2">Web Design</option>
											<option value="3">Strategy & Research</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-group">
										<textarea class="form-control" required placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<button type="submit" class="btn btn-corner gradient btn-block btn-primary">Submit Now</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section> --}}
		
	</div>
@endsection