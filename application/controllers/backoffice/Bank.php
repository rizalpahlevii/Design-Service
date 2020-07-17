<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect('backoffice/auth');
		}
		$this->content = 'admin/bank/';
		$this->template_view = 'admin/template';
	}
	public function index()
	{
		$data['page'] = 'Bank';
		$data['bank'] = $this->db->get('bank')->result();
		$this->template->load($this->template_view, $this->content . 'index', $data);
	}
	public function tambah()
	{
		$data['page'] = 'Tambah Bank';
		$this->template->load($this->template_view, $this->content . 'create', $data);
	}
	public function simpan()
	{
		$data = [];
		$upload_image = $_FILES['image']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '10000';
			$config['upload_path'] = './assets/foto_bank/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$image = $this->upload->data('file_name');
			}
		} else {
			echo $this->upload->display_errors();
		}
		$post = $this->input->post();
		$data = [
			'nama_bank' => $post['nama_bank'],
			'nama_pemilik' => $post['nama_pemilik'],
			'no_rekening' => $post['no_rekening'],
			'foto_bank' => $image
		];
		$this->db->insert('bank', $data);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan
				</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Disimpan
				</div>');
		}
		redirect('backoffice/bank/');
	}
	public function update()
	{
		$post = $this->input->post();
		if ($_FILES['image']) {
			$old  = $this->db->get_where('bank', ['id_bank' => $post['id_bank']])->row();
			$upload_image = $_FILES['image']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size'] = '10000';
				$config['upload_path'] = './assets/foto_bank/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image')) {
					unlink(FCPATH . 'assets/foto_bank/' . $old->foto_bank);
					$image = $this->upload->data('file_name');
				}
			} else {
				echo $this->upload->display_errors();
			}
			$data = [
				'nama_bank' => $post['nama_bank'],
				'nama_pemilik' => $post['nama_pemilik'],
				'no_rekening' => $post['no_rekening'],
				'foto_bank' => $image
			];
		} else {
			$data = [
				'nama_bank' => $post['nama_bank'],
				'nama_pemilik' => $post['nama_pemilik'],
				'no_rekening' => $post['no_rekening'],
			];
		}
		$this->db->update('bank', $data, ['id_bank' => $post['id_bank']]);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Diedit
				</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Diedit
				</div>');
		}
		redirect('backoffice/bank/');
	}
	public function edit($id)
	{
		$data['page'] = 'Edit Bank';
		$data['bank'] = $this->db->get_where('bank', ['id_bank' => $id])->row();
		$this->template->load($this->template_view, $this->content . 'edit', $data);
	}
	public function hapus($id)
	{
		$data = $this->db->get_where('bank', ['id_bank' => $id])->row();
		$image = $data->foto_bank;
		$where = ['id_bank' => $id];
		$this->db->delete('bank', $where);
		if ($this->db->affected_rows() > 0) {
			unlink(FCPATH . 'assets/foto_bank/' . $image);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus
			</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Data Gagal Dihapus
			</div>');
		}
		redirect('backoffice/bank/');
	}
}
