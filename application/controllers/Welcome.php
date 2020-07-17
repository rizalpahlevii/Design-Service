<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		$this->content = 'admin/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['page'] = 'Dashboard';
		$this->template->load($this->template_view, $this->content . 'dashboard', $data);
	}
}
