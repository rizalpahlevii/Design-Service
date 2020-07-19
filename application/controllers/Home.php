<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		$this->content = 'frontend/bank/';
		$this->template_view = 'frontend/template';
	}
	public function index()
	{
		$this->load->view('frontend/home');
		// $this->template->load($this->template_view, $this->content . 'index', $data);
	}
}
