<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Transaksi Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Transaksi Mahasiswa';

        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('kamar', 'Kamar', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('jenis_layanan', 'Jenis Layanan', 'required');
        $this->form_validation->set_rules('berat_kg', 'Berat', 'required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('metode_pembayaran', 'Metode Pembayaran', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataTransaksiMahasiswa();
            $this->session->set_flashdata('flash', 'data added successfully');
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataTransaksiMahasiswa($id);
        $this->session->set_flashdata('flash', 'data deleted successfully');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Transaksi Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Form Edit Data Transaksi Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('kamar', 'Kamar', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('jenis_layanan', 'Jenis Layanan', 'required');
        $this->form_validation->set_rules('berat_kg', 'Berat', 'required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('metode_pembayaran', 'Metode Pembayaran', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->editDataTransaksiMahasiswa();
            $this->session->set_flashdata('flash', 'Data editing was successful');
            redirect('mahasiswa');
        }
    }

    public function about()
    {
        $data['judul'] = 'About - Sistem Laundry Asrama';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/about', $data);
        $this->load->view('templates/footer');
    }
}
