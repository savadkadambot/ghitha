<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_items extends CI_Controller {

	
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('food_items/list_food_items');
		$this->load->view('common/footer');
	}
}