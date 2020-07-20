<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function index()
	{
		$this->load->view('frontend/contact');
	}
}
