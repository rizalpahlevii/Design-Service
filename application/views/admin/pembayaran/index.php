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
										<th>Status</th>
										<th>Total Bayar</th>
										<th>Bukti Bayar</th>
										<th>Tanggal Bayar</th>
										<th>Tanggal Konfirmasi</th>
										<th>Status Pembayaran</th>
										<th>BANK</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($pembayaran as $row) : ?>
										<tr>
											<td><?= $no ?></td>
											<td><?= $row->tanggal_pemesanan ?></td>
											<td><?= $row->kode_pemesanan ?></td>
											<td><?= $row->nama ?></td>
											<td><?= $row->status_pemesanan ?></td>
											<td><?= $row->total_bayar ?></td>
											<td><?= $row->bukti_bayar == NULL ? '<span class="label bg-red">' . $row->status_pembayaran . '</span>' : '<a href="' . base_url('assets/bukti_bayar/' . $row->bukti_bayar) . '" target="_blank"><img src="' . base_url('assets/bukti_bayar/' . $row->bukti_bayar) . '" width="60px" alt=""></a>' ?></td>
											<td><?= $row->tanggal_bayar == NULL ? '<span class="label bg-red">' . $row->status_pembayaran . '</span>' : $row->tanggal_bayar ?></td>
											<td><?= $row->tanggal_konfirmasi == NULL ? '<span  class="label bg-red">' . $row->status_pembayaran . '</span>' : $row->tanggal_konfirmasi ?></td>
											<td><span data-status="<?= $row->status_pembayaran ?>" data-id="<?= $row->id_pembayaran ?>" style="cursor: pointer;" class="label bg-blue change-status"><?= $row->status_pembayaran ?></span></td>
											<td><?= $row->nama_bank ?></td>

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
				<h4 class="modal-title">Ubah Status</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<input type="hidden" name="id_pembayaran" id="id_pembayaran">
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
		$(document).on('click', '.change-status', function() {
			$("#id_pembayaran").val($(this).data('id'));
			status = $(this).data('status');
			element = '';
			if (status == 'Belum Bayar') {
				element += '<option selected value="Belum Bayar">Belum Bayar</option>';
			} else {
				element += '<option value="Belum Bayar">Belum Bayar</option>';
			}
			if (status == 'Menunggu Konfirmasi') {
				element += '<option selected value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>';
			} else {
				element += '<option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>';
			}
			if (status == 'Pembayaran Valid') {
				element += '<option selected value="Pembayaran Valid">Pembayaran Valid</option>';
			} else {
				element += '<option value="Pembayaran Valid">Pembayaran Valid</option>';
			}
			if (status == 'Pembayaran Ditolak') {
				element += '<option selected value="Pembayaran Ditolak">Pembayaran Ditolak</option>';
			} else {
				element += '<option value="Pembayaran Ditolak">Pembayaran Ditolak</option>';
			}
			$('#status').html(element);
			$('#modal-default').modal('show');
		});
		$('#btn-save').click(function() {
			$.ajax({
				url: "<?= site_url('backoffice/pembayaran/ubah_status') ?>",
				method: "POST",
				dataType: "json",
				data: {
					id_pembayaran: $("#id_pembayaran").val(),
					status: $("#status").val(),
				},
				success: function(response) {
					alert(response.message);
					location.reload();
				}
			})
		});
	});
</script>
