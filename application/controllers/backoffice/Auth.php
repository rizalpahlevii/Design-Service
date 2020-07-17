<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if ($this->session->userdata('status') == "login") {
			redirect('backoffice/dashboard');
		}
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		} else {
			$where = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			$cek = $this->db->get_where("admin", $where)->num_rows();
			if ($cek > 0) {
				$data_session = array(
					'username' =>  $this->input->post('username'),
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect('backoffice/dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Login Gagal
				</div>');
				redirect('backoffice/auth');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('backoffice/auth');
	}
}
