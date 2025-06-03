<?php
class m_hello extends CI_Model{
    var $halo="Hello World";
    function katakata(){
        $kalimat=$this->halo. "ini dari model";
        return $kalimat;
    }
}