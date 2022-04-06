            <?php
            defined('BASEPATH') OR exit('No direct script access allowed');

            class T_pengembalian extends CI_Model
            {
                public function Semuadata()
                    {
                    return $this->db->get('tabel_pengembalian')->result_array();
                    }

                    public function proses_tambah_pengembalian()
                    {
                        $no_transaksi= $this->input->post('no_transaksi');
                        $no_anggota = $this->input->post('no_anggota');
                        $nama= $this->input->post('nama');
                        $kelas= $this->input->post('kelas');
                        $status = $this->input->post('status');
                        $kode_buku= $this->input->post('kode_buku');
                        $judulbuku = $this->input->post('judulbuku');
                        $pengarang = $this->input->post('pengarang');
                        $penerbit = $this->input->post('penerbit');
                        $tgl_pinjam = $this->input->post('tgl_pinjam');
                        $tgl_harus_kembali = $this->input->post('tgl_harus kembali');
                        $tgl_kembali= $this->input->post('tgl_kembali');
                        $terlambat= $this->input->post('terlambat');
                        $jumlah_bayar= $this->input->post('jumlah_bayar');
                    
                        $data = array(
                        'no_transaksi' => $no_transaksi,
                        'no_anggota' => $no_anggota,
                        'nama' => $nama,
                        'kelas' => $kelas,
                        'status' => $status,
                        'kode_buku' => $kode_buku,
                        'judul_buku' => $judul_buku,
                        'pengarang' => $pengarang,
                        'penerbit' => $penerbit,
                        'tgl_pimjam' => $tgl_pimjam,
                        'tgl_harus_kembali' => $tgl_harus_kembali,
                        'tgl_kembali' => $tgl_kembali,
                        'terlambat' => $terlambat,
                        'jumlah_bayar' => $jumlah_bayar
                        );
                        $this->db->insert('tabel_pengembalian',$data);

                    }
                public function hapus_pengembalian($no_transaksi)
                    {
                        $this->db->where('no_transaksi', $no_transaksi);
                        $this->db->delete('tabel_pengembalian');            
                    }
                    
            }
