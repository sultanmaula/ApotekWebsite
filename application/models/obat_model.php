<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function obat_join(){
        $this->db->select('*');
		$this->db->from('supplier');
		$query=$this->db->get();
		return $query->result_array();
    }

    public function tampil_obat(){
    	$this->db->select('obat.*, supplier.*');
		$this->db->from('obat');
		$this->db->join('supplier', 'supplier.id_supplier = obat.id_supplier');
		$this->db->order_by('id_obat', 'ASC');
		$query = $this->db->get();
		return $query->result();

	}

		public function tambah_obat(){
		$data = array(
			'id_obat' => NULL,
			'nama_obat' => $this->input->post('nama_obat'),
			'harga_obat' => $this->input->post('harga_obat'),
			'stok_obat' => $this->input->post('stok_obat'),
			'id_supplier' => $this->input->post('id_supplier'),
			);
		$this->db->insert('obat', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


		public function edit_data_obat($id_obat){
		$data = array(
			'nama_obat' => $this->input->post('nama_obat'),
			'harga_obat' => $this->input->post('harga_obat'),
			'stok_obat' => $this->input->post('stok_obat'),
			'id_supplier' => $this->input->post('id_supplier'),
			
			);
		$this->db->where('id_obat', $id_obat)
				 ->update('obat',$data);
				 
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tampil_edit_by_id($id_obat){
		return $this->db->where('id_obat', $id_obat)
						->get('obat')
						->row();
	}

	public function hapus_obat($id_obat){
		$this->db->where('id_obat', $id_obat)
				 ->delete('obat');

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