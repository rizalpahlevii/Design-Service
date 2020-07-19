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
}
