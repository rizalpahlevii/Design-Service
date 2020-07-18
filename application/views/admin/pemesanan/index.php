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
											<td><?= $row->status_pemesanan ?></td>
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


<script type="text/javascript">
	$(function() {
		$('#example-table').dataTable();
	});
	$(document).ready(function() {
		$(document).on('click', '.pilih-designer', function() {
			$("#id_pemesanan").val($(this).data('id'));
			$('#modal-default').modal('show');
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
