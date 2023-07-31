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
		$waktuSekarang = date('Y-m-d');
		if($this->input->post()){
			$data = array(
				'nama_anak' => $this->input->post('namaAnak'),
				'usia' => $this->input->post('usia'),
				'tanggal_kelas' => $this->input->post('tanggalKelas'),
				'usia_kelas' => $this->input->post('usiaKelas'),
				'lokasi_kelas' => $this->input->post('lokasiKelas'),
				'tanggal_registrasi' => $waktuSekarang,
				'q1' => $this->input->post('pertanyaan1'),
				'q1_ex' => $this->input->post('q1_ex'),
				'q2' => $this->input->post('pertanyaan2'),
				'q2_ex' => $this->input->post('q2_ex'),
				'q3' => $this->input->post('pertanyaan3'),
				'q3_ex' => $this->input->post('q3_ex'),
				'q4' => $this->input->post('pertanyaan4')
			);
			$this->M_registrasiAnak->tambah_register($data);
			redirect('home/', 'refresh');
			}
	} 
}
