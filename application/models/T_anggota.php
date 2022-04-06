<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_anggota extends CI_Model
 {
    public function Semuadata()
        {
           return $this->db->get('tabel_anggota')->result_array();
        }

        public function proses_tambah_anggota()
           {
            $id_anggota= $this->input->post('id_anggota');
            $nama = $this->input->post('nama');
            $kelas= $this->input->post('kelas');
            $jenis_kelamin= $this->input->post('jenis_kelamin');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir= $this->input->post('tgl_lahir');
            $alamat = $this->input->post('alamat');
           
            $data = array(
               'id_anggota' => $id_anggota,
               'nama' => $nama,
               'kelas' => $kelas,
               'jenis_kelamin' => $jenis_kelamin,
               'tempat_lahir' => $tempat_lahir,
               'tgl_masuk' => $tgl_masuk,
               'alamat' => $alamat
               );
            $this->db->insert('tabel_anggota',$data);

           }
       public function hapus_anggota($id_anggota)
           {
            $this->db->where('id_anggota', $id_anggota);
            $this->db->delete('tabel_anggota');            
           }
        
 }









