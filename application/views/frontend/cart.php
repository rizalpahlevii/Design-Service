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
				<div class="col-md-12">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Paket</th>
								<th>Kategori Paket</th>
								<th>Harga Paket</th>
								<th>Jumlah Beli</th>
								<th>Subtotal</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<thead>
							<?php foreach ($cart as $row) : ?>
								<input type="hidden" name="id_cart" id="id_cart" value="<?= $row->id_cart ?>">
								<tr>
									<td>1</td>
									<td><?= $row->nama_paket ?></td>
									<td><?= $row->nama_kategori ?></td>
									<td id="harga_paket"><?= $row->harga_paket ?></td>
									<td>
										<?= $row->jumlah_beli ?>
									</td>
									<td><?= $row->harga_paket * $row->jumlah_beli ?></td>
									<td><a class="btn btn-warning btn-sm" href="<?= site_url('order/hapus_cart/' . $row->id_cart) ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a></td>
								</tr>
							<?php endforeach; ?>
						</thead>
					</table>
				</div>
			</div>
			<?php if ($cart) : ?>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="bank">Pembayaran</label>
							<select name="bank" class="form-control" id="bank">
								<?php foreach ($bank as $row) : ?>
									<option value="<?= $row->id_bank ?>"><?= $row->nama_bank ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<button class="btn btn-primary mt-4" id="btn-proses">Proses</button>
					</div>
				</div>
			<?php endif; ?>
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
	<script>
		$(document).ready(function() {
			$('#jumlah_beli').keyup(function() {
				var jumlah_beli = $(this).val();
				var harga = $('#harga_paket').html();
				const subtotal = parseInt(jumlah_beli) * parseInt(harga);
				$('#showSubtotal').html(subtotal)
			});
			$('#btn-proses').click(function() {
				$.ajax({
					url: "<?= site_url('order/proses') ?>",
					method: "post",
					dataType: 'json',
					data: {
						id_cart: $('#id_cart').val(),
						id_bank: $('#bank').val(),
					},
					beforeSend: function() {
						Swal.showLoading();
					},
					success: function(response) {
						if (response.status) {
							Swal.fire("Berhasil", response.message, "success").then(() => {
								location.href = "<?= site_url('account/pemesanan') ?>"
							});
						} else {
							Swal.fire("Gagal", response.message, "error");
							location.reload();
						}
					},
					error: function(error) {
						Swal.fire("Gagal", "Transaksi Gagal!", "error");
					}
				});
			});
		});
	</script>
</body>

</html>
