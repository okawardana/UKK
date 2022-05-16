<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtamu extends CI_Model {

	public function fasId()
	{
        $this->db->select('f_kamar');
        $this->db->where('id_kamar', $_GET['id']);
		$this->db->get('')->result();
	}

	public function random_string($length_of_string)
	{
		$string_result ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		return substr(str_shuffle($string_result), 0, $length_of_string);
	}

	public function pesankamar($datapesanan)
	{
		$total_harga = $datapesanan[0]->harga * $_POST['jml_kamar'];
		$data = array(
			'id_pemesanan' => $_POST['id_pemesanan'],
			'nama_pemesan' => $_POST['nama_pemesan'],
			'email' => $_POST['email'],
			'no_hp' => $_POST['no_hp'],
			'nama_tamu' => $_POST['nama_tamu'],
			'id_kamar' => $_POST['id_kamar'],
			'tgl_cekin' => $_POST['tgl_cekin'],
			'tgl_cekout' => $_POST['tgl_cekout'],
			'jml_kamar' => $_POST['jml_kamar'],
			'T_harga' => $total_harga,
			'PayBy' => $_POST['PayBy'],
			'PayEND' => 0,
			'Status' => '',
			'RefPB' => $_POST['RefPB']
			
	);
	
	$this->db->insert('pemesanan', $data);
	redirect('Tamu/daftarpesanan');
	}

	public function DataPesanan($user)
	{
		$this->db->where('nama_pemesan', $user);
		$data = $this->db->get('pemesanan')->result();
		return $data;
	}

	public function cetakdatabyid($id)
	{
		$this->db->where('id_pemesanan', $id);
		$data = $this->db->get('pemesanan')->result();
		return $data;
	}

	public function batalkanPesanan($id)
	{
		$this->db->delete('pemesanan', array('id_pemesanan' => $id));
	}

	public function dataSelectkamar()
	{
		$data = $this->db->get('tipe_room')->result();
		return $data;
	}
}