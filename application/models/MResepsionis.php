<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MResepsionis extends CI_Model {
    public function getAllPesanan()
    {
        $data = $this->db->get('pemesanan');
        return $data->result();
    }

    public function ubahData($id)
    {
        // var_dump($id);die;
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->where('id', $id);
        $query = $this->db->get()->result();
        return $query;
    }

    public function storeDataPesanan($id, $dataPesanan)
    {
        var_dump($dataPesanan);
        $this->db->select('*');
        $this->db->from('pemesanan');
        $query = $this->db->get()->result();
        $data = array(
            'Status' =>  $dataPesanan['Status']
        );
        $this->db->where('id', $id);
        $this->db->update('pemesanan', $data);
    }
}
?>