<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Print</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Laporan</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered" id="example-table" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>#</th>
							<th>No Resi</th>
							<th>Member</th>
							<th>Email</th>
							<th>No HP</th>
							<th>Kategori</th>
							<th>Paket</th>
							<th>Designer</th>
							<th>Total Bayar</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						$total = 0; ?>
						<?php foreach ($pemesanan as $row) : ?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $row->no_resi ?></td>
								<td><?= $row->nama ?></td>
								<td><?= $row->email ?></td>
								<td><?= $row->no_hp ?></td>
								<td><?= $row->nama_kategori ?></td>
								<td><?= $row->nama_paket ?></td>
								<td><?= $row->nama_designer ?></td>
								<td><?= number_format($row->total_bayar) ?></td>
							</tr>
						<?php $no++;
							$total += $row->total_bayar;
						endforeach; ?>
					</tbody>
					<thead>
						<tr>
							<th colspan="8">
								<center>Total</center>
							</th>
							<th><?= number_format($total) ?></th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</body>
<script src="<?php echo base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>

<script>
	$(document).ready(function() {
		window.print();
	});
</script>

</html>
