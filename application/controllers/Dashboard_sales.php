<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_user extends MY_Controller{
    public function index () {
        $data['content']= '<h1> Welcome to Adminlte 3 Dashboard Sales</h1>';
        $this->load->view('templates/header');
        $this->load->view('dashboard_sales', $data);
        $this->load->view('templates/footer');
    }
}