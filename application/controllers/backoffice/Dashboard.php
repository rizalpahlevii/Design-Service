<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
		$this->content = 'admin/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['page'] = 'Dashboard';
		$data['kategori'] = $this->db->get('kategori')->num_rows();
		$data['paket'] = $this->db->get('paket')->num_rows();
		$data['user'] = $this->db->get('admin')->num_rows();
		$this->template->load($this->template_view, $this->content . 'dashboard', $data);
	}
}
