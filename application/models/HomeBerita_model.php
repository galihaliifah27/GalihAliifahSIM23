<?php
class HomeBerita_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('berita')->result();
    }
    public function get_by_id($id)
{
    return $this->db->get_where('berita', ['idberita' => $id])->row();
}

}
