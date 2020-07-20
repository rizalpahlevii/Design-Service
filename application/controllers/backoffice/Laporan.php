<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
		// $this->load->model('Laporan_model', 'laporan');
		$this->load->model('Pemesanan_model', 'pemesanan');
		$this->content = 'admin/laporan/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['page'] = 'Laporan';
		if (isset($_GET['tgl_awal']) && isset($_GET['tgl_akhir'])) {
			$data['pemesanan'] = $this->pemesanan->get_all_data_filter($_GET['tgl_awal'], $_GET['tgl_akhir']);
		} else {
			$data['pemesanan'] = $this->pemesanan->get_all_data();
		}

		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
	public function print()
	{
		$data['pemesanan'] = $this->pemesanan->get_all_data_filter($_GET['start'], $_GET['end']);
		$this->load->view('admin/laporan/print', $data);
	}
}
