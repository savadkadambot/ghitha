<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Non_food_items extends CI_Controller {

	
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('non_food_items/list_non_food_items');
		$this->load->view('common/footer');
	}
}