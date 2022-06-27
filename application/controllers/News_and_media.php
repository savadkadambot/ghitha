<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_and_media extends CI_Controller {

	
	public function index()
	{
	
		$this->load->view('common/header');
		$this->load->view('news_and_media/add_news');
		$this->load->view('common/footer');
	}
}
