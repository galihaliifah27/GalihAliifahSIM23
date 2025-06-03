<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_berita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeBerita_model');
    }

    public function index()
    {
        $data['berita'] = $this->HomeBerita_model->get_all();
        $this->load->view('layouts/header'); // bagian header AdminLTE
        $this->load->view('home/index', $data); // konten berita
        $this->load->view('layouts/footer'); // bagian footer AdminLTE
    }
    public function detail($id)
{
    $this->load->model('HomeBerita_model');
    $data['berita'] = $this->HomeBerita_model->get_by_id($id);

    if (!$data['berita']) {
        show_404(); // jika ID tidak ditemukan
    }

    $this->load->view('layouts/header');
    $this->load->view('home/detail', $data);
    $this->load->view('layouts/footer');
}
}
