<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('Madmin');
    }

    public function kamar()
    {
        $query['k'] = $this->Madmin->kamar();
        $this->load->view('Admin/Kamar', $query);
    }
    
    public function ubahkamar()
    {
        $id = $_GET['id'];
        $data['u'] = $this->Madmin->ubka($id);
       $this->load->view('Admin/ubahkamar', $data);
    }

    public function kirimdata()
    {
        $kirim = $_POST;
        $this->Madmin->kirimdata($kirim);
        
    }

    public function hapus()
    {
        $id = $_GET['id'];
        $data = $this->Madmin->Hapus($id);
    }

    public function Tambahdata()
    {
        $this->load->view('Admin/Tambah');
    }

    public function tkamar()
    {
        $tambah = $_POST;
       $data = $this->Madmin->tkamar($tambah);
    }

    public function Faskamar()
    {
        $query['Fk'] = $this->Madmin->faskamar();
        $this->load->view('Admin/Faskamar',$query);
    }

    public function ubahfkamar()
    {
        $id = $_GET['id'];
        $data['ufk'] = $this->Madmin->ufka($id);
        $data['dataKamar'] = $this->Madmin->datakamar();
       $this->load->view('Admin/ubahfkamar', $data);
    }

    public function kirimdatafkamar()
    {
        $kirimfkamar = $_POST;
        $this->Madmin->kirimdatafkamar($kirimfkamar);
        
    }

    public function hapusfkamar()
    {
        $id = $_GET['id'];
        $data = $this->Madmin->Hapusfkamar($id);
    }

    public function Tambahdatafkamar()
    {
        $data['dataKamar'] = $this->Madmin->datakamar();
        $this->load->view('Admin/Tambahfkamar', $data);
    }

    public function tfkamar()
    {
        $tambah = $_POST;
       $data = $this->Madmin->tfkamar($tambah);
    }

    public function Fashotel()
    {
        $query['Fh'] = $this->Madmin->fashotel();
        $this->load->view('Admin/Fashotel',$query);
    }

    public function ubahfhotel()
    {
        $id = $_GET['id'];
        $data['ufho'] = $this->Madmin->ufho($id);
        // $data['dataKamar'] = $this->Madmin->datakamar();
       $this->load->view('Admin/ubahfhotel', $data);
    }

    public function kirimdatafhotel()
    {
        $kirimfhotel = $_POST;
        $this->Madmin->kirimdatafhotel($kirimfhotel);
        
    }

    public function hapusfhotel()
    {
        $id = $_GET['id'];
        $data = $this->Madmin->Hapusfhotel($id);
    }

}