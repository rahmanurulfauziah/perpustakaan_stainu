<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_mahasiswa');
        $this->load->model('T_anggota');
        $this->load->model('T_buku');
        $this->load->model('T_peminjam');
        $this->load->model('T_pengembalian');
    }
    public function index()
   {
	$this->load->view('login');
   }
    public function mhs()
    {
        $data['mahasiswa'] = $this->M_mahasiswa->Semuadata();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('template/index',$data);
        $this->load->view('template/footer');
    }
    
    public function tambah_data()
    {
        // $data['mahasiswa'] = $this->M_mahasiswa->Semuadata();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('home/tambah_data');
        $this->load->view('template/footer');
    }

    function proses_tambah_data()
    {
	
	 $this->M_mahasiswa->proses_tambah_data();
     redirect('home/mhs');
	
   }
   function hapus_data($id_mahasiswa)
   {
	$this->M_mahasiswa->hapus_data($id_mahasiswa);
    redirect('home/mhs');
   }


    public function anggota()
    {
        $data['anggota'] = $this->T_anggota->Semuadata();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('anggota',$data);
        $this->load->view('template/footer');
    }
    
    public function tambah_anggota()
    {
        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('home/tambah_anggota');
        $this->load->view('template/footer');
    }

    function proses_tambah_anggota()
    {
	
	 $this->T_anggota->proses_tambah_anggota();
     redirect('home/anggota');
	
   }
   function hapus_anggota($T_anggota)
   {
	$this->T_anggota->hapus_anggota($T_anggota);
    redirect('home/anggota');
   }

    public function buku()
    {
        $data['buku'] = $this->T_buku->Semuadata();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('template/buku',$data);
        $this->load->view('template/footer');
    }

    public function tambah_buku()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('home/tambah_buku');
        $this->load->view('template/footer');
    }
    function proses_tambah_buku()
    {
    
    $this->T_buku->proses_tambah_buku();
    redirect('home/buku');
    
    }
    function hapus_buku($T_buku)
    {
    $this->T_buku->hapus_buku($T_buku);
    redirect('home/buku');
    }

    public function peminjam()
    {
        $data['peminjam'] = $this->T_peminjam->Semuadata();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('template/peminjam',$data);
        $this->load->view('template/footer');
    }
    public function tambah_peminjam()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('home/tambah_peminjam');
        $this->load->view('template/footer');
    }
    function proses_tambah_peminjam()
    {
    
    $this->T_peminjam->proses_tambah_peminjam();
    redirect('home/peminjam');
    
    }
    function hapus_peminjam($T_peminjam)
    {
    $this->T_peminjam->hapus_peminjam($T_peminjam);
    redirect('home/peminjam');
    }
    
    public function pengembalian()
    {
        $data['pengembalian'] = $this->T_pengembalian->Semuadata();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('template/pengembalian',$data);
        $this->load->view('template/footer');
    }
    public function tambah_pengembalian()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('home/tambah_pengembalian');
        $this->load->view('template/footer');
    }
    function proses_tambah_pengembalian()
    {
    
    $this->T_pengembalian->proses_tambah_pengembalian();
    redirect('home/pengembalian');
    
    }
    function hapus_pengembalian($T_pengembalian)
    {
    $this->T_pengembalian->hapus_pengembalian($T_pengembalian);
    redirect('home/pengembalian');
    }
}