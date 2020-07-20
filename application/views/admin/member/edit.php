<div class="row">
	<div class="col-md-12">
		<div class="box box-danger">
			<div class=" box-header with-border">
				<i class="fa fa-bar-chart-o"></i>
				<h3 class="box-title"><?= $page ?></h3>
			</div>
			<div class="box-body">
				<form action="<?= site_url('backoffice/member/update') ?>" method="POST">
					<input type="hidden" name="id_member" id="id_member" value="<?= $member->id_member ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">Nama Member</label>
								<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required value="<?= $member->nama ?>">

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" name="username" id="username" placeholder="Username" required value="<?= $member->username ?>">

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="email" required value="<?= $member->email ?>">

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="no_hp">No HP</label>
								<input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="no_hp" required value="<?= $member->no_hp ?>">

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="password">
								<p>* kosongkan password jika tidak ingin mengganti password</p>
							</div>
						</div>
					</div>
					<button class="btn btn-primary" style="cursor:pointer"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
