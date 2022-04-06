<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_peminjam extends CI_Model
 {
    public function Semuadata()
        {
           return $this->db->get('tabel_peminjam')->result_array();
        }

        public function proses_tambah_peminjam()
           {
            $no_transaksi= $this->input->post('no_transaksi');
            $no_mahasiswa = $this->input->post('no_mahasiswa');
            $nama= $this->input->post('nama');
            $kelas= $this->input->post('kelas');
            $status = $this->input->post('status');
            $kode_buku= $this->input->post('kode_buku');
            $judulbuku = $this->input->post('judulbuku');
            $pengarang = $this->input->post('pengarang');
            $penerbit = $this->input->post('penerbit');
            $tgl_pinjam = $this->input->post('tgl_pinjam');
            $tgl_harus_kembali = $this->input->post('tgl_harus kembali');
           
            $data = array(
               'no_transaksi' => $no_transaksi,
               'no_mahasiswa' => $no_mahasiswa,
               'nama' => $nama,
               'kelas' => $kelas,
               'status' => $status,
               'kode_buku' => $kode_buku,
               'judul_buku' => $judul_buku,
               'pengarang' => $pengarang,
               'penerbit' => $penerbit,
               'tgl_pimjam' => $tgl_pimjam,
               'tgl_harus_kembali' => $tgl_harus_kembali
               );
            $this->db->insert('tabel_peminjam',$data);

           }
       public function hapus_anggota($no_transaksi)
           {
            $this->db->where('no_transaksi', $no_transaksi);
            $this->db->delete('tabel_peminjam');            
           }
        
 }









