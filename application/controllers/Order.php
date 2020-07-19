<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
	protected $content;
	protected $template_view;

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->content = 'frontend/bank/';
		$this->template_view = 'frontend/template';
		$this->load->model('Paket_model', 'paket');
		$this->load->model('Pemesanan_model', 'pemesanan');
	}
	public function cart()
	{
		$id_paket = $this->input->get('id_paket');
		$data['paket'] = $this->paket->get_by_id($id_paket);
		$this->load->view('frontend/order', $data);
	}
	public function cart_add()
	{
		if ($this->input->is_ajax_request()) {
			$cek = $this->db->select('cart.*,paket.*,kategori.*')->from('cart')
				->join('paket', 'paket.id_paket=cart.id_paket')
				->join('kategori', 'kategori.id_kategori=paket.id_kategori')
				->where('id_member', $this->session->userdata('id_member'))
				->where('expired_at >=', date('Y-m-d H:i:s'))->get()->num_rows();
			if (!$cek > 0) {
				$post = $this->input->post();
				$data = [
					'id_member' => $this->session->userdata('id_member'),
					'id_paket' => $post['id_paket'],
					'jumlah_beli' => $post['jumlah_beli'],
					'catatan' => $post['catatan'],
					'expired_at' => date('Y-m-d H:i:s', strtotime('+50 minutes', time())),
				];
				$this->db->insert('cart', $data);
				if ($this->db->affected_rows() > 0) {
					$response = ['status' => true, 'message' => 'Checkout Berhasil'];
				} else {
					$response = ['status' => false, 'message' => 'Checkout Gagal'];
				}
			} else {
				$response = ['status' => false, 'message' => 'Keranjang tidak kosong'];
			}
			echo json_encode($response);
		} else {
			show_404();
		}
	}
	public function checkout()
	{
		$cek = $this->db->select('cart.*,paket.*,kategori.*')->from('cart')
			->join('paket', 'paket.id_paket=cart.id_paket')
			->join('kategori', 'kategori.id_kategori=paket.id_kategori')
			->where('id_member', $this->session->userdata('id_member'))
			->where('status', 'cart')
			->where('expired_at >=', date('Y-m-d H:i:s'))->get();
		if ($cek->num_rows() > 0) {
			$data['cart'] = $cek->result();
			$data['bank'] = $this->db->get('bank')->result();
			$this->load->view('frontend/cart', $data);
		} else {
			redirect('home');
		}
	}
	public function hapus_cart($id_cart)
	{

		$where = ['id_cart' => $id_cart];
		$this->db->delete('cart', $where);
		redirect('home');
	}
	public function proses()
	{
		if ($this->input->is_ajax_request()) {
			$post = $this->input->post();
			$cart = $this->db->get_where('cart', ['id_cart' => $post['id_cart']])->row();
			$paket = $this->db->get_where('paket', ['id_paket' => $cart->id_paket])->row();
			$pemesanan = [
				'kode_pemesanan' => $this->pemesanan->kode_pemesanan(),
				'jumlah_pemesanan' => $cart->jumlah_beli,
				'total_bayar' => $paket->harga_paket * $cart->jumlah_beli,
				'status_pemesanan' => 'Belum Dibayar',
				'tanggal_pemesanan' => date('Y-m-d'),
				'catatan' => $cart->catatan,
				'id_member' => $this->session->userdata('id_member'),
				'id_paket' => $cart->id_paket,
			];
			$this->db->insert('pemesanan', $pemesanan);
			$pemesanan_id = $this->db->insert_id();
			if ($this->db->affected_rows() > 0) {
				$pembayaran = [
					'jumlah_bayar' => $pemesanan['total_bayar'],
					'id_pemesanan' => $pemesanan_id,
					'id_bank' => $post['id_bank'],
				];
				$this->db->insert('pembayaran', $pembayaran);
				if ($this->db->affected_rows() > 0) {
					$this->db->delete('cart', ['id_cart' => $post['id_cart']]);
					$response = ['status' => true, 'message' => 'Berhasil', 'id' => $pemesanan_id];
				} else {
					$response = ['status' => false, 'message' => 'Gagal'];
				}
			} else {
				$response = ['status' => false, 'message' => 'Gagal'];
			}
			echo json_encode($response);
		} else {
			show_404();
		}
	}
}
