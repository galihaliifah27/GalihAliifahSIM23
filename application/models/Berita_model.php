<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Berita_model extends CI_Model{
    public function get_all_berita() {
        return $this->db->get('berita')->result_array();
    }
    public function insert_berita($data){
        return $this->db->insert('berita',$data);
    }
    public function delete_berita($idberita){
        return $this->db->delete('berita',['idberita'=>$idberita]);
    }
    public function get_berita_by_id($idberita){
        return $this->db->get_where('berita',['idberita'=>$idberita])->row_array();
    }
    public function update_berita($id, $data) {
        $this->db->where('idberita', $id);
        return $this->db->update('berita', $data);
    }
    public function get_laporan_berita($dari, $sampai)
    {
    $this->db->where('tanggal_publish >=', $dari);
    $this->db->where('tanggal_publish <=', $sampai);
    return $this->db->get('berita')->result();
    }
}