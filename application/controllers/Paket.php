<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect('backoffice');
		}
		$this->content = 'admin/paket/';
		$this->template_view = 'admin/template';
		$this->load->model('Paket_model', 'paket');
	}
	public function index()
	{
		$data['paket'] = $this->paket->get_all();

		$data['page'] = 'Paket';
		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
	public function tambah()
	{
		$data['kategori'] = $this->db->get('kategori')->result();
		$data['page'] = 'Tambah Paket';
		$this->template->load($this->template_view, $this->content . 'create', $data);
	}
	public function simpan()
	{
		$post = $this->input->post();
		$data = [
			'nama_paket' => $post['nama'],
			'harga_paket' => $post['harga'],
			'keterangan' => $post['keterangan'],
			'id_kategori' => $post['kategori'],
		];
		$this->db->insert('paket', $data);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Disimpan
			</div>');
		}
		redirect('paket/');
	}
	public function edit($id)
	{
		$data['page'] = 'Edit Paket';
		$data['paket'] = $this->paket->get_by_id($id);
		$data['kategori'] = $this->db->get('kategori')->result();
		$this->template->load($this->template_view, $this->content . 'edit', $data);
	}
	public function update()
	{
		$post = $this->input->post();
		$data = [
			'nama_paket' => $post['nama'],
			'harga_paket' => $post['harga'],
			'keterangan' => $post['keterangan'],
			'id_kategori' => $post['kategori'],
		];
		$this->db->update('paket', $data, ['id_paket' => $post['id_paket']]);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Diedit
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Diedit
			</div>');
		}
		redirect('paket/');
	}
	public function hapus($id)
	{
		$where = ['id_paket' => $id];
		$this->db->delete('paket', $where);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Dihapus
			</div>');
		}
		redirect('paket/');
	}
}
