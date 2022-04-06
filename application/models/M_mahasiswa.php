<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
 {
    public function Semuadata()
        {
           return $this->db->get('mahasiswa')->result_array();
        }

        public function proses_tambah_data()
           {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
           
            $data = array(
               'nama' => $nama,
               'alamat' => $alamat
               );
            $this->db->insert('mahasiswa',$data);

           }
       public function hapus_data($id_mahasiswa)
           {
            $this->db->where('id_mahasiswa', $id_mahasiswa);
            $this->db->delete('mahasiswa');            
           }
        
 }









