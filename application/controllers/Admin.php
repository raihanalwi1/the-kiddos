<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_registrasiAnak');
        $this->load->model('M_jadwal');
        $this->load->model('M_review');
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
    //JADWAL
    public function data_jadwal(){
        $data = ['title' => 'List data Jadwal'];
        $jadwal['record'] = $this->M_jadwal->get_jadwalAll();
        $this->load->view('admin/templates/V_header_admin', $data);
		$this->load->view('admin/jadwal/V_jadwal', $jadwal);
		$this->load->view('admin/templates/V_footer_admin');
    }
    public function tambah_jadwal(){
        
        $data1 = ['title' => 'Tambah data Jadwal'];
        $this->load->view('admin/templates/V_header_admin', $data1);
		$this->load->view('admin/jadwal/V_tambahJadwal');
		$this->load->view('admin/templates/V_footer_admin');
        $config['upload_path']   = './asset/image/jadwal';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['file_name']    = date("dmy") . "_" .'jadwal';
        $config['max_size']      = 1000; // KB
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar_jadwal')) {
            $error = array('error' => $this->upload->display_errors());
            
        } else {
        $data=array(
            'judul_jadwal' => $this->input->post('judul_jadwal'),
            'tanggal' => $this->input->post('tanggal'),
            'kategori_jadwal' => $this->input->post('kategori_jadwal'),
            'keterangan' => $this->input->post('keterangan')
        );
        $upload_data = $this->upload->data();
        $data['gambar_jadwal'] = $upload_data['file_name'];
        $this->M_jadwal->tambah_jadwal($data); // Ganti sesuai model Anda
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Tambah data jadwal berhasil..</div>');
        redirect('admin/data_jadwal', 'refresh');
        }
        
    }
    public function edit_jadwal($id_jadwal) {
        $data['jadwal'] = $this->M_jadwal->get_jadwal_by_id($id_jadwal);
        $data1 = ['title' => 'Edit data Jadwal'];
        $this->load->view('admin/templates/V_header_admin', $data1);
		$this->load->view('admin/jadwal/V_editJadwal', $data);
		$this->load->view('admin/templates/V_footer_admin');
    }

    public function update_jadwal() {
        $id_jadwal = $this->input->post('id_jadwal');

        // Proses update data
        $data = array(
            'judul_jadwal' => $this->input->post('judul_jadwal'),
            'tanggal' => $this->input->post('tanggal'),
            'kategori_jadwal' => $this->input->post('kategori_jadwal'),
            'keterangan' => $this->input->post('keterangan')
            // tambahkan field lain sesuai kebutuhan
        );

        $this->M_jadwal->update_jadwal($id_jadwal, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil di rubah!</div>');
        redirect('admin/data_jadwal');
    }
    public function hapus_jadwal($id){
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil di Hapus!</div>');
        $this->M_jadwal->hapus_jadwal($id);
        redirect('admin/data_jadwal');
    }
    //Data anak 
    public function data_anak(){
        $data = ['title' => 'List data Anak '];
        $anak['record'] = $this->M_registrasiAnak->get_register();
		$this->load->view('admin/templates/V_header_admin', $data);
		$this->load->view('admin/anak/V_dataAnak', $anak);
		$this->load->view('admin/templates/V_footer_admin');
    }
    public function detail_anak($id){
        $data = ['title' => 'Detail data Anak '];
        $anak['record'] = $this->M_registrasiAnak->get_data_by_id($id);
		$this->load->view('admin/templates/V_header_admin', $data);
		$this->load->view('admin/anak/V_detailAnak', $anak);
		$this->load->view('admin/templates/V_footer_admin');
    }
    public function data_anak_program(){
        $data = ['title' => 'Detail data anak Program'];
        $anak['record'] = $this->M_registrasiAnak->get_register_program();
        $this->load->view('admin/templates/V_header_admin', $data);
        $this->load->view('admin/anak/V_dataAnakProgram', $anak);
		$this->load->view('admin/templates/V_footer_admin');
    }
    public function detail_anak_program($id){
        $data = ['title' => 'Detail data anak Program'];
        $anak['record'] = $this->M_registrasiAnak->get_data_by_idp($id);
		$this->load->view('admin/templates/V_header_admin', $data);
		$this->load->view('admin/anak/V_detailAnakProgram', $anak);
		$this->load->view('admin/templates/V_footer_admin');
    }
    
    public function hapus_anak($id){
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil di Hapus!</div>');
        $this->M_registrasiAnak->hapus_registrasi($id);
        redirect('admin/data_anak');
    }
    public function hapus_anak_program($id){
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil di Hapus!</div>');
        $this->M_registrasiAnak->hapus_registrasip($id);
        redirect('admin/data_anak_program');
    }
    public function faktur(){
        // $this->load->view('admin/templates/V_header_admin', $data);
		$this->load->view('admin/templates/V_faktur');
		// $this->load->view('admin/templates/V_footer_admin');
    }
    //Review
    public function data_review(){
        $data = ['title' => 'List data Reviews'];
        $review['record'] = $this->M_review->get_reviews();
        $this->load->view('admin/templates/V_header_admin', $data);
		$this->load->view('admin/review/V_dataReview', $review);
		$this->load->view('admin/templates/V_footer_admin');
    }
    public function tambah_review(){
        
        $data1 = ['title' => 'Tambah data Review'];
        $this->load->view('admin/templates/V_header_admin', $data1);
		$this->load->view('admin/review/V_tambahReview');
		$this->load->view('admin/templates/V_footer_admin');
        if($this->input->post()){
            $data=array(
                'nama_review' => $this->input->post('nama_review'),
                'tanggal_review' => date('Y-m-d'),
                'rating' => $this->input->post('rating'),
                'comment' => $this->input->post('comment')
            );
            $this->M_review->tambah_review($data); // Ganti sesuai model Anda
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Tambah data review berhasil..</div>');
            redirect('admin/data_review', 'refresh');
        }
    }
    public function hapus_review($id){
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil di Hapus!</div>');
        $this->M_review->hapus_review($id);
        redirect('admin/data_review');
    }
}
