<div class="row">
	<div class="col-md-12">
		<div class="box box-danger">
			<div class=" box-header with-border">
				<i class="fa fa-bar-chart-o"></i>
				<h3 class="box-title"><?= $page ?></h3>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-6"> <?php echo $this->session->flashdata('message'); ?></div>
				</div>
				<div class="row">
					<form action="" method="GET">
						<div class="col-md-4">
							<div class="form-group">
								<label for="tgl_awal">Tanggal Awal</label>
								<input type="date" name="tgl_awal" id="tgl_awal" value="<?= isset($_GET['tgl_awal']) ? $_GET['tgl_awal'] : '' ?>" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="tgl_akhir">Tanggal Akhir</label>
								<input type="date" name="tgl_akhir" id="tgl_akhir" value="<?= isset($_GET['tgl_akhir']) ? $_GET['tgl_akhir'] : '' ?>" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group mt-5">
								<button class="btn btn-primary btn-sm btn-filter" type="submit">Filter</button>
								<button class="btn btn-success btn-sm btn-print" type="button">Print</button>
							</div>
						</div>
					</form>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
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
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(function() {
		$('#example-table').dataTable();
		$('.btn-print').click(function() {
			if ($('#tgl_awal').val() == "" || $('#tgl_akhir').val() == "") {
				alert('Form pencarian masih kosing');
				return;
			}
			const start = $('#tgl_awal').val();
			const end = $('#tgl_akhir').val();
			url = "<?= site_url('backoffice/laporan/print') ?>" + `?start=${start}&end=${end}`;
			window.open(url);
		});
	});
</script>
