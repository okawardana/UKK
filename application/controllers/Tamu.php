<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Mtamu');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function TipeKamar()
	{
		$tipe_kamar = $this->db->get('tipe_room')->result();
		$data=[];
		foreach ($tipe_kamar as $key => $kamar) {
			$this->db->where('id_fkamar', $kamar->id_kamar);
			$fasilitaskamar = $this->db->get('f_kamar')->result();
			$data[$key]=array(
				'info_kamar'=>$kamar,
				'f_kamar'=>$fasilitaskamar
			);
		}

		$this->load->view('Tamu/Fasilitaskamar',['data'=>$data]);
		
	}

	public function Beranda()
	{
		$this->load->view('Tamu/Beranda');
	}

	public function fkamar()
	{
		// $this->db->select('*');
		// $this->db->from('f_hotel');
		// $this->db->join('f_kamar', 'f_kamar.id_fkamar = f_hotel.id');
		$data['fashotel'] = $this->db->get('f_hotel')->result();
		$data['faskamar'] = $this->db->get('f_kamar')->result();
		// var_dump($data);die;
		$this->load->view('Tamu/Fasilitaskamar', $data);
	}
	
	public function Kamar()
	{
		$tipe_kamar = $this->db->get('tipe_room')->result();
		$data=[];
		foreach ($tipe_kamar as $key => $kamar) {
			$this->db->where('id_kamar', $kamar->id_kamar);
			$fasilitaskamar = $this->db->get('f_kamar')->result();
			$data[$key]=array(
				'info_kamar'=>$kamar,
				'f_kamar'=>$fasilitaskamar
			);
		}

		$this->load->view('Tamu/Kamar',['data'=>$data]);
	}

	public function formpemesanan()
	{
		$data['user'] = $_SESSION['login'];
		$data['a'] = $this->Mtamu->random_string(10);
		$this->load->view('Tamu/formpemesanan', $data);
	}

	public function tambahdatapemesan()
	{
		$this->db->select('*');
		$this->db->from('tipe_room');
		$this->db->where('id_kamar', $_POST['id_kamar']);
		$datapesanan = $this->db->get('')->result();
		$this->Mtamu->pesankamar($datapesanan);
	}

	public function daftarpesanan()
	{
		$user = $_SESSION['login']->Nama;
		$data['pesanan'] = $this->Mtamu->DataPesanan($user);
		// var_dump($data['pesanan']);die; 
		$this->load->view('Tamu/DaftarPesanan', $data);
	}

	public function BatalkanPesanan()
	{
		$id = $_GET['id'];
		$this->Mtamu->batalkanPesanan($id);
		redirect('Tamu/DaftarPesanan');
	}

	public function cetakpdf()
	{
		$id = $_GET['id'];
		// var_dump($id);die;
		$user = $_SESSION['login']->Nama;
		$data['pesanan'] = $this->Mtamu->cetakdatabyid($id);
		// var_dump($data['pesanan']);die; 
		$this->load->view('Tamu/cetak', $data);
	}
}