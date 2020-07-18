<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
		$this->load->model('Pembayaran_model', 'pembayaran');
		$this->content = 'admin/pembayaran/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['page'] = 'Pembayaran';
		$data['pembayaran'] = $this->pembayaran->get_all_data();

		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
	public function ubah_status()
	{
		if ($this->input->is_ajax_request()) {
			$post = $this->input->post();
			if ($post['status'] == "Pembayaran Valid") {
				$data = ['status_pembayaran' => $post['status'], 'tanggal_konfirmasi' => date('Y-m-d')];
			} else {
				$data = ['status_pembayaran' => $post['status']];
			}
			$this->db->update('pembayaran', $data, ['id_pembayaran' => $post['id_pembayaran']]);
			if ($this->db->affected_rows() > 0) {
				$response = ['status' => true, 'message' => 'Status Berhasil Diubah'];
			} else {
				$response = ['status' => true, 'message' => 'Status Berhasil Diubah'];
			}
			echo json_encode($response);
		} else {
			show_404();
		}
	}
}
