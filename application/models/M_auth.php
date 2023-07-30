<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_auth extends CI_model
{
    public function cekLogin($email, $password){
        return $this->db->get_where('user', ['email'=> $email, 'password'=> $password]);
    }
}