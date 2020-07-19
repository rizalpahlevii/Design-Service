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
						<p><a href="index.html">Service Kami</a><?= $kategori->nama_kategori ?></p>
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
				<?php foreach ($paket as $row) : ?>
					<div class="col-lg-4 col-md-6">
						<div class="me-plans-box">
							<div class="me-plan-header">
								<h1 class="me-plan-title"><?= $row->nama_paket ?></h1>
								<div class="me-plan-price"><?= 'Rp. ' . number_format($row->harga_paket) ?></div>
							</div>
							<div class="me-plan-body">
								<?= $row->keterangan ?>
							</div>
							<div class="me-plan-footer">
								<a href="<?= site_url('order/cart?id_paket=' . $row->id_paket) ?>" class="me-btn">Order <?= $row->nama_paket ?></a>
							</div>
							<div class="me-plan-shape">
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<?php
	include "partials/footer.php"
	?>

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
