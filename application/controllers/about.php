<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'About Us';

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/about', $data);
        $this->load->view('templates/footer');
    }
}
