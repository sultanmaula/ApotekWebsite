<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}



	public function masuk(){
		if ($this->input->post('simpan')) {
			$this->form_validation->set_rules('nama_kasir','Nama_Kasir','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');

			if ($this->form_validation->run() == TRUE) {
				if ($this->user_model->cek_user() == TRUE) {
					redirect('Welcome/index');
				} else {
					$data['notif'] = 'Login Gagal!';
					$this->load->view('login_view');}
			}else{
				$data['notif'] = validation_errors();
				$this->load->view('login_view');
			}
		}else{
			$data['notif'] = validation_errors();
			$this->load->view('login_view');
		}
	}

	public function logout(){
		$data = array(
			'username' => '',
			'logged_in' => FALSE
		);

		$this->session->sess_destroy();
		$this->load->view('login_view');
	}


}
?>