<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_registrasiAnak');
        if ($this->session->userdata('Status')!= 'sudahLogin'){
            redirect('auth');
        }

    }
	
	public function index()
	{
        $data = ['title' => 'Welcome to Dashboard Admin '];
		$this->load->view('admin/templates/V_header_admin', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/templates/V_footer_admin');
	}
    
    public function data_anak(){
        $data = ['title' => 'List data Anak '];
        $anak['record'] = $this->M_registrasiAnak->get_register();
		$this->load->view('admin/templates/V_header_admin', $data);
		$this->load->view('admin/V_dataAnak', $anak);
		$this->load->view('admin/templates/V_footer_admin');
    }
    public function detail_anak($id){
        $data = ['title' => 'Detail data Anak '];
        $anak['record'] = $this->M_registrasiAnak->get_data_by_id($id);
		$this->load->view('admin/templates/V_header_admin', $data);
		$this->load->view('admin/V_detailAnak', $anak);
		$this->load->view('admin/templates/V_footer_admin');
    }
    public function hapus($id){
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil di Hapus!</div>');
        $this->M_registrasiAnak->hapus_registrasi($id);
        redirect('admin/data_anak');
    }
}
