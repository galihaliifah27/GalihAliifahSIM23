<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{
    public function index(){
        $data['content']= '<h1> Welcome to Adminlte 3 in codeigniter 3</h1>';
        $this->load->view('templates/header');
        $this->load->view('templates/blank', $data);
        $this->load->view('templates/footer');
    }
}