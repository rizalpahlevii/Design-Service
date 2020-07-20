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
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>#</th>
										<th>Tgl Pemesanan</th>
										<th>Kode</th>
										<th>Member</th>
										<th>Paket</th>
										<th>Kategori</th>
										<th>Jumlah Pemesanan</th>
										<th>Total Bayar</th>
										<th>Status</th>
										<th>Catatan</th>
										<th>No Resi</th>
										<th>Designer</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($pemesanan as $row) : ?>
										<tr>
											<td><?= $no ?></td>
											<td><?= $row->tanggal_pemesanan ?></td>
											<td><?= $row->kode_pemesanan ?></td>
											<td><?= $row->nama ?></td>
											<td><?= $row->nama_paket ?></td>
											<td><?= $row->nama_kategori ?></td>
											<td><?= $row->jumlah_pemesanan ?></td>
											<td><?= $row->total_bayar ?></td>
											<td><span data-status="<?= $row->status_pemesanan ?>" data-id="<?= $row->id_pemesanan ?>" class="label bg-green change-status" style="cursor: pointer;"><?= $row->status_pemesanan ?></span></td>
											<td><?= $row->catatan ?></td>
											<td><?= $row->no_resi == "" ? '<button class="btn btn-primary btn-sm input-resi" data-id="' . $row->id_pemesanan . '">Input Resi</button>' : $row->no_resi ?></td>
											<td>
												<?php if ($row->nama_designer == "") : ?>
													<span data-id="<?= $row->id_pemesanan ?>" style="cursor: pointer;" class="label bg-red pilih-designer">Designer Belum Dipilih</span>
												<?php else : ?>
													<?= $row->nama_designer ?>
												<?php endif; ?>
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
</div>


<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Pilih Designer</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<input type="hidden" name="id_pemesanan" id="id_pemesanan">
						<div class="form-group">
							<label for="designier">Designer</label>
							<select name="designer" id="designer" class="form-control">
								<option disabled selected>Pilih Designer</option>
								<?php foreach ($designer as $row) : ?>
									<option value="<?= $row->id_designer ?>"><?= $row->nama_designer ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="btn-save">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-default-2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Ganti Status</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<input type="hidden" name="id_pemesanan_2" id="id_pemesanan_2">
						<div class="form-group">
							<label for="status">Status</label>
							<select name="status" id="status" class="form-control">
								<option disabled selected>Pilih Status</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="btn-save-2">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-resi">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Input Resi</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<input type="hidden" name="id_pemesanan_3" id="id_pemesanan_3">
						<div class="form-group">
							<label for="no_res">No Resi</label>
							<input type="text" class="form-control" name="no_resi" id="no_resi">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="btn-save-3">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script type="text/javascript">
	$(function() {
		$('#example-table').dataTable();
	});
	$(document).ready(function() {
		$(document).on('click', '.pilih-designer', function() {
			$("#id_pemesanan").val($(this).data('id'));
			$('#modal-default').modal('show');
		});
		$(document).on('click', '.input-resi', function() {
			id_pemesanan = $(this).data('id');
			$("#id_pemesanan_3").val($(this).data('id'));
			$('#modal-resi').modal('show');
		});
		$('#btn-save-3').click(function() {
			$.ajax({
				url: "<?= site_url('backoffice/pemesanan/input_resi') ?>",
				method: "POST",
				dataType: "json",
				data: {
					id_pemesanan: $("#id_pemesanan_3").val(),
					resi: $("#no_resi").val(),
				},
				success: function(response) {
					alert(response.message);
					location.reload();
				}
			})
		});
		$(document).on('click', '.change-status', function() {
			$("#id_pemesanan").val($(this).data('id'));
			status = $(this).data('status');
			element = '';
			if (status == 'Belum Bayar') {
				element += '<option selected value="Belum Bayar">Belum Bayar</option>';
			} else {
				element += '<option value="Belum Bayar">Belum Bayar</option>';
			}
			if (status == 'On Proggress') {
				element += '<option selected value="On Proggress">On Proggress</option>';
			} else {
				element += '<option value="On Proggress">On Proggress</option>';
			}
			if (status == 'Selesai') {
				element += '<option selected value="Selesai">Selesai</option>';
			} else {
				element += '<option value="Selesai">Selesai</option>';
			}

			$('#status').html(element);
			$('#modal-default-2').modal('show');
		});
		$('#btn-save-2').click(function() {
			$.ajax({
				url: "<?= site_url('backoffice/pemesanan/change_status') ?>",
				method: "POST",
				dataType: "json",
				data: {
					id_pemesanan: $("#id_pemesanan").val(),
					status: $("#status").val(),
				},
				success: function(response) {
					alert(response.message);
					location.reload();
				}
			})
		});
		$('#btn-save').click(function() {
			$.ajax({
				url: "<?= site_url('backoffice/pemesanan/add_designer') ?>",
				method: "POST",
				dataType: "json",
				data: {
					id_pemesanan: $("#id_pemesanan").val(),
					id_designer: $("#designer").val(),
				},
				success: function(response) {
					alert(response.message);
					location.reload();
				}
			})
		});
	});
</script>
