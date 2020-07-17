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
				<a href="<?= site_url('backoffice/bank/tambah/') ?>" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Tambah
					Data</a>
				<div class="row">
					<div class="col-md-8">
						<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama Bank</th>
									<th>No Rekening</th>
									<th>Foto Bank</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($bank as $row) : ?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?= $row->nama_bank ?></td>
										<td><?= $row->no_rekening ?></td>
										<td><?= $row->foto_bank ?></td>
										<td>
											<a href="<?= site_url('backoffice/bank/edit/' . $row->id_bank) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
											<a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= site_url('backoffice/bank/hapus/' . $row->id_bank) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>

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
