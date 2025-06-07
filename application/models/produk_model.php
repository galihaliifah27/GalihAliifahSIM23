<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function get_all_produk(){
        return $this->db->get('produk')->result_array();
    }

    public function insert_produk($data){
        return $this->db->insert('produk', $data);
    }

    public function get_produk_by_id($idproduk){
        return $this->db->get_where('produk', ['idproduk' => $idproduk])->row_array();
    }

    public function update_produk($idproduk, $data){
        $this->db->where('idproduk', $idproduk);
        return $this->db->update('produk', $data);
    }

    public function delete_produk($idproduk){
        return $this->db->delete('produk', ['idproduk' => $idproduk]);
    }
}