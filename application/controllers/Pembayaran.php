<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect('backoffice');
		}
	}
	public function index()
	{
		echo "Pembayaran";
	}
}
