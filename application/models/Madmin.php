<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

   public function kamar()
   {
    $query = $this->db->get('tipe_room')->result();
    return $query;
   }

   public function ubka($id)
   {
    // var_dump($id);die;
    $this->db->where('id_kamar', $id);
       $data = $this->db->get('tipe_room')->result();
       return $data;
   }

   public function kirimdata($kirim)
   {
       $data = array(
           'Nama_room' => $kirim['Nama_room'],
           'harga' => $kirim['harga'],
           'Stok' => $kirim['Stok'],
           'img_room' => $kirim['img_room']
        );
        
        // var_dump($kirim['id_kamar']);die;
        $this->db->where('id_kamar', $kirim['id_kamar']);
    $this->db->update('tipe_room', $data);
    redirect('Admin/kamar');
   }

   public function Hapus($id)
   {
    $this->db->delete('tipe_room', array('id_kamar' => $id));
    redirect('Admin/kamar');
   }

   public function tkamar($tambah)
   {
    //    var_dump($tambah['Nama_room']);die;
    $data = array(
        'Nama_room' => $tambah['Nama_room'],
        'Stok' => $tambah['Stok'],
        'harga' => $tambah['harga'],
        'img_room' => $tambah['img_room']
);

$this->db->insert('tipe_room', $data);
redirect('Admin/Kamar');
   }

   public function faskamar()
   {
    $this->db->select('*');
    $this->db->from('f_kamar');
    $this->db->join('tipe_room', 'tipe_room.id_kamar = f_kamar.id_kamar');
    $data = $this->db->get()->result();
    // var_dump($id);die;
       return $data;
   }

   public function ufka($id)
   {
    $this->db->select('*');
    $this->db->from('f_kamar');
    $this->db->join('tipe_room', 'tipe_room.id_kamar = f_kamar.id_kamar');
    $this->db->where('id_fkamar', $id);
    $data = $this->db->get()->result();
    // var_dump($id);die;
       return $data;
   }

   public function datakamar()
   {
        $data = $this->db->get('tipe_room')->result(); 
        return $data;  
   }

   public function kirimdatafkamar($kirimfkamar)
   {
    $data = array(
        'id_kamar' => $kirimfkamar['id_kamar'],
        'nama_fasilitas' => $kirimfkamar['nama_fasilitas'],
        'kategory' => $kirimfkamar['kategory'],
        'img' => $kirimfkamar['img']
     );
     
     // var_dump($kirim['id_kamar']);die;
     $this->db->where('id_fkamar', $kirimfkamar['id_fkamar']);
 $this->db->update('f_kamar', $data);
 redirect('Admin/Faskamar');
   }

   public function Hapusfkamar($id)
   {
    // var_dump($id);die;
    $this->db->delete('f_kamar', array('id_fkamar' => $id));
    redirect('Admin/Faskamar');
   }

   public function tfkamar($tambah)
   {
    //    var_dump($tambah['Nama_room']);die;
    $data = array(
        'id_fkamar' => $tambah['id_fkamar'],
        'id_kamar' => $tambah['id_kamar'],
        'nama_fasilitas' => $tambah['nama_fasilitas'],
        'kategory' => $tambah['kategory'],
        'img' => $tambah['img']
);

$this->db->insert('f_kamar', $data);
redirect('Admin/Faskamar');
   }

   public function fashotel()
   {
    $data = $this->db->get('f_hotel')->result();
    // var_dump($id);die;
       return $data;
   }

   public function ufho($id)
   {
    $this->db->where('id', $id);
    $data = $this->db->get('f_hotel')->result();
    // var_dump($id);die;
       return $data;
   }

   public function kirimdatafhotel($kirimfhotel)
   {
    $data = array(
        'nama_fasilitas' => $kirimfhotel['nama_fasilitas'],
        'img' => $kirimfhotel['img'],
        'deks' => $kirimfhotel['deks']
     );
     
     // var_dump($kirim['id_kamar']);die;
     $this->db->where('id', $kirimfhotel['id']);
    $this->db->update('f_hotel', $data);
    redirect('Admin/Fashotel');
   }

   public function Hapusfhotel($id)
   {
    // var_dump($id);die;
    $this->db->delete('f_hotel', array('id' => $id));
    redirect('Admin/Fashotel');
   }

}