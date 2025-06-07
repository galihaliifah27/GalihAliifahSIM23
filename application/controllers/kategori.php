<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class kategori extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kategori_model');
       // $this->load->library('session');
    }

    public function index() {
        $data['kategori_pasien'] = $this->Kategori_model->get_all_kategori();
        $this->load->view('templates/header');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['kategori_pasien']=$this->Kategori_model->get_all_kategori();
        $this->load->view('templates/header');
        $this->load->view('kategori/form_kategori', $data);
        $this->load->view('templates/footer');
    }
    public function insert(){
       
        $kategori= $this->input->post('kategori');
        

        $data=array(
            
            'kategori'=>$kategori
            
        );
        $result= $this->Kategori_model->insert_kategori($data);

        if($result){
            $this->session->set_flashdata('success', 'pasien berhasil disimpan');
            redirect('kategori');
        }else{
            $this->session->set_flashdata('error', 'gagal menyimpan pasien');
            redirect('kategori');
        }
    }
    public function hapus($idkategori){
        $this->Kategori_model->delete_kategori($idkategori);
        redirect('kategori');
    }
    public function edit($idkategori){
        $data['kategori_pasien']=$this->Kategori_model->get_kategori_by_id($idkategori);
        $this->load->view('templates/header');
        $this->load->view('kategori/edit_kategori',$data);
        $this->load->view('templates/footer');
    }
    public function update($id) {
        
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
       

        if ($this->form_validation->run() === FALSE) {
            $this->index($id);
        } else {
            $data = [
                
                'kategori' => $this->input->post('kategori')
                
            ];
            $this->Kategori_model->update_kategori($id, $data);
            redirect('kategori');
        }
    }
}