<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
	public function get_all()
	{
		return $this->db->get('kategori')->result_array();
	}
	public function get_by_id($id)
	{
		return $this->db->get_where('kategori', ['id_kategori' => $id])->row();
	}
	public function simpan($data)
	{
	}
}
