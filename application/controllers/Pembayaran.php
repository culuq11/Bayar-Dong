<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('pembayaran_model');
	}

	public function index(){
		$this->load->view('templates/header');
		$data['informasi'] = $this->pembayaran_model->getInfoPembayaran();
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$dataNim = $this->input->post('nim');
		$data['mahasiswa'] = $this->pembayaran_model->getDataMahasiswa($dataNim);
		$this->load->view('pembayaran/index', $data);
	}
}
