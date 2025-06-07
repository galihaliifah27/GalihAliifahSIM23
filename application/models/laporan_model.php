<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {
    public function get_laporan($tanggal_awal, $tanggal_akhir) {
        $this->db->select('so.tanggal_order, s.nama_sales, p.nama_produk, so.jumlah, so.total_harga');
        $this->db->from('sales_order so');
        $this->db->join('sales s', 'so.idsales = s.idsales');
        $this->db->join('produk p', 'so.idproduk = p.idproduk');
        $this->db->where('so.tanggal_order >=', $tanggal_awal);
        $this->db->where('so.tanggal_order <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }
}