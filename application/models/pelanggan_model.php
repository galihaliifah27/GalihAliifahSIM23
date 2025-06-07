<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

    public function get_all_pelanggan() {
        return $this->db->get('pelanggan')->result_array();
    }

    public function insert_pelanggan($data) {
        return $this->db->insert('pelanggan', $data);
    }

    public function delete_pelanggan($id) {
        return $this->db->delete('pelanggan', ['idpelanggan' => $id]);
    }

    public function get_pelanggan_by_id($id) {
        return $this->db->get_where('pelanggan', ['idpelanggan' => $id])->row_array();
    }

    public function update_pelanggan($id, $data) {
        $this->db->where('idpelanggan', $id);
        return $this->db->update('pelanggan', $data);
    }
}