<?php
class Pemesanan_model extends CI_Model
{
	public function get_all_data()
	{
		$query = $this->db->select('pemesanan.id_pemesanan,pemesanan.jumlah_pemesanan,pemesanan.total_bayar,pemesanan.status_pemesanan,pemesanan.catatan, pemesanan.no_resi , pemesanan.id_member, pemesanan');
	}
}
