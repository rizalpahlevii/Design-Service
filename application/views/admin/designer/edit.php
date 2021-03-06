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
				<form action="<?= site_url('backoffice/designer/update') ?>" method="POST">
					<input type="hidden" name="id_designer" name="id_designer" value="<?= $designer->id_designer ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">Nama Designer</label>
								<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Designer...." value="<?= $designer->nama_designer ?>">
							</div>
						</div>
					</div>
					<button class="btn btn-primary" style="cursor:pointer"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
