<?php
class C_v_m_hellocss extends CI_Controller{
    function index(){
        $this->load->model("m_hello");
        $data=array();
        $data["halo"]=$this->m_hello->katakata();
        $this->load->view("v_c_v_hellovarcss",$data);
        }
}