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
				<a href="<?= site_url('backoffice/paket/tambah/') ?>" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Tambah
					Data</a>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama Paket</th>
									<th>Harga Paket</th>
									<th>Kategori</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($paket as $row) : ?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?= $row->nama_paket ?></td>
										<td><?= $row->harga_paket ?></td>
										<td><?= $row->nama_kategori ?></td>
										<td><?= $row->keterangan ?></td>
										<td>
											<a href="<?= site_url('backoffice/paket/edit/' . $row->id_paket) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
											<a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= site_url('backoffice/paket/hapus/' . $row->id_paket) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>

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
	</div>
</div>
<script type="text/javascript">
	$(function() {
		$('#example-table').dataTable();

	});
</script>
