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
			<div class="invoice">
				<div class="col-md-12 mb-5">
					<h3 class="text-center">Invoice <?= $invoice->kode_pemesanan ?></h3>
				</div>
			</div>
			<div class="invoice">
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
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $invoice->tanggal_pemesanan ?></td>
									<td><?= $invoice->kode_pemesanan ?></td>
									<td><?= $invoice->nama ?></td>
									<td><?= $invoice->status_pemesanan ?></td>
									<td><?= $invoice->total_bayar ?></td>
									<td><?= $invoice->bukti_bayar == NULL ? '<span class="label bg-red">' . $invoice->status_pembayaran . '</span>' : '<a href="' . base_url('assets/bukti_bayar/' . $invoice->bukti_bayar) . '" target="_blank"><img src="' . base_url('assets/bukti_bayar/' . $invoice->bukti_bayar) . '" width="60px" alt=""></a>' ?></td>
									<td><?= $invoice->tanggal_bayar == NULL ? '<span class="label bg-red">' . $invoice->status_pembayaran . '</span>' : $invoice->tanggal_bayar ?></td>
									<td><?= $invoice->tanggal_konfirmasi == NULL ? '<span  class="label bg-red">' . $invoice->status_pembayaran . '</span>' : $invoice->tanggal_konfirmasi ?></td>
									<td><span data-status="<?= $invoice->status_pembayaran ?>" data-id="<?= $invoice->id_pembayaran ?>" style="cursor: pointer;" class="label bg-blue change-status"><?= $invoice->status_pembayaran ?></span></td>
									<td><?= $invoice->nama_bank ?></td>

								</tr>
								<?php $no++; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama Bank</th>
									<th>Nama Pemilik</th>
									<th>No Rekening</th>
									<th>Foto Bank</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>

								<tr>
									<td><?php echo $no ?></td>
									<td><?= $invoice->nama_bank ?></td>
									<td><?= $invoice->nama_pemilik ?></td>
									<td><?= $invoice->no_rekening ?></td>
									<td><img src="<?= base_url('assets/foto_bank/' . $invoice->foto_bank) ?>" width="60px" alt=""></td>

								</tr>
								<?php $no++ ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php if ($invoice->status_pembayaran == "Belum Bayar") : ?>
				<form action="<?= site_url('account/konfirmasi_pembayaran') ?>" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="bukti">Upload Bukti Pembayaran</label>
								<input type="file" name="bukti" id="bukti" class="form-control" required>
							</div>
						</div>
						<input type="hidden" name="id_pembayaran" value="<?= $invoice->id_pembayaran ?>">
						<div class="col-md-4">
							<button type="submit" class="btn btn-primary btn-sm mt-4">Upload</button>
						</div>
					</div>
				</form>
			<?php endif; ?>
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
