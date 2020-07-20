<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_member') != true) {
			redirect('home');
		}
		$this->content = 'frontend/bank/';
		$this->template_view = 'frontend/template';
		$this->load->model('Pemesanan_model', 'pemesanan');
		$this->load->model('Pembayaran_model', 'pembayaran');
	}
	public function update()
	{
		$post = $this->input->post();
		$data = [
			'nama' => $post['nama'],
			'email' => $post['email'],
			'username' => $post['username'],
			'no_hp' => $post['no_hp'],
		];
		if ($post['password'] != "") {
			$data['password'] = md5($post['password']);
		}
		$this->db->update('member', $data, ['id_member' => $this->session->userdata('id_member')]);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Diupdate
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Diupdate
			</div>');
		}
		redirect('account/profile/');
	}
	public function pemesanan()
	{
		$data['pemesanan'] = $this->pemesanan->get_all_data_by_member($this->session->userdata('id_member'));
		$this->load->view('frontend/pemesanan', $data);
	}
	public function profile()
	{
		$data['member'] = $this->db->get_where('member', ['id_member' => $this->session->userdata('id_member')])->row();
		$this->load->view('frontend/profile', $data);
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
