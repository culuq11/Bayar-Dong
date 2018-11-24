<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
    $this->load->view('templates/backend/header');
		$this->load->view('admin/index');
    $this->load->view('templates/backend/footer');
	}

  public function profile(){
    $this->load->view('templates/backend/header');
    $this->load->view('admin/profile');
    $this->load->view('templates/backend/footer');
  }

  public function lihat_mahasiswa(){

  }
}
