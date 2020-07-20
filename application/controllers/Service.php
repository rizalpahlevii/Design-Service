<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		$this->content = 'frontend/bank/';
		$this->template_view = 'frontend/template';
		$this->load->model('Paket_model', 'paket');
	}
	public function view($id_kategori)
	{
		$data['kategori'] = $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row();
		$data['paket'] = $this->db->select('paket.*, kategori.nama_kategori')
			->from('paket')
			->join('kategori', 'kategori.id_kategori = paket.id_kategori')->where('paket.id_kategori', $id_kategori)->get()->result();
		$this->load->view('frontend/service', $data);
	}
}
