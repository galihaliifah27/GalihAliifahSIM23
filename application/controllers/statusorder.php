<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statusorder extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Statusorder_model');
    }

    public function index() {
        $data['status_order'] = $this->Statusorder_model->get_all_status();
        $this->load->view('templates/header');
        $this->load->view('statusorder/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->view('templates/header');
        $this->load->view('statusorder/form_status');
        $this->load->view('templates/footer');
    }

    public function insert() {
        $status = $this->input->post('status');
        $data = ['status' => $status];
        $result = $this->Statusorder_model->insert_status($data);

        if ($result) {
            $this->session->set_flashdata('success', 'Status berhasil disimpan');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyimpan status');
        }
        redirect('statusorder');
    }

    public function edit($id) {
        $data['status_order'] = $this->Statusorder_model->get_status_by_id($id);
        $this->load->view('templates/header');
        $this->load->view('statusorder/edit_status', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit($id);
        } else {
            $data = ['status' => $this->input->post('status')];
            $this->Statusorder_model->update_status($id, $data);
            redirect('statusorder');
        }
    }

    public function hapus($idstatus) {
        $this->Statusorder_model->delete_status($idstatus);
        redirect('statusorder');
    }
}