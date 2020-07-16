<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{

		if($this->session->userdata('logged_in') == TRUE){
			$data['total_admin'] = $this->admin_model->hitung_admin();
			$data['total_supplier'] = $this->admin_model->hitung_supplier();
			$data['total_obat'] = $this->admin_model->hitung_obat();
			$data['total_transaksi'] = $this->admin_model->hitung_transaksi();
			$data['main_view'] = 'dashboard';
			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}

		
	}
}
?>


