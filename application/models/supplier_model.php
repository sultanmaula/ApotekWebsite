<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {
	
    public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

    public function tampil_supplier()
    {
		return $this->db->order_by('id_supplier', 'ASC')
						->get('supplier')
						->result();
	}

	public function tambah_supplier(){
		$data = array(
			'id_supplier' => NULL,
			'nama_supplier' => $this->input->post('nama_supplier'),
			'jk_supplier' => $this->input->post('jk_supplier'),
			'telp_supplier' => $this->input->post('telp_supplier'),
			'alamat_supplier' => $this->input->post('alamat_supplier'),
			);
		$this->db->insert('supplier', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit_data_supplier($id_supplier){
		$data = array(
			'nama_supplier' => $this->input->post('nama_supplier'),
			'jk_supplier' => $this->input->post('jk_supplier'),
			'telp_supplier' => $this->input->post('telp_supplier'),
			'alamat_supplier' => $this->input->post('alamat_supplier'),
			
			);
		$this->db->where('id_supplier', $id_supplier)
				 ->update('supplier',$data);
				 
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tampil_edit_by_id($id_supplier){
		return $this->db->where('id_supplier', $id_supplier)
						->get('supplier')
						->result();
	}

	public function hapus_supplier($id_supplier){
		$this->db->where('id_supplier', $id_supplier)
				 ->delete('supplier');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


}


/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
?>