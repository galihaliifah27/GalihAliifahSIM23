<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('laporan_model');
    }

    public function index() {
        // Form laporan (kalau ada halaman form terpisah)
        $this->load->view('templates/header');
        $this->load->view('laporan/form_laporan');
        $this->load->view('templates/footer');
    }

    public function cetak_laporan() {
        // Ambil input dari form
        $tanggal_awal = $this->input->post('tanggal_dari');
        $tanggal_akhir = $this->input->post('tanggal_sampai');

        // Ambil data laporan dari model sesuai filter tanggal
        $data['laporan'] = $this->laporan_model->get_laporan($tanggal_awal, $tanggal_akhir);

        // Kirim data tanggal untuk ditampilkan di view
        $data['tanggal_awal'] = $tanggal_awal;
        $data['tanggal_akhir'] = $tanggal_akhir;

        // Load view hasil laporan
        $this->load->view('templates/header');
        $this->load->view('laporan/hasil_laporan', $data);
        $this->load->view('templates/footer');
    }
}