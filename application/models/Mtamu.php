<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MTamu extends CI_Model {

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('Tipe_room');
        $query = $this->db->get();
        return $query->result();
    }
    public function dataFkamar()
    {
        $query = $this->db->get('f_kamar');
        return $query->result();  
    }

    public function dataFhotel()
    {
        $this->db->select('*');
        $this->db->from('f_hotel');
        $query = $this->db->get();
        return $query->result(); 
    }
    
    public function detailFKamar()
    {
        $this->db->select('*');
        $this->db->from('Tipe_room');
        $this->db->join('f_kamar', 'f_kamar.id_kamar = tipe_kamar.id_kamar');
        $this->db->where('id_kamar', $_GET['id']);
        $query = $this->db->get();
        return $query->result();
    }

    public function getkamarbyid()
    {
        $this->db->select('*');
        $this->db->from('Tipe_room');
        $this->db->where('id_kamar', $_GET['id']);
        $query = $this->db->get();
        return $query->result();
    }
    public function getfasbyid()
    {
        $this->db->select('*');
        $this->db->from('f_kamar');
        $this->db->where('id_kamar', $_GET['id']);
        $query = $this->db->get();
        return $query->result();
    }

    public function storeProsbook()
    {
        $query = $this->db->get('tipe_room')->result();
        $total_harga = $_POST['jml_kamar'] *$query[0]->harga;
            $data = array(
                'nama_pemesan' => $_POST['nama_pemesan'],
                'email' => $_POST['email'],
                'no_hp' => $_POST['no_hp'],
                'nama_tamu' => $_POST['nama_tamu'],
                'id_kamar' => $_POST['id_kamar'],
                'tgl_cekin' => $_POST['tgl_cekin'],
                'tgl_cekout' => $_POST['tgl_cekout'],
                'jml_kamar' => $_POST['jml_kamar'],
                'Harga' => $total_harga,
                'PayBay' => $_POST['PayBay'],
                'PayEND' => 0,
                'Nomor_Kamar' => 0,
                'RefPB' => date('mdy').$_POST['PayBay'].
                date('His')
            );
            $this->db->insert('pemesanan', $data);
    }

    public function dataRef()
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->where('nama_pemesan', $_SESSION['user']->Nama);
        $this->db->join('tipe_room', 'Tipe_room.id_kamar = pemesanan.id_kamar');
        return $query = $this->db->get()->result();
    }

}
?>