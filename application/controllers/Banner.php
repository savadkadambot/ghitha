<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	
	public function index()
	{
		echo "sss";
		die();
		$this->load->view('common/header');
		$this->load->view('banner/add_banner');
		$this->load->view('common/footer');
	}
}
