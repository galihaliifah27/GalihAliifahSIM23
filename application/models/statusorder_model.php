<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statusorder_model extends CI_Model {

    public function get_all_status() {
        return $this->db->get('status_order')->result_array();
    }

    public function insert_status($data) {
        return $this->db->insert('status_order', $data);
    }

    public function get_status_by_id($id) {
        return $this->db->get_where('status_order', ['idstatus' => $id])->row_array();
    }

    public function update_status($id, $data) {
        $this->db->where('idstatus', $id);
        return $this->db->update('status_order', $data);
    }

    public function delete_status($id) {
        return $this->db->delete('status_order', ['idstatus' => $id]);
    }
}