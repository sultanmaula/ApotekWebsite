<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function admin_join(){
        $this->db->select('*');
		$this->db->from('kasir');
		$query=$this->db->get();
		return $query->result_array();
    }

	public function tampil_kasir(){
		return $this->db->order_by('id_kasir', 'ASC')
						->get('kasir')
						->result();
	}

	public function tambah_kasir(){
		$data = array(
			'id_kasir' => NULL,
			'nama_kasir' => $this->input->post('nama_kasir'),
			'jk_kasir' => $this->input->post('jk_kasir'),
			'umur_kasir' => $this->input->post('umur_kasir'),
			'password' => ($this->input->post('password')),
			);
		$this->db->insert('kasir', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function hapus_kasir($id_kasir){
		$this->db->where('id_kasir', $id_kasir)
				 ->delete('kasir');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function edit_data_kasir($id_kasir){
		$data = array(
			'nama_kasir' => $this->input->post('nama_kasir'),
			'jk_kasir' => $this->input->post('jk_kasir'),
			'umur_kasir' => $this->input->post('umur_kasir'),
			'password' => ($this->input->post('password')),
			);
		$this->db->where('id_kasir', $id_kasir)
				 ->update('kasir',$data);
				 
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tampil_edit_by_id($id_kasir){
		return $this->db->where('id_kasir', $id_kasir)
						->get('kasir')
						->result();
	}

	//JUMLAH DATA KASIR
	public function hitung_admin(){
		$query = $this->db->get('kasir');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		} else{
			return 0;
		}
	}

	//JUMLAH DATA SUPPLIER
	public function hitung_supplier(){
		$query = $this->db->get('supplier');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		} else{
			return 0;
		}
	}

	//JUMLAH DATA OBAT
	public function hitung_obat(){
		$query = $this->db->get('obat');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		} else{
			return 0;
		}
	}

	//JUMLAH DATA TRANSAKSI
	public function hitung_transaksi(){
		$query = $this->db->get('transaksi');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		} else{
			return 0;
		}
	}



}


/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
?>