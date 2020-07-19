<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		$this->content = 'frontend/bank/';
		$this->template_view = 'frontend/template';
	}
	public function logo_design()
	{
		$this->load->view('frontend/service_logo_design');
	}
	public function social_media()
	{
		$this->load->view('frontend/service_social_media');
	}
	public function digital_marketing()
	{
		$this->load->view('frontend/service_digital_marketing');
	}
}
