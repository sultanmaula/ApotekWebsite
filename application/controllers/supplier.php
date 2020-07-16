<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('supplier_model');
	}

	public function data_supplier()
	{

		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'supplier_page/supplier';
			$data['detil_supplier'] = $this->supplier_model->tampil_supplier();

			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}

	}

	public function tambah_supplier_page()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'supplier_page/tambah_supplier';
			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}
		
	}

	public function simpan_supplier()
	{

		if($this->session->userdata('logged_in') == TRUE){
			if ($this->input->post('simpansupplier')) {

				$this->form_validation->set_rules('nama_supplier','Nama_Supplier','trim|required');
				$this->form_validation->set_rules('jk_supplier','JK_Supplier','trim|required');
				$this->form_validation->set_rules('telp_supplier','Telp_Supplier','trim|required');
				$this->form_validation->set_rules('alamat_supplier','Alamat_Supplier','trim|required');

				if ($this->form_validation->run() == TRUE) {
					if ($this->supplier_model->tambah_supplier() == TRUE) {
						redirect(base_url('index.php/supplier/tampil_supplier'));
					} else {
						$data['notif'] = 'Tambah Supplier Gagal!';
						$data['main_view'] = 'supplier_page/tambah_supplier';
						$this->load->view('template',$data);
					}
				}else {
					$data['notif'] = validation_errors();
					$data['main_view'] = 'supplier_page/tambah_supplier';
					$this->load->view('template',$data);
				}}else{
					$data['notif'] = validation_errors();
					$data['main_view'] = 'supplier_page/tambah_supplier';
					$this->load->view('template', $data);
				}
			} else {
				$this->load->view('login_view');
		}

		
	}

	public function tampil_supplier(){

		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'supplier_page/supplier';
			$data['detil_supplier'] = $this->supplier_model->tampil_supplier();
			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}
	}


	public function tampil_edit_supplier(){

		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_supplier = $this->uri->segment(3);
			$data['main_view'] = 'supplier_page/edit_supplier';
			$data['detil'] = $this->supplier_model->tampil_edit_by_id($id_supplier);
			$this->load->view('template',$data);
		} else {
			$this->load->view('login_view');
		}
	}

	public function edit_supplier(){

		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_supplier = $this->uri->segment(3);

			if ($this->input->post('simpansupplier')) {

				$this->form_validation->set_rules('nama_supplier','Nama_Supplier','trim|required');
				$this->form_validation->set_rules('jk_supplier','JK_Supplier','trim|required');
				$this->form_validation->set_rules('telp_supplier','Telp_Supplier','trim|required');
				$this->form_validation->set_rules('alamat_supplier','Alamat_Supplier','trim|required');

			if ($this->form_validation->run() == TRUE) {
				$this->supplier_model->edit_data_supplier($id_supplier);
				$data['main_view'] = 'supplier_page/supplier';
				$data['detil_supplier'] = $this->supplier_model->tampil_supplier();
				$this->load->view('template', $data);
			}else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'supplier_page/edit_supplier';
				$this->load->view('template',$data);
			}}else{
				$data['notif'] = validation_errors();
				$data['main_view'] = 'supplier_page/edit_supplier';
				$this->load->view('template', $data);
			}
		} else {
			$this->load->view('login_view');
		}
	}


	public function hapus_data_supplier(){

		if($this->session->userdata('logged_in') == TRUE){
			$id_supplier = $this->uri->segment(3);
			if ($this->supplier_model->hapus_supplier($id_supplier) == TRUE) {
				$this->session->set_flashdata('notif','Hapus Data Supplier Sukses!');
				redirect('supplier/tampil_supplier');
			} else {
				$this->session->set_flashdata('notif','Hapus Data Supplier Gagal!');
				redirect('supplier/tampil_supplier');
			}
			} else {
				$this->load->view('login_view');
		}
	}


}
?>


