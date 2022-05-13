<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('MAdmin');
    }

    public function Kamar()
    {
        if ($_SESSION['user']->level == 'admin') {
            // $this->load->library('pagination');

            // $config['base_url'] = 'http://localhost/hotel_oka/Admin/kamar';
            // $config['total_rows'] = $this->MAdmin->hitungSemuaData();
            // $config['per_page'] = 10;

            // $config['full_tag_open'] = '<nav><ul class="pagination ml-4">';
            // $config['full_tag_close'] = '</ul></nav>';
            
            // $config['first_link'] = 'First';
            // $config['first_tag_open'] = '<li class="page-item">';
            // $config['first_tag_close'] = '</li>';
            
            // $config['last_link'] = 'Last';
            // $config['last_tag_open'] = '<li class="page-item">';
            // $config['last_tag_close'] = '</li>';
            
            // $config['next_link'] = 'Next';
            // $config['next_tag_open'] = '<li class="page-item">';
            // $config['next_tag_close'] = '</li>';
            
            // $config['prev_link'] = 'Previous';
            // $config['prev_tag_open'] = '<li class="page-item">';
            // $config['prev_tag_close'] = '</li>';
            
            // $config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
            // $config['cur_tag_close'] = '</a></li>';
            
            // $config['num_tag_open'] = '<li class="page-item">';
            // $config['num_tag_close'] = '</li>';

            // $config['attributes'] = array('class' => 'page-link');
            

            // $this->pagination->initialize($config);

            // $data['start'] = $this->uri->segment(3);
            $data['query'] = $this->MAdmin->getAll();
            $this->load->view('Admin/Kamar', [
                'data' => $data['query']
            ]);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
        
    }

    public function ubahData()
    {
        if ($_SESSION['user']->level == 'admin') {
            $this->db->where('id_kamar', $_GET['id']);
            $tipe_kamar = $this->db->get('Tipe_room')->result(); 
            
            $data = [];
            foreach ($tipe_kamar as $key => $kamar) {
                $this->db->where('id_tipekamar', $kamar->id_kamar);
                // $fasilitaskamar = $this->db->get('F_kamar')->result();
                $data[$key] = array(
                    'Info_kamar' => $kamar,
                );
            }
        $this->load->view('Admin/ubahData', [
            'data' => $data
        ]);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }   
    }

    public function store()
    {
        if ($_SESSION['user']->level == 'admin') {
            $id = $_POST['id'];
            $tipe_kamar = $this->db->get('Tipe_room')->result(); 
            $total_harga = $_POST['Stok'] *$tipe_kamar[0]->harga;
            $data = array(
                'Nama_room' => $_POST['Nama_room'],
                'Stok' => $_POST['Stok'],
                'img_room' => $_POST['img_room'],
                'harga' => $_POST['harga'],
            );
            $this->db->where('id_kamar', $id);
            $this->db->update('tipe_room', $data);
            var_dump($data);
            redirect('/Admin/Kamar');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    public function tambahKamar()
    {
        $this->load->view('Admin/tambahData');
    }

    public function tambahDataKamar()
    {
        // var_dump($_POST);die;
        if ($_SESSION['user']->level == 'admin') {
            $tipe_kamar = $this->db->get('Tipe_room')->result(); 
            $data = array(
                'Nama_room' => $_POST['Nama_room'],
                'Stok' => $_POST['Stok'],
                'img_room' => $_POST['img_room'],
                'harga' => $_POST['harga']
            );
            
            $this->db->insert('tipe_room', $data);
            var_dump($data);
            redirect('/Admin/Kamar');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    // Akhir data kamar 


    /* Fasilitas kamar */ 

    public function FasilitasKamar()
    {
        if ($_SESSION['user']->level == 'admin') {
            // $this->load->library('pagination');

            // $config['base_url'] = 'http://localhost/hotel_ci3/Admin/FasilitasKamar';
            // $config['total_rows'] = $this->MAdmin->hitungSemuaData();
            // $config['per_page'] = 10;

            // $config['full_tag_open'] = '<nav><ul class="pagination ml-4">';
            // $config['full_tag_close'] = '</ul></nav>';
            
            // $config['first_link'] = 'First';
            // $config['first_tag_open'] = '<li class="page-item">';
            // $config['first_tag_close'] = '</li>';
            
            // $config['last_link'] = 'Last';
            // $config['last_tag_open'] = '<li class="page-item">';
            // $config['last_tag_close'] = '</li>';
            
            // $config['next_link'] = 'Next';
            // $config['next_tag_open'] = '<li class="page-item">';
            // $config['next_tag_close'] = '</li>';
            
            // $config['prev_link'] = 'Previous';
            // $config['prev_tag_open'] = '<li class="page-item">';
            // $config['prev_tag_close'] = '</li>';
            
            // $config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
            // $config['cur_tag_close'] = '</a></li>';
            
            // $config['num_tag_open'] = '<li class="page-item">';
            // $config['num_tag_close'] = '</li>';

            // $config['attributes'] = array('class' => 'page-link');
            

            // $this->pagination->initialize($config);

            // $data['start'] = $this->uri->segment(3);
            $tipe_kamar = $data['query'] = $this->MAdmin->getFasKam(/*$config['per_page'], $data['start']*/); 
            $data = [];
            foreach ($tipe_kamar as $key => $kamar) {
                $data[$key] = array(
                    'Info_kamar' => $kamar,
                );
            }
        $this->load->view('Admin/FasilitasKamar', [
            'data' => $data
            
        ]);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }   
        
    }

    public function ubahDataFasKamar()
    {
        if ($_SESSION['user']->level == 'admin') {
            $this->db->where('id_fkamar', $_GET['id']);
            $tipe_kamar = $data['query'] = $this->MAdmin->updateData(); 
            
            $data = [];
            foreach ($tipe_kamar as $key => $kamar) {
                $this->db->where('id_tipekamar', $kamar->id_kamar);
                // $fasilitaskamar = $this->db->get('F_kamar')->result();
                $data[$key] = array(
                    'Info_kamar' => $kamar,
                );
            }
        $this->load->view('Admin/ubahDataFasKamar', [
            'data' => $data
        ]);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }   
    }

    public function storeFasKamar()
    {
        // var_dump($_POST);die;
        if ($_SESSION['user']->level == 'admin') {
            $id = $_POST['id_fkamar'];
            $tipe_kamar = $data['query'] = $this->MAdmin->updateData(); 
            $data = array(
                'id_kamar' => $_POST['id_kamar'],
                'nama_fasilitas' => $_POST['nama_fasilitas'],
                'kategory' => $_POST['kategory'],
                'img' => $_POST['img']

            );
            $this->db->where('id_fkamar', $id);
            $this->db->update('f_kamar', $data);
            var_dump($data);
            redirect('/Admin/FasilitasKamar');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    public function tambahFasKamar()
    {
        $this->load->view('Admin/tambahDataFasKamar');
    }

    public function tambahDataFasKamar()
    {
        if ($_SESSION['user']->level == 'admin') {
            // var_dump($_POST);die;
            // $this->load->model('MAdmin');
            // $tipe_kamar = $data['query'] = $this->MAdmin->getFasKam();  
            $data = array(
                'id_kamar' => $_POST['id_kamar'],
                'nama_fasilitas' => $_POST['nama_fasilitas'],
                'kategory' => $_POST['kategory'],
                'img' => $_POST['img']
            );
            
            $this->db->insert('f_kamar', $data);
            var_dump($data);
            redirect('/Admin/FasilitasKamar');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }
    
    // Akhir fasilitas kamar 

    public function FasilitasHotel()
    {
        $data['query'] = $this->MAdmin->getFasHotel();
        $this->load->view('Admin/FasilitasHotel', $data);
        // var_dump($data);die;
    }

    public function ubahDataFasHotel()
    {
        if ($_SESSION['user']->level == 'admin') {
            $this->db->where('id_fashotel', $_GET['id']);
            $fasHotel = $data['query'] = $this->MAdmin->getFasHotel(); 
            
            $data = [];
            foreach ($fasHotel as $key => $hotel) {
                // $this->db->where('id_fashotel', $hotel->id_kamar);
                // $fasilitaskamar = $this->db->get('F_kamar')->result();
                $data[$key] = array(
                    'Update_Hotel' => $hotel
                );
            }
        $this->load->view('Admin/ubahDataFasHotel', [
            'data' => $data
        ]);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }   
    }

    public function storeFasHotel()
    {
        if ($_SESSION['user']->level == 'admin') {
            $id = $_POST['id_fashotel'];
            $tipe_kamar = $data['query'] = $this->MAdmin->getFasHotel(); 
            $data = array(
                'id_fashotel' => $_POST['id_fashotel'],
                'nama_fashotel' => $_POST['nama_fashotel'],
                'ket_fashotel' => $_POST['ket_fashotel'],
                'gambar' => $_POST['gambar']

            );
            $this->db->where('id_fashotel', $id);
            $this->db->update('f_hotel', $data);
            redirect('/Admin/FasilitasHotel');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    public function tambahFasHotel()
    {
        $this->load->view('Admin/tambahDataFasHotel');
    }

    public function tambahDataFasHotel()
    {
        var_dump($_POST);
        if ($_SESSION['user']->level == 'admin') {
            $data = array(
                'id_fashotel' => $_POST['id_fashotel'],
                'nama_fashotel' => $_POST['nama_fashotel'],
                'ket_fashotel' => $_POST['ket_fashotel'],
                'gambar' => $_POST['gambar']
            );
            
            $this->db->insert('f_hotel', $data);
            redirect('/Admin/FasilitasHotel');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    // public function HapusData($id_kamar)
    // {
    //     $id = array('id_kamar' => $id_kamar);
    //     $this->load->model('MAdmin');
    //     $this->MAdmin->hapusData($id, 'tipe_room');
    //     redirect('Admin/Kamar');
    // }
    
}
