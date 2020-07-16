<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function cek_user(){
		$nama_kasir = $this->input->post('nama_kasir');
		$password = $this->input->post('password');

		$query = $this->db->where('nama_kasir',$nama_kasir)
						  ->where('password', $password)
						  ->get('kasir')->result();

		if (!empty($query)) {
			$data = array(
				'id_kasir' => $query[0]->id_kasir,
				'nama_kasir' => $nama_kasir,
				'logged_in' => TRUE);
		$this->session->set_userdata($data);
		return TRUE;
		} else {
			return FALSE;
		}
	}

	


}


/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
?>