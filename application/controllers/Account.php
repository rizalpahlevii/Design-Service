<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		$this->content = 'frontend/bank/';
		$this->template_view = 'frontend/template';
		$this->load->model('Pemesanan_model', 'pemesanan');
		$this->load->model('Pembayaran_model', 'pembayaran');
	}
	public function pemesanan()
	{
		$data['pemesanan'] = $this->pemesanan->get_all_data_by_member($this->session->userdata('id_member'));
		$this->load->view('frontend/pemesanan', $data);
	}
	public function invoice()
	{
		$data['invoice'] = $this->pembayaran->get_all_data_by_member($this->session->userdata('id_member'));
		$this->load->view('frontend/invoice', $data);
	}
	public function view_invoice($id)
	{
		$data['invoice'] = $this->pembayaran->get_data_by_member($id, $this->session->userdata('id_member'));
		$this->load->view('frontend/invoice_view', $data);
	}
	public function konfirmasi_pembayaran()
	{
		$data = [];
		$upload_image = $_FILES['bukti']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '10000';
			$config['upload_path'] = './assets/bukti_bayar/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('bukti')) {
				$image = $this->upload->data('file_name');
			}
		} else {
			echo $this->upload->display_errors();
		}
		$post = $this->input->post();
		$data = [
			'bukti_bayar' => $image,
			'status_pembayaran' => 'Menunggu Konfirmasi',
			'tanggal_bayar' => date('Y-m-d'),
		];
		$this->db->update('pembayaran', $data, ['id_pembayaran' => $post['id_pembayaran']]);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan
				</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Disimpan
				</div>');
		}
		redirect('account/invoice');
	}
}
