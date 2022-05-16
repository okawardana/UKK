<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('Mres');
    }
    public function dafpes()
    {
        $data['datapes'] = $this->Mres->datapesanan();
        // var_dump($data['datapes']);die;
        $this->load->view('Resepsionis/Daftarpesanan', $data);
    }

    public function gantistatus()
    {
        $data['id'] = $_GET['id'];
        // var_dump($id);die;
        $this->load->view('Resepsionis/gantistatus', $data);
    }

    public function ubahdatapesanan()
    {
        $status = $_POST['Status'];
        $id =  $_GET['id'];
       $this->Mres->ubahdata($status, $id);
       redirect('Resepsionis/dafpes');
    }

    public function cetak()
	{
        $data['datapes'] = $this->Mres->datapesanan();
		$this->load->view('Resepsionis/cetak', $data);
	}

}