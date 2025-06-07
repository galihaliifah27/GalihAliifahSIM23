<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_model extends CI_Model {

    public function get_all_sales() {
        return $this->db->get('sales')->result_array();
    }

    public function insert_sales($data) {
        return $this->db->insert('sales', $data);
    }

    public function delete_sales($id) {
        return $this->db->delete('sales', ['idsales' => $id]);
    }

    public function get_sales_by_id($id) {
        return $this->db->get_where('sales', ['idsales' => $id])->row_array();
    }

    public function update_sales($id, $data) {
        $this->db->where('idsales', $id);
        return $this->db->update('sales', $data);
    }
    }
