<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // CEK LOGIN SEKALI DI SINI
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama']  = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
