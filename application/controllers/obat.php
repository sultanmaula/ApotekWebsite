<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->model('obat_model');
	}

	public function data_obat()
	{

		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'obat_page/obat';
			$data['detil_obat'] = $this->obat_model->tampil_obat();
			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}

		
	}

	public function tambah_obat_page() {
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'obat_page/tambah_obat';
			$data['join']=$this->obat_model->obat_join();

			$this->load->view('template', $data);
			
		} else {
			$this->load->view('login_view');
		}
		
	}

		public function simpan_obat()
	{

		if($this->session->userdata('logged_in') == TRUE){
			if ($this->input->post('simpanobat')) {

				$this->form_validation->set_rules('nama_obat','Nama_Obat','trim|required');
				$this->form_validation->set_rules('harga_obat','Harga_Obat','trim|required');
				$this->form_validation->set_rules('stok_obat','Stok_Obat','trim|required');
				$this->form_validation->set_rules('id_supplier','ID_Supplier','trim|required');

				if ($this->form_validation->run() == TRUE) {
					if ($this->obat_model->tambah_obat() == TRUE) {
						redirect(base_url('index.php/obat/tampil_obat'));
					} else {
						$data['notif'] = 'Tambah Obat Gagal!';
						$data['main_view'] = 'obat_page/tambah_obat';
						$this->load->view('template',$data);
					}
				}else {
					$data['notif'] = validation_errors();
					$data['main_view'] = 'obat_page/tambah_obat';
					$this->load->view('template',$data);
				}}else{
					$data['notif'] = validation_errors();
					$data['main_view'] = 'obat_page/tambah_obat';
					$this->load->view('template', $data);
				}
			} else {
				$this->load->view('login_view');
		}

		
	}

	public function tampil_obat(){

		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'obat_page/obat';
			$data['detil_obat'] = $this->obat_model->tampil_obat();
			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}
	}


	public function tampil_edit_obat(){

		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_obat = $this->uri->segment(3);
			$data['main_view'] = 'obat_page/edit_obat';
			$data['join']=$this->obat_model->obat_join();

			$data['detil'] = $this->obat_model->tampil_edit_by_id($id_obat);

			$this->load->view('template',$data);
		} else {
			$this->load->view('login_view');
		}
	}

	public function edit_obat(){

		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_obat = $this->uri->segment(3);

			if ($this->input->post('simpanobat')) {

				$this->form_validation->set_rules('nama_obat','Nama_Obat','trim|required');
				$this->form_validation->set_rules('harga_obat','Harga_Obat','trim|required');
				$this->form_validation->set_rules('stok_obat','Stok_Obat','trim|required');
				$this->form_validation->set_rules('id_supplier','ID_Supplier','trim|required');

			if ($this->form_validation->run() == TRUE) {
				$this->obat_model->edit_data_obat($id_obat);
				$data['main_view'] = 'obat_page/obat';
				$data['join']=$this->obat_model->obat_join();
				$data['detil_obat'] = $this->obat_model->tampil_obat();
				$this->load->view('template', $data); 

			} else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'obat_page/edit_obat';
				$this->load->view('template',$data);
			}}else{
				$data['notif'] = validation_errors();
				$data['main_view'] = 'obat_page/edit_obat';
				$this->load->view('template', $data);
			}
		} else {
			$this->load->view('login_view');
		}
	}


	public function hapus_data_obat(){

		if($this->session->userdata('logged_in') == TRUE){
			$id_obat = $this->uri->segment(3);
			if ($this->obat_model->hapus_obat($id_obat) == TRUE) {
				$this->session->set_flashdata('notif','Hapus Data Obat Sukses!');
				redirect('obat/tampil_obat');
			} else {
				$this->session->set_flashdata('notif','Hapus Data Obat Gagal!');
				redirect('obat/tampil_obat');
			}
			} else {
				$this->load->view('login_view');
		}
	}	

}
?>


