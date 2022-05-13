<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
    public function detailTipe()
    {
        
            $this->load->model('MTamu');
            $query['DataKamById'] = $this->MTamu->getkamarbyid();
            $query['DataFasById'] = $this->MTamu->getfasbyid();
            $this->load->view('Tamu/detailFKamar', [
                'data' => $query
            ]);
        
    }

    public function pesanKamar()
    {
        if (empty($_SESSION['user'])) {
            $this->load->view('Auth/login');
        }else {
            $this->load->model('MTamu');
            $query['Kamar'] = $this->MTamu->getAll();
            // $query['DataKamById'] = $this->MTamu->getkamarbyid();
            $query['user'] = $_SESSION['user']; 
            
            $this->load->view('Tamu/book', [
                'data' => $query
            ]);
        }
    }

    public function booknow()
    {
        

        
            $this->load->model('MTamu');
            $query['Kamar'] = $this->MTamu->getAll();
            $query['DataKamById'] = $this->MTamu->getkamarbyid();
            $query['user'] = $_SESSION['user']; 
            $query['datakiriman'] = $_POST;

            // var_dump($query['datakiriman']);
            $this->load->view('Tamu/book', [
                'data' => $query
            ]);
        
            
        
    }

    public function ref()
    {
        
            $this->load->model('MTamu');
            $query['book'] = $this->MTamu->dataRef();
            
            $this->load->view('Tamu/ref', [
                'data' => $query
            ]);
        
    }

    public function prosBook()
    {
      
            $this->load->model('MTamu');
            $query['storeData'] = $this->MTamu->storeProsbook();
            
            redirect('/Tamu/ref');
        
    }

    public function formpemesanan()
    {
        
            $this->load->model('MTamu');
            $query = $this->MTamu->getAll();

            foreach ($query as $key => $kamar) {
                $data[$key] = array(
                    'Info_kamar' => $kamar,
                   
                );
            }
            $this->load->view('Tamu/Kamar', [
                'data' => $data
            ]);

    }

    public function Home()
    {
        $this->load->view('Tamu/Home');
    }

    public function Fasilitas()
    {
       
            $this->load->model('MTamu');
            // $this->load->library('pagination');

            // $config['base_url'] = 'http://localhost/hotel_oka/Tamu/Fasilitas/';
            // $config['total_rows'] = $this->MTamu->hitungSemuaData();
            // $config['per_page'] = 6;

            // $this->pagination->initialize($config);

            // $query['start'] = $this->uri->segment(3);
            $query['F_kamar'] = $this->MTamu->dataFkamar();
            $query['F_Hotel'] = $this->MTamu->dataFhotel();
            
            $this->load->view('Tamu/Fasilitas', [
                'data' => $query
            ]);
        
    }

    public function cetak()
    {
        $this->load->view('Tamu/cetak');
    }

    public function Logout()
    {   
        $this->session->sess_destroy();
        redirect('Tamu/Home', 'refresh');
    }

}
