<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_buku extends CI_Model
 {
    public function Semuadata()
        {
           return $this->db->get('tabel_buku')->result_array();
        }

        public function proses_tambah_buku()
           {
            $id_buku= $this->input->post('nama');
            $nama = $this->input->post('nama');
            $kelas = $this->input->post('kelas');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir= $this->input->post('tgl_lahir');
            $alamat = $this->input->post('alamat');
           
            $data = array(
               'id_buku' => $id_buku,
               'nama' => $nama,
               'kelas' => $kelas,
               'jenis_kelamin' => $jenis_kelamin,
               'tempat_lahir' => $tempat_lahir,
               'tgl_lahir' => $tgl_lahir,
               'alamat' => $alamat
               );
            $this->db->insert('tabel_buku',$data);

           }
       public function hapus_buku($id_buku)
           {
            $this->db->where('id_buku', $id_buku);
            $this->db->delete('tabel_buku');            
           }
        
 }









