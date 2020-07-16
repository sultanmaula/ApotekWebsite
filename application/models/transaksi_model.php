<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {
	
    public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function transaksi_joinKasir(){
        $this->db->select('*');
		$this->db->from('kasir');
		$query=$this->db->get();
		return $query->result_array();
    }


    public function transaksi_joinObat() {
		$this->db->select('*');
		$this->db->from('obat');
		$query=$this->db->get();
		return $query->result_array();
    }


	public function tampil_transaksi()
    {

		$this->db->select('transaksi.*, kasir.*, obat.*');
		$this->db->from('transaksi');
		$this->db->join('kasir', 'kasir.id_kasir = transaksi.id_kasir');
		$this->db->join('obat', 'obat.id_obat = transaksi.id_obat');
		$this->db->order_by('tanggal_beli', 'ASC')->group_by('kode_transaksi');
		$query = $this->db->get();
		return $query->result();

	}

	public function tambah_transaksi($tanggal_transaksi, $kode_transaksi, $id_kasir, $id_obat, $banyak, $harga, $harga_total){
		$data = array(
				'id_transaksi' => NULL,
				'tanggal_beli' => $tanggal_transaksi,
				'id_kasir' => $id_kasir,
				'id_obat' => $id_obat,
				'harga_obat' => $harga,
				'banyak_obat' => $banyak,
				'total_harga' => $harga_total,
				'kode_transaksi' => $kode_transaksi
			);
		$this->db->insert('transaksi', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_obat_by_id($id){

		$this->db->select('*');
		$this->db->from('obat');
		$this->db->where('id_obat', $id);
		$query=$this->db->get();
		return $query->result_array();

	}

	public function tampil_detail_by_id($kode_transaksi){
		$this->db->select('transaksi.*, kasir.*, obat.*');
		$this->db->from('transaksi');
		$this->db->join('kasir', 'kasir.id_kasir = transaksi.id_kasir');
		$this->db->join('obat', 'obat.id_obat = transaksi.id_obat');
		$this->db->where('kode_transaksi', $kode_transaksi);
		$query = $this->db->get();
		return $query->result();
	}


}

?>