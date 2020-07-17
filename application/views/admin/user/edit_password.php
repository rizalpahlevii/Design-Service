<div class="row">
	<div class="col-md-12">
		<div class="box box-danger">
			<div class=" box-header with-border">
				<i class="fa fa-bar-chart-o"></i>
				<h3 class="box-title"><?= $page ?></h3>
			</div>
			<div class="box-body">
				<form action="<?= site_url('backoffice/user/edit_password/' . $admin->id_admin) ?>" method="POST">

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="password" required>
								<?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="password_konfirmasi">Password Konfirmasi</label>
								<input type="password" class="form-control" name="password_konfirmasi" id="password_konfirmasi" placeholder="Password Konfirmasi" required>
								<?php echo form_error('password_konfirmasi', '<span class="text-danger">', '</span>'); ?>
							</div>
						</div>
					</div>
					<button class="btn btn-primary" style="cursor:pointer"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
