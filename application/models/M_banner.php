<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class M_banner extends CI_model
{
    public function get_banner(){
        $query = $this->db->get_where('banner', array('status' => 'aktif'));
        return $query->result();
    }
}