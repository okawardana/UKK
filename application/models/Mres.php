<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mres extends CI_Model {

    public function datapesanan()
    {
       $data = $this->db->get('pemesanan')->result();
       return $data;
    }

    public function ubahdata($status, $id)
    {
        $data = array(
            'Status' => $status
        );
    
        $this->db->where('id_pemesanan', $id);
        $this->db->update('pemesanan', $data);
    }

}