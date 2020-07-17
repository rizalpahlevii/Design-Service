<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect('backoffice/auth');
		}
		$this->content = 'admin/bank/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['page'] = 'Bank';
		$data['bank'] = $this->db->get('bank')->result();
		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
}
