<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
	public function get_all_data()
	{
		$query = $this->db->select('pemesanan.*,pembayaran.*,member.*,bank.*')
			->join('pemesanan', 'pemesanan.id_pemesanan=pembayaran.id_pemesanan')
			->join('member', 'member.id_member=pemesanan.id_member')
			->join('bank', 'bank.id_bank=pembayaran.id_bank')
			->get('pembayaran');
		return $query->result();
	}
	public function get_all_data_by_member($id_member)
	{
		$query = $this->db->select('pemesanan.*,pembayaran.*,member.*,bank.*')
			->join('pemesanan', 'pemesanan.id_pemesanan=pembayaran.id_pemesanan')
			->join('member', 'member.id_member=pemesanan.id_member')
			->join('bank', 'bank.id_bank=pembayaran.id_bank')
			->where('pemesanan.id_member', $id_member)
			->get('pembayaran');
		return $query->result();
	}
	public function get_data_by_member($id_pembayaran, $id_member)
	{
		$query = $this->db->select('pemesanan.*,pembayaran.*,member.*,bank.*')
			->join('pemesanan', 'pemesanan.id_pemesanan=pembayaran.id_pemesanan')
			->join('member', 'member.id_member=pemesanan.id_member')
			->join('bank', 'bank.id_bank=pembayaran.id_bank')
			->where('pemesanan.id_member', $id_member)
			->where('pembayaran.id_pembayaran', $id_pembayaran)
			->get('pembayaran');
		return $query->row();
	}
}
