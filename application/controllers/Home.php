<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('M_registrasiAnak');
        $this->load->model('M_banner');
        $this->load->model('M_jadwal');
        $this->load->model('M_review');
		$this->load->helper(array('url','form'));
		$this->load->library('email','upload');
	}
	
	public function index()
	{
        $data = ['title' => 'Welcome to The Kiddos Project'];
        $banner['banner'] = $this->M_banner->get_banner();
		$this->load->view('templates/V_header', $data);
		$this->load->view('index', $banner);
		$this->load->view('templates/V_footer');
	}
	public function maintenance(){
		$data = ['title' => 'Under Maintenance'];
		$this->load->view('maintenance', $data);
	}
	public function aboutus(){
        $data = ['title' => 'About Us || The Kiddos Project'];
		$this->load->view('templates/V_header', $data);
		$this->load->view('about_us');
		$this->load->view('templates/V_footer');
	}
	public function visit(){
        $data = ['title' => 'Visit Kiddos  || The Kiddos Project'];
		$this->load->view('templates/V_header', $data);
		$this->load->view('visit');
		$this->load->view('templates/V_footer');
	}
	public function galeri(){
        $data = ['title' => 'Galeri Kiddos  || The Kiddos Project'];
		$this->load->view('templates/V_header', $data);
		$this->load->view('galeri');
		$this->load->view('templates/V_footer');
	}
	public function jadwalBulanan(){
		$data = ['title' => 'Jadwal Kiddos  || The Kiddos Project'];
        $jadwal['record'] = $this->M_jadwal->get_jadwal_bulanan();
		$this->load->view('templates/V_header', $data);
		$this->load->view('jadwal_B', $jadwal);
		$this->load->view('templates/V_footer');
	}
	public function jadwalEvent(){
		$data = ['title' => 'Jadwal Kiddos  || The Kiddos Project'];
        $jadwal['record'] = $this->M_jadwal->get_jadwal_event();
		$this->load->view('templates/V_header', $data);
		$this->load->view('jadwal_E', $jadwal);
		$this->load->view('templates/V_footer');
	}
	public function send_email() {
		  $nama = $this->input->post('name');
		  $email = $this->input->post('email');
		  $subjek = $this->input->post('subject');
		  $pesan = $this->input->post('pesan');
	
		  $sendToEmail = $email;
		  $subject = $subjek;
		  $message = $pesan;
		  $this->load->initialize('email');
		  $this->email->set_newline("\r\n");
		  $this->email->from($sendToEmail);
		  $this->email->to('thekiddo@thekiddosproject.com');
		  $this->email->cc('thekiddosofc@gmail.com');
		  $this->email->subject($subject);
		  $this->email->message($message);
		  if($this->email->send()){
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Pesan sudah terkirim.</div>');
			redirect('home/', 'refresh');
		  }else{
			echo 'Email sending error!';
		  }
	  }
	public function reviews(){
		$data1 = ['title' => 'Reviews || The Kiddos Project'];
        $data['reviews'] = $this->M_review->getReviews();

		$this->load->view('templates/V_header', $data1);
        $this->load->view('review', $data);
		$this->load->view('templates/V_footer');

	}
    public function privacy(){
		$data = ['title' => 'Law Privacy The Kiddos Project'];
		$this->load->view('templates/V_header', $data);
		$this->load->view('law/privacy');
		$this->load->view('templates/V_footer');

	}
	public function terms(){
		$data = ['title' => 'Terms The Kiddos Project'];
		$this->load->view('templates/V_header', $data);
		$this->load->view('law/terms');
		$this->load->view('templates/V_footer');

	}
	public function form_registrasi_program(){
		$data1 = ['title' => 'Form Registrasi Anak Program || The Kiddos Project'];
		$this->load->view('templates/V_header', $data1);
		$this->load->view('form_registrasi_program');
		if($this->input->post()){
			$waktuSekarang = date('Y-m-d');
			$jadwal = $this->input->post('jadwal');
			$jdwl_str = implode(', ', $jadwal);
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nama_panggilan' => $this->input->post('nama_panggilan'),
                'kelas' => $this->input->post('kelas'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'kategori_kelas' => $this->input->post('kategori_kelas'),
                'jadwal' => $jdwl_str,
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'no_hp' => $this->input->post('no_hp'),
				'tanggal_registrasi' => $waktuSekarang,
                'kontak_darurat' => $this->input->post('kontak_darurat'),
                'alamat_email' => $this->input->post('alamat_email'),
                'size_baju' => $this->input->post('size_baju'),
                'lokasi_kelas' => $this->input->post('lokasi_kelas'),
                'q1' => $this->input->post('pertanyaan1'),
				'q1_ex' => $this->input->post('q1_ex'),
				'q2' => $this->input->post('pertanyaan2'),
				'q2_ex' => $this->input->post('q2_ex'),
				'q3' => $this->input->post('pertanyaan3'),
				'q3_ex' => $this->input->post('q3_ex'),
                'q4' => $this->input->post('pertanyaan4')
            );
			// var_dump($data) or die;
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil ditambahkan!</div>');
            $this->M_registrasiAnak->tambah_registerp($data);
            redirect('home/', 'refresh');
        }
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Pengisian Registrasi gagal! Silahkan mengisi ulang form sesuai ketentuan..</div>');

	}
	public function form_registrasi(){
		$data1 = ['title' => 'Form Registrasi Anak || The Kiddos Project '];
		$this->load->view('templates/V_header', $data1);
		$this->load->view('form_registrasi');
		
		$config['upload_path']   = './asset/image/bukti';
			$config['allowed_types'] = 'png|jpg|jpeg|JPEG';
			$config['file_name']    = date("dmy") . "_" .'Bukti';
			$config['max_size']      = 1000; // KB
	
			$this->load->library('upload', $config);
	
			if (!$this->upload->do_upload('userfile')) {
				$error = array('error' => $this->upload->display_errors());
				
			} else {
				$waktuSekarang = date('Y-m-d');
				$data = array(
					'nama_anak' => $this->input->post('namaAnak'),
					'usia' => $this->input->post('usia'),
					'tanggal_kelas' => $this->input->post('tanggalKelas'),
					'no_wa' => $this->input->post('noWa'),
					'email' => $this->input->post('email'),
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
				$upload_data = $this->upload->data();
				$data['bukti'] = $upload_data['file_name'];
				$this->M_registrasiAnak->tambah_register($data); // Ganti sesuai model Anda
	
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Pengisian Registrasi Telah berhasil! Silahkan hubungi admin..</div>');
				redirect('home/', 'refresh');
			
			}
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Pengisian Registrasi gagal! Silahkan mengisi ulang form sesuai ketentuan..</div>');
			
	} 
	
}
