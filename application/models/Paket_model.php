<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket_model extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->select('paket.*, kategori.nama_kategori')
			->from('paket')
			->join('kategori', 'kategori.id_kategori = paket.id_kategori')->get();
		return $query->result();
	}
	public function get_by_id($id)
	{
		$query = $this->db->select('paket.*, kategori.nama_kategori')
			->from('paket')
			->join('kategori', 'kategori.id_kategori = paket.id_kategori')->where('paket.id_paket', $id)->get();
		return $query->row();
	}
}
