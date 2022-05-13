<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller {
	public function Home()
	{
        $this->load->model('MResepsionis');
        $data['pesanan'] = $this->MResepsionis->getAllPesanan(); 
		$this->load->view('Resepsionis/Home', $data);
	}

	public function ubahDataPesanan()
	{
		$this->load->model('MResepsionis');
		$id = $_GET['id'];
		$data['data'] = $this->MResepsionis->ubahData($id); 
		$this->load->view('Resepsionis/ubahDataPesanan', $data);
	}

	public function storeDataPesanan()
	{
		$dataPesanan = $_POST;
		// var_dump($dataPesanan['Status']);die;
		$this->load->model('MResepsionis');
		$id = $_GET['id'];
		$data['data'] = $this->MResepsionis->storeDataPesanan($id, $dataPesanan); 
		redirect('Resepsionis/Home');
	}
	
	public function cetak()
	{
		$this->load->model('MResepsionis');
        $data['pesanan'] = $this->MResepsionis->getAllPesanan(); 
		$this->load->view('Resepsionis/cetak', $data);
	}
}
