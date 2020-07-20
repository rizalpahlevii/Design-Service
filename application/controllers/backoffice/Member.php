<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
		$this->content = 'admin/member/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['member'] = $this->db->get('member')->result();

		$data['page'] = 'Member';
		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
	public function tambah()
	{
		$data['kategori'] = $this->db->get('kategori')->result();
		$data['page'] = 'Tambah Member';
		$this->template->load($this->template_view, $this->content . 'create', $data);
	}
	public function simpan()
	{
		$post = $this->input->post();
		$data = [
			'nama_member' => $post['nama'],
			'harga_member' => $post['harga'],
			'keterangan' => $post['keterangan'],
			'id_kategori' => $post['kategori'],
		];
		$this->db->insert('member', $data);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Disimpan
			</div>');
		}
		redirect('backoffice/member/');
	}
	public function edit($id)
	{
		$data['page'] = 'Edit member';
		$data['member'] = $this->member->get_by_id($id);
		$data['kategori'] = $this->db->get('kategori')->result();
		$this->template->load($this->template_view, $this->content . 'edit', $data);
	}
	public function update()
	{
		$post = $this->input->post();
		$data = [
			'nama_member' => $post['nama'],
			'harga_member' => $post['harga'],
			'keterangan' => $post['keterangan'],
			'id_kategori' => $post['kategori'],
		];
		$this->db->update('member', $data, ['id_member' => $post['id_member']]);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Diedit
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Diedit
			</div>');
		}
		redirect('backoffice/member/');
	}
	public function hapus($id)
	{
		$where = ['id_member' => $id];
		$this->db->delete('member', $where);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Dihapus
			</div>');
		}
		redirect('backoffice/member/');
	}
}
