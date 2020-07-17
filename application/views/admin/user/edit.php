<div class="row">
	<div class="col-md-12">
		<div class="box box-danger">
			<div class=" box-header with-border">
				<i class="fa fa-bar-chart-o"></i>
				<h3 class="box-title">
					<?= $page ?>
				</h3>
			</div>
			<div class="box-body">
				<form action="<?= site_url('backoffice/user/edit/' . $admin->id_admin) ?>" method="POST">
					<input type="hidden" name="id_admin" name="id_admin" value="<?= $admin->id_admin ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" name="username" id="username" placeholder="Username" required value="<?= $admin->username ?>">
								<?php echo form_error('username', '<span class="text-danger">', '</span>'); ?>
							</div>
						</div>
					</div>

					<button class="btn btn-primary" style="cursor:pointer"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
