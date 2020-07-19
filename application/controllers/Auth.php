<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		$this->load->view('frontend/home');
		if ($this->session->userdata('status') == "login_member") {
			redirect('backoffice/dashboard');
		}
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('home');
		} else {
			$where = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			$cek = $this->db->get_where("member", $where)->num_rows();
			$data = $this->db->get_where("member", $where)->row();
			if ($cek > 0) {
				$data_session = array(
					'id_member' =>  $data->id_member,
					'username' =>  $this->input->post('username'),
					'status' => "login_member",
					'is_member' => true,
				);
				$this->session->set_userdata($data_session);
				redirect('home');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Login Gagal
				</div>');
				redirect('home');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}
