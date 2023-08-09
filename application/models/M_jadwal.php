<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class M_jadwal extends CI_model
{
    public function get_jadwal_bulanan(){
        $query = $this->db->get_where('jadwal', array('kategori_jadwal' => 'bulanan'));
        return $query->result();
    }
    public function get_jadwal_event(){
        $query = $this->db->get_where('jadwal', array('kategori_jadwal' => 'event'));
        return $query->result();
    }
    public function get_jadwalAll(){
        $query = $this->db->get('jadwal');
        return $query->result();
    }
    public function tambah_jadwal($data){
        $this->db->insert('jadwal', $data);
        return $this->db->insert_id();
    }
    public function get_jadwal_by_id($id_jadwal) {
        $this->db->where('id_jadwal', $id_jadwal);
        return $this->db->get('jadwal')->row();
    }

    public function update_jadwal($id_jadwal, $data) {
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->update('jadwal', $data);
    }
    public function hapus_jadwal($id){
        $this->db->where('id_jadwal', $id);
        $this->db->delete('jadwal');
        return $this->db->affected_rows();
    }
}