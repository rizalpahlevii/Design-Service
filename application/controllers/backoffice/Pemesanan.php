<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect('backoffice/auth');
		}
		$this->load->model('Pemesanan_model', 'pemesanan');
		$this->content = 'admin/pemesanan/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['page'] = 'Pemesanan';
		$data['pemesanan'] = $this->pemesanan->get_all_data();
		$data['designer'] = $this->db->get('designer')->result();
		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
	public function add_designer()
	{
		if ($this->input->is_ajax_request()) {
			$post = $this->input->post();
			$data = ['id_designer' => $post['id_designer']];
			$designer = $this->db->get_where('designer', ['id_designer' => $post['id_designer']])->row();
			$pemesanan = $this->db->get_where('pemesanan', ['id_pemesanan' => $post['id_pemesanan']])->row();

			$this->db->update(
				'designer',
				['jumlah_yang_dikerjakan' => $designer->jumlah_yang_dikerjakan + $pemesanan->jumlah_pemesanan],
				['id_designer' => $post['id_designer']]
			);
			$this->db->update('pemesanan', $data, ['id_pemesanan' => $post['id_pemesanan']]);
			if ($this->db->affected_rows() > 0) {
				$response = ['status' => true, 'message' => 'Designer Berhasil Ditambahkan'];
			} else {
				$response = ['status' => true, 'message' => 'Designer Gagal Ditambahkan'];
			}
			echo json_encode($response);
		} else {
			show_404();
		}
	}
}
