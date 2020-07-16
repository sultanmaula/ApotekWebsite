<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function tambah_admin_page()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'admin_page/tambah_admin';
			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}
		
	}
	
	public function tampil_admin(){

		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'admin_page/admin';
			$data['detil'] = $this->admin_model->tampil_kasir();
			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}
	}

	public function simpan_kasir()
	{

		if($this->session->userdata('logged_in') == TRUE){
			if ($this->input->post('simpan')) {

				$this->form_validation->set_rules('nama_kasir','Nama_Kasir','trim|required');
				$this->form_validation->set_rules('jk_kasir','Jk_Kasir','trim|required');
				$this->form_validation->set_rules('umur_kasir','Umur_Kasir','trim|required');
				$this->form_validation->set_rules('password','Password','trim|required');

				if ($this->form_validation->run() == TRUE) {
					if ($this->admin_model->tambah_kasir() == TRUE) {
						redirect(base_url('index.php/admin/tampil_admin'));
					} else {
						$data['notif'] = 'Tambah Kasir Gagal!';
						$data['main_view'] = 'admin_page/tambah_admin';
						$this->load->view('template',$data);
					}
				}else {
					$data['notif'] = validation_errors();
					$data['main_view'] = 'admin_page/tambah_admin';
					$this->load->view('template',$data);
				}}else{
					$data['notif'] = validation_errors();
					$data['main_view'] = 'admin_page/tambah_admin';
					$this->load->view('template', $data);
				}
			} else {
				$this->load->view('login_view');
		}

		
	}

	public function hapus_data_kasir(){

		if($this->session->userdata('logged_in') == TRUE){
			$id_kasir = $this->uri->segment(3);
			if ($this->admin_model->hapus_kasir($id_kasir) == TRUE) {
				$this->session->set_flashdata('notif','Hapus Data Kasir Sukses!');
				redirect('admin/tampil_admin');
			} else {
				$this->session->set_flashdata('notif','Hapus Data Kasir Gagal!');
				redirect('admin/tampil_admin');
			}
			} else {
				$this->load->view('login_view');
		}
	}

	public function tampil_edit_kasir(){

		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_kasir = $this->uri->segment(3);
			$data['main_view'] = 'admin_page/edit_admin';
			$data['join']=$this->admin_model->admin_join();
			$data['detil'] = $this->admin_model->tampil_edit_by_id($id_kasir);
			$this->load->view('template',$data);
		} else {
			$this->load->view('login_view');
		}
	}

	public function edit_kasir(){

		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_kasir = $this->uri->segment(3);

			if ($this->input->post('simpan')) {

			$this->form_validation->set_rules('nama_kasir','Nama_Kasir','trim|required');
			$this->form_validation->set_rules('jk_kasir','Jk_Kasir','trim|required');
			$this->form_validation->set_rules('umur_kasir','Umur_Kasir','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');

			if ($this->form_validation->run() == TRUE) {
				$this->admin_model->edit_data_kasir($id_kasir);
				$data['main_view'] = 'admin_page/admin';
				$data['join']=$this->admin_model->admin_join();
				$data['detil'] = $this->admin_model->tampil_kasir();
				$this->load->view('template', $data);
			}else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'admin_page/edit_admin';
				$this->load->view('template',$data);
			}}else{
				$data['notif'] = validation_errors();
				$data['main_view'] = 'admin_page/edit_admin';
				$this->load->view('template', $data);
			}
		} else {
			$this->load->view('login_view');
		}
	}

	//HITUNG DATA
	

}
?>




