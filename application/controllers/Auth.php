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
			redirect('home');
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
	public function register()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nama', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('hp', 'NoHP', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_konfirmasi]|min_length[3]', [
			'matches' => 'Password Tidak Sesuai!',
			'min_length' => 'Password Terlalu Pendek!'
		]);
		$this->form_validation->set_rules('password_konfirmasi', 'Password Konfirmasi', 'trim|required|matches[password]');

		if ($this->form_validation->run() == false) {
			redirect('home');
		} else {
			$post = $this->input->post();
			$data = [
				'username' => $post['username'],
				'nama' => $post['nama'],
				'email' => $post['email'],
				'no_hp' => $post['hp'],
				'password' => md5($post['password']),
			];
			$this->db->insert('member', $data);
			$id = $this->db->insert_id();
			if ($this->db->affected_rows() > 0) {
				$data_session = array(
					'id_member' =>  $id,
					'username' =>  $data['username'],
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
