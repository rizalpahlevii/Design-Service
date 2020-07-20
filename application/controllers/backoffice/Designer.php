<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Designer extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
		date_default_timezone_set('Asia/Jakarta');

		$this->content = 'admin/designer/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['page'] = 'Designer';
		$data['designer'] = $this->db->get('designer')->result();
		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
	public function tambah()
	{
		$data['page'] = 'Tambah Designer';
		$this->template->load($this->template_view, $this->content . 'create', $data);
	}
	public function simpan()
	{
		$post = $this->input->post();
		$data = ['nama_designer' => $post['nama'], 'jumlah_yang_dikerjakan' => 0];
		$this->db->insert('designer', $data);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Disimpan
			</div>');
		}
		redirect('backoffice/designer/');
	}
	public function edit($id)
	{
		$data['page'] = 'Edit Designer';
		$data['designer'] = $this->db->get_where('designer', ['id_designer' => $id])->row();
		$this->template->load($this->template_view, $this->content . 'edit', $data);
	}
	public function update()
	{
		$post = $this->input->post();
		$data = ['nama_designer' => $post['nama']];
		$this->db->update('designer', $data, ['id_designer' => $post['id_designer']]);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Diedit
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Diedit
			</div>');
		}
		redirect('backoffice/designer/');
	}
	public function hapus($id)
	{
		$where = ['id_designer' => $id];
		$this->db->delete('designer', $where);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Dihapus
			</div>');
		}
		redirect('backoffice/designer/');
	}
}
