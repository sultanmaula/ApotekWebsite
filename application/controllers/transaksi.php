<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
	}

	public function transaksi_page(){
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'transaksi_page/data_transaksi';
			$data['detil_transaksi'] = $this->transaksi_model->tampil_transaksi();
			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}
	}

	public function tambah_transaksi_page(){
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'transaksi_page/tambah_transaksi';
			$data['join_transaksiKasir']=$this->transaksi_model->transaksi_joinKasir();
			$data['join_transaksiObat']=$this->transaksi_model->transaksi_joinObat();

			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}
	}


	public function simpan_transaksi()
	{

		if($this->session->userdata('logged_in') == TRUE){
			if ($this->input->post('simpantransaksi')) {

				$kode_transaksi = uniqid(rand(), true);
				$tanggal_transaksi = date("Y-m-d");
				$id_obat = $this->input->post('id_obat');
				$banyak = $this->input->post('banyak_obat');
				$harga = $this->input->post('harga_obat');
				$id_kasir = $this->session->userdata('id_kasir');


				for ($i=0; $i < count($id_obat); $i++) { 
					$harga_total = $banyak[$i]*$harga[$i];

					$this->transaksi_model->tambah_transaksi($tanggal_transaksi, $kode_transaksi, $id_kasir, $id_obat[$i], $banyak[$i], $harga[$i], $harga_total);
				}
				
				redirect(base_url('index.php/transaksi/tampil_transaksi'));
			} else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'transaksi_page/tambah_transaksi';
				$this->load->view('template', $data);
			}

		} else {
			$this->load->view('login_view');
		}
	}

	public function tampil_transaksi(){

		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'transaksi_page/data_transaksi';
			$data['detil_transaksi'] = $this->transaksi_model->tampil_transaksi();
			$this->load->view('template', $data);
		} else {
			$this->load->view('login_view');
		}
	}

	public function get_harga_obat($id, $form_index)
	{
		$data_obat = $this->transaksi_model->get_obat_by_id($id);
		$data['data_obat'] = $data_obat;
		$data['form_index'] = $form_index;
		echo json_encode($data);
	}


	public function detail_transaksi($kode_transaksi)
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$kode_transaksi = $this->uri->segment(3);
			$data['main_view'] = 'transaksi_page/detail_transaksi';
			$data['join_transaksiKasir']=$this->transaksi_model->transaksi_joinKasir();
			$data['join_transaksiObat']=$this->transaksi_model->transaksi_joinObat();
			$data['detil'] = $this->transaksi_model->tampil_detail_by_id($kode_transaksi);
			$this->load->view('template',$data);
		} else {
			$this->load->view('login_view');
		}
	}


}
?>