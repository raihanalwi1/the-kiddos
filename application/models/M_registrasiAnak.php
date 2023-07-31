<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class M_registrasiAnak extends CI_model
{
    public function get_register(){
        $query = $this->db->get('tb_registrasi');
        return $query->result();
    }
    public function tambah_register($data){
        $this->db->insert('tb_registrasi', $data);
        return $this->db->insert_id();
    }
    public function get_data_by_id($id){
        $query = $this->db->get_where('tb_registrasi', array('id_registrasi' => $id));
        return $query->row();
    }
    
    public function hapus_registrasi($id){
        $this->db->where('id_registrasi', $id);
        $this->db->delete('tb_registrasi');
        return $this->db->affected_rows();
    }
}