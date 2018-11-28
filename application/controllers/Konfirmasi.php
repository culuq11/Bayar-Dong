<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('');
	}

  public function index(){
    $this->load->view('templates/header.php');
		$this->load->view('pembayaran/konfirmasi');
  }
}
