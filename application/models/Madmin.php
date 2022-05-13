<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MAdmin extends CI_Model {

    public function getAll(/* $limit, $start */)
    {
        $query = $this->db->get('Tipe_room');
        return $query->result();
    }

    public function getFasKam()
    {
        
       
        $this->db->select('tipe_room.*');
        $this->db->select('f_kamar.*');
        $this->db->from('tipe_room');
        $this->db->join('f_kamar', 'f_kamar.id_kamar = tipe_room.id_kamar');
        // $this->db->limit($limit, $start);
        $query = $this->db->get()->result();
        // var_dump($query);die;
        return $query;
    }

    public function hitungSemuaData()
    {
        return $this->db->get('f_kamar')->num_rows();
    }

    public function addData()
    {
        # code...
    }

    public function updateData()
    {
        $query = $this->db->get('f_kamar');
        // var_dump($query->result());die;
        return $query->result();
    }

    public function getFasHotel()
    {
        $query = $this->db->get('f_hotel');
        return $query->result();
    }

    public function hapusData($id, $table)
    {
        $this->db->where($id);
        $this->db->delete($table);
    }
}
?>