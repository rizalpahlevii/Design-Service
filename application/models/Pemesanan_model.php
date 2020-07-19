<?php
class Pemesanan_model extends CI_Model
{
	public function get_all_data()
	{
		$query = $this->db->select('pemesanan.id_pemesanan,pemesanan.kode_pemesanan,pemesanan.jumlah_pemesanan,pemesanan.total_bayar,pemesanan.status_pemesanan,pemesanan.catatan, pemesanan.no_resi ,pemesanan.tanggal_pemesanan, member.*, paket.*, designer.*, pembayaran.*,bank.*,kategori.*')
			->join('member', 'member.id_member=pemesanan.id_member')
			->join('paket', 'paket.id_paket=pemesanan.id_paket')
			->join('kategori', 'paket.id_kategori=kategori.id_kategori')
			->join('designer', 'designer.id_designer=pemesanan.id_designer', 'left')
			->join('pembayaran', 'pemesanan.id_pemesanan=pembayaran.id_pemesanan')
			->join('bank', 'bank.id_bank=pembayaran.id_bank')->get('pemesanan');
		return $query->result();
	}
	public function get_all_data_by_member($id_member)
	{
		$query = $this->db->select('pemesanan.id_pemesanan,pemesanan.kode_pemesanan,pemesanan.jumlah_pemesanan,pemesanan.total_bayar,pemesanan.status_pemesanan,pemesanan.catatan, pemesanan.no_resi ,pemesanan.tanggal_pemesanan, member.*, paket.*, designer.*, pembayaran.*,bank.*,kategori.*')
			->join('member', 'member.id_member=pemesanan.id_member')
			->join('paket', 'paket.id_paket=pemesanan.id_paket')
			->join('kategori', 'paket.id_kategori=kategori.id_kategori')
			->join('designer', 'designer.id_designer=pemesanan.id_designer', 'left')
			->join('pembayaran', 'pemesanan.id_pemesanan=pembayaran.id_pemesanan')
			->join('bank', 'bank.id_bank=pembayaran.id_bank')->where('pemesanan.id_member', $id_member)->get('pemesanan');
		return $query->result();
	}
	public function kode_pemesanan()
	{
		$this->db->select('Right(pemesanan.kode_pemesanan,5) as kode ', false);
		$this->db->order_by('kode_pemesanan', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('pemesanan');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodejadi  = "ORD" . $kodemax;
		return $kodejadi;
	}
}
