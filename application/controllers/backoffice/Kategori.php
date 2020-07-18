<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
		$this->content = 'admin/kategori/';
		$this->template_view = 'admin/template';
		$this->load->model('Kategori_model', 'kategori');
	}
	public function index()
	{
		$data['categories'] = $this->kategori->get_all();
		$data['page'] = 'Kategori';
		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
	public function simpan()
	{
		$post = $this->input->post();
		$data = ['nama_kategori' => $post['nama']];
		$this->db->insert('kategori', $data);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Disimpan
			</div>');
		}
		redirect('backoffice/kategori/');
	}
	public function tambah()
	{
		$data['page'] = 'Tambah Kategori';
		$this->template->load($this->template_view, $this->content . 'create', $data);
	}
	public function edit($id)
	{
		$data['page'] = 'Edit Kategori';
		$data['kategori'] = $this->kategori->get_by_id($id);
		$this->template->load($this->template_view, $this->content . 'edit', $data);
	}
	public function update()
	{
		$post = $this->input->post();
		$data = ['nama_kategori' => $post['nama']];
		$this->db->update('kategori', $data, ['id_kategori' => $post['id_kategori']]);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Diedit
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Diedit
			</div>');
		}
		redirect('backoffice/kategori/');
	}
	public function hapus($id)
	{
		$where = ['id_kategori' => $id];
		$this->db->delete('kategori', $where);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Dihapus
			</div>');
		}
		redirect('backoffice/kategori/');
	}
}
