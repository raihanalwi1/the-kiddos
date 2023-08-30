<?php
class M_review extends CI_Model {

    public function getReviews() {
        $query = $this->db->get('reviews');
        return $query->result_array();
    }
    public function get_reviews() {
        $query = $this->db->get('reviews');
        return $query->result();
    }
    public function tambah_review($data){
        $this->db->insert('reviews', $data);
        return $this->db->insert_id();
    }
    public function hapus_review($id){
        $this->db->where('id_review', $id);
        $this->db->delete('reviews');
        return $this->db->affected_rows();
    }
}

?>