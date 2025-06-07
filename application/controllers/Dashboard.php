<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends MY_Controller{
    public function index(){
        $data['content']='<h1>Welcome to PT Maju Jaya</h1>';
        $this->load->view('templates/header');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
