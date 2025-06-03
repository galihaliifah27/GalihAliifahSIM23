<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Berita extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model');
       // $this->load->library('session');
    }

    public function index() {
        $data['berita'] = $this->Berita_model->get_all_berita();
        $this->load->view('templates/header');
        $this->load->view('berita/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $this->load->model('Kategori_model');
        $data['kategori_berita'] = $this->Kategori_model->get_all();
        $data['berita']=$this->Berita_model->get_all_berita();
        $this->load->view('templates/header');
        $this->load->view('berita/form_berita', $data);
        $this->load->view('templates/footer');
    }
    public function insert(){
        $judul = $this->input->post('judul');
        $kategori= $this->input->post('kategori');
        $headline=$this->input->post('headline');
        $isi=$this->input->post('isi_berita');
        $pengirim=$this->input->post('pengirim');
		$tgl_publish=$this->input->post('tgl_publish');

        $data=array(
            'judul'=> $judul,
            'kategori'=>$kategori,
            'headline'=>$headline,
            'isi_berita'=>$isi,
            'pengirim'=>$pengirim,
			'tanggal_publish'=>$tgl_publish
        );
        $result= $this->Berita_model->insert_berita($data);

        if($result){
            $this->session->set_flashdata('success', 'Berita berhasil disimpan');
            redirect('berita');
        }else{
            $this->session->set_flashdata('error', 'gagal menyimpan berita');
            redirect('berita');
        }
    }
    public function upload_summernote_image() {
        $config['upload_path'] = './uploads/summernote/'; // Folder untuk gambar Summernote
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048;
        $config['file_name'] = random_string('alnum', 16);

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $response = array(
                'error' => $this->upload->display_errors('', '')
            );
            echo json_encode($response);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $file_url = base_url('uploads/summernote/' . $file_name);

            $response = array(
                'url' => $file_url
            );
            echo json_encode($response);
        }
    }
    public function hapus($idberita){
        $this->Berita_model->delete_berita($idberita);
        redirect('berita');
    }
    public function edit($idberita){
        $data['berita']=$this->Berita_model->get_berita_by_id($idberita);
        $this->load->view('templates/header');
        $this->load->view('berita/edit_berita',$data);
        $this->load->view('templates/footer');
    }
    public function update($id) {
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('headline', 'headline', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi', 'required');
        $this->form_validation->set_rules('pengirim', 'pengirim', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->index($id);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'kategori' => $this->input->post('kategori'),
                'headline' => $this->input->post('headline'),
                'isi_berita' => $this->input->post('isi_berita'),
                'pengirim' => $this->input->post('pengirim')
            ];
            $this->Berita_model->update_berita($id, $data);
            redirect('berita');
        }
    }
    public function laporan()
    {
     $this->load->view('templates/header');
    $this->load->view('berita/laporan_form');
    $this->load->view('templates/footer');
    }

    public function cetak_laporan()
    {
    $tanggal_dari = $this->input->post('tanggal_dari');
    $tanggal_sampai = $this->input->post('tanggal_sampai');

    $data['berita'] = $this->Berita_model->get_laporan_berita($tanggal_dari, $tanggal_sampai);
    $data['tanggal_dari'] = $tanggal_dari;
    $data['tanggal_sampai'] = $tanggal_sampai;
    // print_r($data);
    $this->load->view('templates/header');
    $this->load->view('berita/laporan_hasil', $data);
    $this->load->view('templates/footer');
    }

}