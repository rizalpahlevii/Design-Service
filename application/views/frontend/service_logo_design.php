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
			include "partials/header.php"
			?>
		</div>
		<!-- banner -->
		<!-- service two -->
		<!-- About two -->
		<!-- Partners -->
	</div>
	<!-- Testimonial -->
	<br>
	<br>
	<br>
	<br>
	<div class="me-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="me-breadcrumb-box">
						<br>
						<br>
						<h1>Buat Logo Untuk Usahamu Sekarang Juga</h1>
						<p><a href="index.html">Service Kami</a>Logo Design</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Keterangan Logo ------->

	<!-- Investment Plan single -->
	<div class="me-investment-single me-padder-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="me-plans-box">
						<div class="me-plan-header">
							<h1 class="me-plan-title">Lite</h1>
							<div class="me-plan-price">Rp. 300.000</div>
						</div>
						<div class="me-plan-body">
							<h4>Cocok Untuk UMKM</h4>
							<ul>
								<li>1 Pilihan Logo</li>
								<li>2x Revisi</li>
								<li>Max 2 Hari Pengerjaan</li>
								<li>Free Konsultasi</li>
							</ul>
						</div>
						<div class="me-plan-footer">
							<button class="me-btn" data-toggle="modal" data-target="#meLogin">Order Lite</button>
						</div>
						<div class="me-plan-shape">
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="me-plans-box">
						<div class="me-plan-header">
							<h1 class="me-plan-title">Medium</h1>
							<div class="me-plan-price">Rp. 600.000</div>
						</div>
						<div class="me-plan-body">
							<h4>Cocok Untuk UD/CV</h4>
							<ul>
								<li>2 Pilihan Logo</li>
								<li>3x Revisi</li>
								<li>Max 3 Hari Pengerjaan</li>
								<li>Free Desain Kartu Nama</li>
								<li>Free Konsultasi</li>
							</ul>
						</div>
						<div class="me-plan-footer">
							<button class="me-btn" data-toggle="modal" data-target="#meLogin">Order Medium</button>
						</div>
						<div class="me-plan-shape">
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="me-plans-box">
						<div class="me-plan-header">
							<h1 class="me-plan-title">Biz</h1>
							<div class="me-plan-price">Rp. 800.000</div>
						</div>
						<div class="me-plan-body">
							<h4>Cocok Untuk PT</h4>
							<ul>
								<li>3 Pilihan Logo</li>
								<li>3x Revisi</li>
								<li>Max 3 Hari Pengerjaan</li>
								<li>Free Desain Kartu Nama</li>
								<li>Free Desain Kop Surat</li>
								<li>Free Desain Brosur</li>
								<li>Free Konsultasi</li>
							</ul>
						</div>
						<div class="me-plan-footer">
							<button class="me-btn" data-toggle="modal" data-target="#meLogin">Order Biz</button>
						</div>
						<div class="me-plan-shape">
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
