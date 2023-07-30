<?php

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_auth');
    }

    public function index()
    {
        $this->load->view('login'); 
    }
    public function prosesLogin(){
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $cek = $this->M_auth->cekLogin($email, $password);
        $row = $cek->row();
        $total = $cek->num_rows();

        if ($total > 0){
            $this->session->set_userdata(
                [
                    'Email'=> $row->email,
                    'Name'=> $row->nama_user,
                    'Level'=> $row->level,
                    'Status'=> 'sudahLogin'
                ]
            );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Login Berhasil</div>');
            redirect('admin','refresh');
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Login Gagal</div>');
            redirect('auth/','refresh');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/','refresh');
    }
}