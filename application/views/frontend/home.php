<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Redbox - Creative Agency</title>
	<meta name="description" content="">
	<meta name="keywords" content="	advisor, analytical, audit, broker, brokerage, business, company, consulting, currency, exchange, finance, financial, insurance, modern, trader">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend') ?>/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend') ?>/css/font.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend') ?>/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend') ?>/css/style.css">
	<link rel="icon" type="image/png" href="<?= base_url('frontend') ?>/images/fav.png" />
</head>


<body>
	<div class="me-main-wraper">
		<div class="me-header-fix">
			<!-- top header -->
			<?php
			include "partials/header.php";
			?>
		</div>
		<!-- banner -->
		<div class="me-banner-three">
			<div class="container">
				<img src="<?= base_url('frontend') ?>/images/shape-three.png" alt="image" class="img-fluid me-shape-three">
				<img src="<?= base_url('frontend') ?>/images/shape-four.png" alt="image" class="img-fluid me-shape-four">
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="me-banner-three-text">
							<h2>Hallo Kami.</h2>
							<h1>Redbox Creative Agency</h1>
							<p><b>Sebagai penyedia jasa desain kreatif,</b> kami sangat memahami bahwa mengkomunikasikan sebuah bisnis beserta ide dan produk didalamnya adalah hal yang menantang. Setiap bisnis saat ini sedang bersaing dengan ratusan merk dan penawaran setiap harinya hanya untuk mendapatkan perhatian dari satu calon pelanggan.</p>
							<a href="javascript:;" class="me-btn" data-toggle="modal" data-target="#meLogin">Pesan Sekarang</a>
							<a href="contact.html" class="me-btn">Kontak Kita</a>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="me-banner-three-img">
							<img src="<?= base_url('frontend') ?>/images/graphic.png" alt="image" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- service two -->
		<div class="me-service-three">
			<div class="container">
				<div class="me-heading2">
					<h4></h4>
					<h1>Layanan Redbox</h1>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="me-service-three-box">
							<img src="<?= base_url('frontend') ?>/images/Logo.png" alt="image" class="img-fluid">
							<h4>Logo Design</h4>
							<p>Kami Membantu untuk Brand, Startup, Umkm, dalam membangun sebuah Brand Identy salah satunya Logo</p>
							<a href="logo-design.php" class="me-service-more">
								<span>Pesan Sekarang</span>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="me-service-three-box">
							<img src="<?= base_url('frontend') ?>/images/Sosial.png" alt="image" class="img-fluid">
							<h4>Social Media Managament</h4>
							<p>Pengelolaan Sosial penting juga dalam mengembang sebuah brand, karena itu menjadi wadah iklan sebuah instansi</p>
							<a href="social-media-management.php" class="me-service-more">
								<span>Pesan Sekarang</span>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="me-service-three-box">
							<img src="<?= base_url('frontend') ?>/images/Digital.png" alt="image" class="img-fluid">
							<h4>Digital Marketing</h4>
							<p>Saat ini banyak orang sudah mengakses internet maka itu Digital Marketing Penting dalam mengiklan product saat ini</p>
							<a href="digital-marketing" class="me-service-more">
								<span>Pesan Sekarang</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About two -->
		<div class="me-about-two me-padder-top-less me-padder-bottom">
			<div class="container">
				<div class="me-heading2">
					<h4></h4>
					<h1>Tentang Kami</h1>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="me-about-two-box">
							<div class="me-about-two-shape">
								<img src="<?= base_url('frontend') ?>/images/About.png" alt="image" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="me-about-two-text">
							<h3><b>Perusahaan Creative Digital Agency</b></h3>
							<p>Redbox adalah Creative Digital Agency yang sangat kompleks dengan beragam pengalaman, dan demi mencapai pengertian sempurna dari sebuah Digital Agency, semua personality harus dipecah secara lugas namun detail. Kami bergerak dalam pembuatan Logo, Sosial Media Management, Dan Digital Marketing.</p>
							<h4>Mengapa Memilih Kami</h4>
							<ul>
								<li>Kami akan menjamin anda dengan proses desain yang cepat dan tepat waktu.</li>
								<li>Proses transaksi order aman dengan itu kami memiliki ratusan testimoni.</li>
								<li>Hasil desain yang cepat tentunya tidak mengurangi kualitas dalam desain tersebut,</li>
							</ul>
							<a href="about.html" class="me-btn">Kontak Kami</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Partners -->
		<div class="me-partners me-padder-bottom">
			<div class="container">
				<div class="me-heading2">
					<h4></h4>
					<h1>Portofolio Kami</h1>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="me-partners-logo">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo1.png" alt="image" /></a>
									</div>
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo2.png" alt="image" /></a>
									</div>
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo3.png" alt="image" /></a>
									</div>
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo4.png" alt="image" /></a>
									</div>
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo5.png" alt="image" /></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="me-partners-logo">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo1.png" alt="image" /></a>
									</div>
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo2.png" alt="image" /></a>
									</div>
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo3.png" alt="image" /></a>
									</div>
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo4.png" alt="image" /></a>
									</div>
									<div class="swiper-slide">
										<a href="javascript:;"><img src="<?= base_url('frontend') ?>/images/portofolio/Logo5.png" alt="image" /></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="team-modal-one" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<button type="button" class="close me-team-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="me-modal-body">
						<div class="me-modal-team-img">
							<img src="<?= base_url('frontend') ?>/images/team11.jpg" class="img-fluid" alt="image" />
							<p class="me-team-designation">Team leader</p>
						</div>
						<div class="me-modal-team-data">
							<h4>John doe</h4>
							<p>Team leader</p>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
							<ul>
								<li>
									<h4>Skills</h4>
								</li>
								<li>Web Designer</li>
								<li>HTML</li>
								<li>PHP</li>
								<li>Larval</li>
								<li>.NET</li>
								<li>WordPress</li>
								<li>Phptoshop</li>
								<li>Android</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="team-modal-two" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<button type="button" class="close me-team-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="me-modal-body">
						<div class="me-modal-team-img">
							<img src="<?= base_url('frontend') ?>/images/team22.jpg" class="img-fluid" alt="image" />
							<p class="me-team-designation">Team leader</p>
						</div>
						<div class="me-modal-team-data">
							<h4>Nancy Martin</h4>
							<p>Team leader</p>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
							<ul>
								<li>
									<h4>Skills</h4>
								</li>
								<li>Web Designer</li>
								<li>HTML</li>
								<li>PHP</li>
								<li>Larval</li>
								<li>.NET</li>
								<li>WordPress</li>
								<li>Phptoshop</li>
								<li>Android</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="team-modal-three" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<button type="button" class="close me-team-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="me-modal-body">
						<div class="me-modal-team-img">
							<img src="<?= base_url('frontend') ?>/images/team33.jpg" class="img-fluid" alt="image" />
							<p class="me-team-designation">Team leader</p>
						</div>
						<div class="me-modal-team-data">
							<h4>Maurice Victor</h4>
							<p>Team leader</p>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
							<ul>
								<li>
									<h4>Skills</h4>
								</li>
								<li>Web Designer</li>
								<li>HTML</li>
								<li>PHP</li>
								<li>Larval</li>
								<li>.NET</li>
								<li>WordPress</li>
								<li>Phptoshop</li>
								<li>Android</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="team-modal-four" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<button type="button" class="close me-team-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="me-modal-body">
						<div class="me-modal-team-img">
							<img src="<?= base_url('frontend') ?>/images/team44.jpg" class="img-fluid" alt="image" />
							<p class="me-team-designation">Team leader</p>
						</div>
						<div class="me-modal-team-data">
							<h4>Joolie Desuza</h4>
							<p>Team leader</p>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
							<ul>
								<li>
									<h4>Skills</h4>
								</li>
								<li>Web Designer</li>
								<li>HTML</li>
								<li>PHP</li>
								<li>Larval</li>
								<li>.NET</li>
								<li>WordPress</li>
								<li>Phptoshop</li>
								<li>Android</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial -->
	<div class="me-testimonial-two me-padder-top-less me-padder-bottom">
		<div class="container">
			<div class="me-heading2">
				<h4></h4>
				<h1>Testimoni</h1>
			</div>
			<div class="me-testimonial-two-main">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="me-testimonial-two-box">
								<div class="me-testimonial-two-img">
									<img src="https://via.placeholder.com/260x260" alt="image" class="img-fluid" />
									<h3>John Doe</h3>
									<p>Web designer</p>
								</div>
								<div class="me-testimonial-two-data">
									<h2>Client Rating</h2>
									<span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
									<div class="me-testimonial-client-says">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.966 25.966">
											<g>
												<path d="M5.566,11.965c0-3.34,0-3.897,2.782-3.897V1.852C1.857,1.852,0,6.216,0,13.913v10.2h12.06v-10.2H5.566V11.965z" />
												<path d="M19.477,13.913v-1.948c0-3.34,0-3.897,2.782-3.897V1.852c-6.491,0-8.347,4.364-8.347,12.061v10.2h12.054v-10.2H19.477z" />
											</g>
										</svg>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="me-testimonial-two-box">
								<div class="me-testimonial-two-img">
									<img src="https://via.placeholder.com/260x260" alt="image" class="img-fluid" />
									<h3>Nancy Martin</h3>
									<p>Web designer</p>
								</div>
								<div class="me-testimonial-two-data">
									<h2>Client Rating</h2>
									<span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
									<div class="me-testimonial-client-says">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.966 25.966">
											<g>
												<path d="M5.566,11.965c0-3.34,0-3.897,2.782-3.897V1.852C1.857,1.852,0,6.216,0,13.913v10.2h12.06v-10.2H5.566V11.965z" />
												<path d="M19.477,13.913v-1.948c0-3.34,0-3.897,2.782-3.897V1.852c-6.491,0-8.347,4.364-8.347,12.061v10.2h12.054v-10.2H19.477z" />
											</g>
										</svg>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="me-testimonial-two-box">
								<div class="me-testimonial-two-img">
									<img src="https://via.placeholder.com/260x260" alt="image" class="img-fluid" />
									<h3>Joolie Desuza</h3>
									<p>Web designer</p>
								</div>
								<div class="me-testimonial-two-data">
									<h2>Client Rating</h2>
									<span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
									<div class="me-testimonial-client-says">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.966 25.966">
											<g>
												<path d="M5.566,11.965c0-3.34,0-3.897,2.782-3.897V1.852C1.857,1.852,0,6.216,0,13.913v10.2h12.06v-10.2H5.566V11.965z" />
												<path d="M19.477,13.913v-1.948c0-3.34,0-3.897,2.782-3.897V1.852c-6.491,0-8.347,4.364-8.347,12.061v10.2h12.054v-10.2H19.477z" />
											</g>
										</svg>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
				</div>
				<!-- Add Arrows -->
				<div class="me-tesimonial-nav-two">
					<div class="swiper-button-next me-testimonial-nav-box"></div>
					<div class="swiper-button-prev me-testimonial-nav-box"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Safety -->
	<div class="me-safety me-padder-top-less me-padder-bottom">
		<div class="container">
			<div class="me-heading2">
				<h4></h4>
				<h1>Pertanyaan yang Sering Diajukan</h1>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="me-safety-img">
						<img src="<?= base_url('frontend') ?>/images/Hello.png" alt="image" class="img-fluid">
					</div>
				</div>
				<div class="col-md-6">
					<div class="me-faq-box">
						<div class="accordion" id="accordionExample">
							<div class="me-faq-list">
								<p class="me-faq-head me-faq-open" data-toggle="collapse" data-target="#me-faq-one">
									Lorem ipsum dolor sit amet, consectetur<button><span></span></button></p>
								<div id="me-faq-one" class="collapse show" data-parent="#accordionExample">
									<div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
									</div>
								</div>
							</div>
							<div class="me-faq-list">
								<p class="me-faq-head" data-toggle="collapse" data-target="#me-faq-two">Lorem ipsum dolor sit amet, consectetur adipiscing<button><span></span></button></p>
								<div id="me-faq-two" class="collapse" data-parent="#accordionExample">
									<div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
									</div>
								</div>
							</div>
							<div class="me-faq-list">
								<p class="me-faq-head" data-toggle="collapse" data-target="#me-faq-three">
									Lorem ipsum dolor sit amet, consectetur<button><span></span></button></p>
								<div id="me-faq-three" class="collapse" data-parent="#accordionExample">
									<div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
									</div>
								</div>
							</div>
							<div class="me-faq-list">
								<p class="me-faq-head" data-toggle="collapse" data-target="#me-faq-four">
									Lorem ipsum dolor sit amet, consectetur<button><span></span></button></p>
								<div id="me-faq-four" class="collapse" data-parent="#accordionExample">
									<div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<?php
	include "partials/footer.php"
	?>
	<!-- Login Modal -->
	<div class="modal fade me-login-model" id="meLogin">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<button type="button" class="close me-team-close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div class="modal-body">
					<h1 class="me-login-title">Login</h1>
					<form>
						<div class="me-login-form">
							<input type="text" placeholder="Username" />
							<input type="password" placeholder="Password" />
							<div class="me-remember">
								<label>Remember Me
									<input type="checkbox">
									<span class="s_checkbox"></span>
								</label>
								<a href="javascript:;" class="me-forgot-password" data-toggle="modal" data-target="#meforgot" data-dismiss="modal" aria-label="Close">Forgot Password ?</a>
							</div>
							<div class="me-login-btn">
								<button class="me-btn">Login</button>
								<p>Don't have an account? <a href="javascript:;" data-toggle="modal" data-target="#meSignup" data-dismiss="modal" aria-label="Close">Sign up</a></p>
							</div>
						</div>
					</form>
					<div class="me-login-with-social">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Signup Modal -->
	<div class="modal fade me-login-model" id="meSignup">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<button type="button" class="close me-team-close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div class="modal-body">
					<h1 class="me-login-title">Sign Up</h1>
					<form>
						<div class="me-login-form">
							<input type="text" placeholder="Username" />
							<input type="text" placeholder="Email" />
							<input type="password" placeholder="Password" />
							<input type="password" placeholder="Confirm Password" />

							<div class="me-login-btn">
								<button class="me-btn">Sign up</button>
								<p>Already have an account? <a href="javascript:;" data-toggle="modal" data-target="#meLogin" data-dismiss="modal" aria-label="Close">Login</a></p>
							</div>
						</div>
					</form>
					<div class="me-login-with-social">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Forgot Modal -->
	<div class="modal fade me-login-model" id="meforgot">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<button type="button" class="close me-team-close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div class="modal-body">
					<h1 class="me-login-title">Forgot</h1>
					<form>
						<div class="me-login-form">
							<input type="text" placeholder="Username" />
							<div class="me-login-btn">
								<button class="me-btn">Forgot</button>
								<p>Don't have an account? <a href="javascript:;" data-toggle="modal" data-target="#meSignup" data-dismiss="modal" aria-label="Close">Sign up</a></p>
							</div>
						</div>
					</form>
					<div class="me-login-with-social">
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="<?= base_url('frontend') ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('frontend') ?>/js/bootstrap.min.js"></script>
	<script src="<?= base_url('frontend') ?>/js/swiper.min.js"></script>
	<script src="<?= base_url('frontend') ?>/js/SmoothScroll.min.js"></script>
	<script src="<?= base_url('frontend') ?>/js/ui_range_slider.js"></script>
	<script src="<?= base_url('frontend') ?>/js/canvasjs.js"></script>
	<script src="<?= base_url('frontend') ?>/js/custom.js"></script>
</body>

</html>
