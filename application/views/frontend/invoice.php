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
	<link rel="stylesheet" href="<?= base_url('frontend') ?>/sweetalert2/dist/sweetalert2.css">
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

	<!-- Keterangan Logo ------->

	<!-- Investment Plan single -->
	<div class="me-investment-single me-padder-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<h3 class="text-center">Invoice</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Tgl Pemesanan</th>
								<th>Kode</th>
								<th>Member</th>
								<th>Status</th>
								<th>Total Bayar</th>
								<th>Bukti Bayar</th>
								<th>Tanggal Bayar</th>
								<th>Tanggal Konfirmasi</th>
								<th>Status Pembayaran</th>
								<th>BANK</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($invoice as $row) : ?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $row->tanggal_pemesanan ?></td>
									<td><?= $row->kode_pemesanan ?></td>
									<td><?= $row->nama ?></td>
									<td><?= $row->status_pemesanan ?></td>
									<td><?= $row->total_bayar ?></td>
									<td><?= $row->bukti_bayar == NULL ? '<span class="label bg-red">' . $row->status_pembayaran . '</span>' : '<a href="' . base_url('assets/bukti_bayar/' . $row->bukti_bayar) . '" target="_blank"><img src="' . base_url('assets/bukti_bayar/' . $row->bukti_bayar) . '" width="60px" alt=""></a>' ?></td>
									<td><?= $row->tanggal_bayar == NULL ? '<span class="label bg-red">' . $row->status_pembayaran . '</span>' : $row->tanggal_bayar ?></td>
									<td><?= $row->tanggal_konfirmasi == NULL ? '<span  class="label bg-red">' . $row->status_pembayaran . '</span>' : $row->tanggal_konfirmasi ?></td>
									<td><span data-status="<?= $row->status_pembayaran ?>" data-id="<?= $row->id_pembayaran ?>" style="cursor: pointer;" class="label bg-blue change-status"><?= $row->status_pembayaran ?></span></td>
									<td><?= $row->nama_bank ?></td>
									<td>
										<a href="<?= site_url('account/view_invoice/' . $row->id_pembayaran) ?>" class="btn btn-primary btn-sm">Lihat</a>

									</td>
								</tr>
							<?php $no++;
							endforeach; ?>
						</tbody>
					</table>
				</div>
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

	<script src="<?= base_url('frontend') ?>/sweetalert2/dist/sweetalert2.all.min.js"></script>

</body>

</html>
