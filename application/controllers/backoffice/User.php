<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect('backoffice/auth');
		}
		$this->content = 'admin/user/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['admin'] = $this->db->get('admin')->result();
		$data['page'] = 'Admin / User';
		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
	public function tambah()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_konfirmasi]|min_length[3]', [
			'matches' => 'Password Tidak Sesuai!',
			'min_length' => 'Password Terlalu Pendek!'
		]);
		$this->form_validation->set_rules('password_konfirmasi', 'Password Konfirmasi', 'trim|required|matches[password]');

		if ($this->form_validation->run() == false) {
			$data['page'] = 'Tambah Admin / User';
			$this->template->load($this->template_view, $this->content . 'create', $data);
		} else {
			$post = $this->input->post();
			$data = [
				'username' => $post['username'],
				'password' => md5($post['password']),
			];
			$this->db->insert('admin', $data);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan
				</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Disimpan
				</div>');
			}
			redirect('backoffice/user/');
		}
	}
	public function edit($id)
	{

		$this->form_validation->set_rules('username', 'Username', 'required|edit_unique_admin[admin.username.' . $id . ']');
		if ($this->form_validation->run() == false) {
			$data['page'] = 'Edit Admin / User';
			$data['admin'] = $this->db->get_where('admin', ['id_admin', $id])->row();
			$this->template->load($this->template_view, $this->content . 'edit', $data);
		} else {
			$post = $this->input->post();
			$data = [
				'username' => $post['username'],
			];
			$this->db->update('admin', $data, ['id_admin' => $post['id_admin']]);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Diedit
			</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Diedit
			</div>');
			}
			redirect('backoffice/user/');
		}
	}
	public function edit_password($id)
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_konfirmasi]|min_length[3]', [
			'matches' => 'Password Tidak Sesuai!',
			'min_length' => 'Password Terlalu Pendek!'
		]);
		$this->form_validation->set_rules('password_konfirmasi', 'Password Konfirmasi', 'trim|required|matches[password]');
		if ($this->form_validation->run() == false) {
			$data['page'] = 'Edit Admin / User Password';
			$data['admin'] = $this->db->get_where('admin', ['id_admin', $id])->row();
			$this->template->load($this->template_view, $this->content . 'edit_password', $data);
		} else {
			$post = $this->input->post();
			$data = [
				'password' => md5($post['password']),
			];
			$this->db->update('admin', $data, ['id_admin' => $id]);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Diedit
			</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Diedit
			</div>');
			}
			redirect('backoffice/user/');
		}
	}

	public function hapus($id)
	{
		$where = ['id_admin' => $id];
		$this->db->delete('admin', $where);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Dihapus
			</div>');
		}
		redirect('backoffice/user/');
	}
}
