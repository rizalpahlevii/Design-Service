<div class="row">
	<div class="col-md-12">
		<div class="box box-danger">
			<div class=" box-header with-border">
				<i class="fa fa-bar-chart-o"></i>
				<h3 class="box-title"><?= $page ?></h3>
			</div>
			<div class="box-body">
				<?= form_open_multipart('backoffice/bank/simpan'); ?>
				<!-- <form action="<?= site_url('backoffice/bank/tambah') ?>" enctype="multipart/form-data" method="POST"> -->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="nama_bank">Nama Bank</label>
							<input type="text" class="form-control" name="nama_bank" id="nama_bank" placeholder="Nama Bank...." required>
							<?php echo form_error('nama_bank', '<span class="text-danger">', '</span>'); ?>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="nama_pemilik">Nama Pemilik</label>
							<input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" placeholder="Nama Pemilik...." required>
							<?php echo form_error('nama_pemilik', '<span class="text-danger">', '</span>'); ?>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="no_rekening">No Rekeing Bank</label>
							<input type="text" class="form-control" name="no_rekening" id="no_rekening" placeholder="No Rekening Bank...." required>
							<?php echo form_error('no_rekening', '<span class="text-danger">', '</span>'); ?>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="image">Foto Bank</label>
							<input type="file" name="image" id="image" class="form-control">
							<?php echo form_error('image', '<span class="text-danger">', '</span>'); ?>

						</div>
					</div>
				</div>
				<button class="btn btn-primary" type="submit" style="cursor:pointer"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
