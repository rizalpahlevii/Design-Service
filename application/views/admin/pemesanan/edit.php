<div class="row">
	<div class="col-md-12">
		<div class="box box-danger">
			<div class=" box-header with-border">
				<i class="fa fa-bar-chart-o"></i>
				<h3 class="box-title"><?= $page ?></h3>
			</div>
			<div class="box-body">
				<form action="<?= site_url('backoffice/paket/update') ?>" method="POST">
					<input type="hidden" name="id_paket" id="id_paket" value="<?= $paket->id_paket ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">Nama Paket</label>
								<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Paket...." required value="<?= $paket->nama_paket ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="harga">Harga Paket</label>
								<input type="number" class="form-control" name="harga" id="harga" placeholder="Harga Paket...." required value="<?= $paket->harga_paket ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="kategori">Kategori</label>
								<select name="kategori" id="kategori" class="form-control" required>
									<option disabled selected>Pilih Kategori</option>
									<?php foreach ($kategori as $row) : ?>
										<option value="<?= $row->id_kategori ?>" <?= $paket->id_kategori == $row->id_kategori ? 'selected' : ''; ?>><?= $row->nama_kategori ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="keterangan">Keterangan Paket</label>
								<textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control" required><?= $paket->keterangan ?></textarea>
							</div>
						</div>
					</div>
					<button class="btn btn-primary" style="cursor:pointer"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
