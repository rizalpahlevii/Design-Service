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
				<a href="<?= site_url('user/tambah/') ?>" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Tambah
					Data</a>
				<div class="row">
					<div class="col-md-8">
						<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Username</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($admin as $row) : ?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?= $row->username ?></td>
										<td>
											<a href="<?= site_url('user/edit/' . $row->id_admin) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
											<a href="<?= site_url('user/edit_password/' . $row->id_admin) ?>" class="btn btn-warning btn-sm"><i class="fa fa-key"></i> Edit Password</a>
											<a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= site_url('user/hapus/' . $row->id_admin) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>

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
