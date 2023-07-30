<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('M_registrasiAnak');
		
	}
	
	public function index()
	{
        $data = ['title' => 'Welcome to The Kiddos Project'];
		$this->load->view('templates/V_header', $data);
		$this->load->view('index');
		$this->load->view('templates/V_footer');
	}
	public function aboutus(){
        $data = ['title' => 'ABOUT US'];
		$this->load->view('templates/V_header', $data);
		$this->load->view('about_us');
		$this->load->view('templates/V_footer');
	}
	public function visit(){
        $data = ['title' => 'Visit Kiddos'];
		$this->load->view('templates/V_header', $data);
		$this->load->view('visit');
		$this->load->view('templates/V_footer');
	}
    public function privacy(){
		$data = ['title' => 'Law Privacy The Kiddos Project'];
		$this->load->view('templates/V_header', $data);
		$this->load->view('law/privacy');
	}
	public function form_registrasi(){
		$data1 = ['title' => 'Form Registrasi Anak || The Kiddos Project '];
		$this->load->view('templates/V_header', $data1);
		$this->load->view('form_registrasi');
		if($this->input->post()){
			$data = array(
				'nama_anak' => $this->input->post('namaAnak'),
				'usia' => $this->input->post('namaAnak')
			);
			$this->M_registrasiAnak->tambah_register($data);
			redirect('home/', 'refresh');
			}
	} 
}
