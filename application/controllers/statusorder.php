<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statusorder extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Statusorder_model');
        $this->load->library('form_validation');
    }

    // Tampilkan daftar status order
    public function index() {
        $data['status_order'] = $this->Statusorder_model->get_all_status();
        $this->load->view('templates/header');
        $this->load->view('statusorder/index', $data);
        $this->load->view('templates/footer');
    }

    // Tampilkan form tambah
    public function tambah() {
        $this->load->view('templates/header');
        $this->load->view('statusorder/form_status');
        $this->load->view('templates/footer');
    }

    // Simpan data status order
    public function insert() {
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $status = $this->input->post('status');
            $data = ['status' => $status];

            if ($this->Statusorder_model->insert_status($data)) {
                $this->session->set_flashdata('success', 'Status berhasil disimpan');
            } else {
                $this->session->set_flashdata('error', 'Gagal menyimpan status');
            }
            redirect('statusorder');
        }
    }

    // Tampilkan form edit
    public function edit($id) {
        $data['status_order'] = $this->Statusorder_model->get_status_by_id($id);

        if (!$data['status_order']) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('statusorder/edit_status', $data);
        $this->load->view('templates/footer');
    }

    // Update data status order
    public function update($id) {
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = ['status' => $this->input->post('status')];
            $this->Statusorder_model->update_status($id, $data);
            $this->session->set_flashdata('success', 'Status berhasil diperbarui');
            redirect('statusorder');
        }
    }

    // Hapus status order
    public function hapus($idstatus) {
        if ($this->Statusorder_model->delete_status($idstatus)) {
            $this->session->set_flashdata('success', 'Status berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus status');
        }
        redirect('statusorder');
    }
}
