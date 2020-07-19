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
							</tr>
						</thead>
						<thead>
							<tr>
								<td>1</td>
								<td><?= $paket->nama_paket ?></td>
								<td><?= $paket->nama_kategori ?></td>
								<td id="harga_paket"><?= $paket->harga_paket ?></td>
								<td>
									<input type="text" class="form-control" name="jumlah_beli" id="jumlah_beli" value="1">
								</td>
								<td id="showSubtotal"><?= $paket->harga_paket * 1 ?></td>
							</tr>
						</thead>
					</table>
				</div>
			</div>
			<div class="row">
				<input type="hidden" name="id_paket" id="id_paket" value="<?= $paket->id_paket ?>">
				<div class="col-md-6">
					<div class="form-group">
						<label for="catatan">Catatan</label>
						<textarea name="catatan" id="catatan" cols="30" rows="5"></textarea>
					</div>
				</div>
				<div class="col-md-6">
					<button class="btn btn-success float-right" id="btn-checkout">Tambah Ke Keranjang</button>
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
	<script>
		$(document).ready(function() {
			$('#jumlah_beli').keyup(function() {
				var jumlah_beli = $(this).val();
				var harga = $('#harga_paket').html();
				const subtotal = parseInt(jumlah_beli) * parseInt(harga);
				$('#showSubtotal').html(subtotal)
			});
			$('#btn-checkout').click(function() {
				$.ajax({
					url: "<?= site_url('order/cart_add') ?>",
					method: "post",
					dataType: 'json',
					data: {
						id_paket: $('#id_paket').val(),
						jumlah_beli: $('#jumlah_beli').val(),
						catatan: $('#catatan').val(),
					},
					beforeSend: function() {
						Swal.showLoading();
					},
					success: function(response) {
						if (response.status) {
							Swal.fire("Berhasil", response.message, "success").then(() => {
								location.href = "<?= site_url('order/checkout') ?>"
							});
						} else {
							Swal.fire("Gagal", response.message, "error");
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
