<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	
	public function index()
	{
		$data['index_link'] = base_url();
		$data['about_us_link'] = base_url().'index.php/about-us';
		$data['chairman_message_link'] = base_url().'index.php/message-from-the-chairman-and-ceo';
		$data['food_items_link'] = base_url().'index.php/food-items';
		$data['non_food_items_link'] = base_url().'index.php/non-food-items';
		$data['importation_and_warehousing_link'] = base_url().'index.php/importation-and-warehousing';
		$data['logistics_department_link'] = base_url().'index.php/logistics-department';
		$data['news_and_media_link'] = base_url().'index.php/news-and-media';
		$data['contact_us_link'] = base_url().'index.php/contact-us';

		$this->load->model('Banner_model');
		$last_added_file = $this->Banner_model->getLastAddedFile();
		$data['banner_file_url'] = base_url().'uploads/banner/'.$last_added_file;
		
		$this->load->view('website/index',$data);

	}
	public function about_us(){
		$data['index_link'] = base_url();
		$data['about_us_link'] = base_url().'index.php/about-us';
		$data['chairman_message_link'] = base_url().'index.php/message-from-the-chairman-and-ceo';
		$data['food_items_link'] = base_url().'index.php/food-items';
		$data['non_food_items_link'] = base_url().'index.php/non-food-items';
		$data['importation_and_warehousing_link'] = base_url().'index.php/importation-and-warehousing';
		$data['logistics_department_link'] = base_url().'index.php/logistics-department';
		$data['news_and_media_link'] = base_url().'index.php/news-and-media';
		$data['contact_us_link'] = base_url().'index.php/contact-us';

		$this->load->view('website/about_us',$data);
	}

	public function chairman_message(){
		$data['index_link'] = base_url();
		$data['about_us_link'] = base_url().'index.php/about-us';
		$data['chairman_message_link'] = base_url().'index.php/message-from-the-chairman-and-ceo';
		$data['food_items_link'] = base_url().'index.php/food-items';
		$data['non_food_items_link'] = base_url().'index.php/non-food-items';
		$data['importation_and_warehousing_link'] = base_url().'index.php/importation-and-warehousing';
		$data['logistics_department_link'] = base_url().'index.php/logistics-department';
		$data['news_and_media_link'] = base_url().'index.php/news-and-media';
		$data['contact_us_link'] = base_url().'index.php/contact-us';

		$this->load->view('website/chairman_message',$data);
	}

	public function food_items(){
		$data['index_link'] = base_url();
		$data['about_us_link'] = base_url().'index.php/about-us';
		$data['chairman_message_link'] = base_url().'index.php/message-from-the-chairman-and-ceo';
		$data['food_items_link'] = base_url().'index.php/food-items';
		$data['non_food_items_link'] = base_url().'index.php/non-food-items';
		$data['importation_and_warehousing_link'] = base_url().'index.php/importation-and-warehousing';
		$data['logistics_department_link'] = base_url().'index.php/logistics-department';
		$data['news_and_media_link'] = base_url().'index.php/news-and-media';
		$data['contact_us_link'] = base_url().'index.php/contact-us';

		$this->load->view('website/food_items',$data);
	}

	public function non_food_items(){
		$data['index_link'] = base_url();
		$data['about_us_link'] = base_url().'index.php/about-us';
		$data['chairman_message_link'] = base_url().'index.php/message-from-the-chairman-and-ceo';
		$data['food_items_link'] = base_url().'index.php/food-items';
		$data['non_food_items_link'] = base_url().'index.php/non-food-items';
		$data['importation_and_warehousing_link'] = base_url().'index.php/importation-and-warehousing';
		$data['logistics_department_link'] = base_url().'index.php/logistics-department';
		$data['news_and_media_link'] = base_url().'index.php/news-and-media';
		$data['contact_us_link'] = base_url().'index.php/contact-us';

		$this->load->view('website/non_food_items',$data);
	}

	public function importation_and_warehousing(){
		$data['index_link'] = base_url();
		$data['about_us_link'] = base_url().'index.php/about-us';
		$data['chairman_message_link'] = base_url().'index.php/message-from-the-chairman-and-ceo';
		$data['food_items_link'] = base_url().'index.php/food-items';
		$data['non_food_items_link'] = base_url().'index.php/non-food-items';
		$data['importation_and_warehousing_link'] = base_url().'index.php/importation-and-warehousing';
		$data['logistics_department_link'] = base_url().'index.php/logistics-department';
		$data['news_and_media_link'] = base_url().'index.php/news-and-media';
		$data['contact_us_link'] = base_url().'index.php/contact-us';

		$this->load->view('website/importation_and_warehousing',$data);
	}

	public function logistics_department(){
		$data['index_link'] = base_url();
		$data['about_us_link'] = base_url().'index.php/about-us';
		$data['chairman_message_link'] = base_url().'index.php/message-from-the-chairman-and-ceo';
		$data['food_items_link'] = base_url().'index.php/food-items';
		$data['non_food_items_link'] = base_url().'index.php/non-food-items';
		$data['importation_and_warehousing_link'] = base_url().'index.php/importation-and-warehousing';
		$data['logistics_department_link'] = base_url().'index.php/logistics-department';
		$data['news_and_media_link'] = base_url().'index.php/news-and-media';
		$data['contact_us_link'] = base_url().'index.php/contact-us';

		$this->load->view('website/logistics_department',$data);
	}

	public function news_and_media(){
		$data['index_link'] = base_url();
		$data['about_us_link'] = base_url().'index.php/about-us';
		$data['chairman_message_link'] = base_url().'index.php/message-from-the-chairman-and-ceo';
		$data['food_items_link'] = base_url().'index.php/food-items';
		$data['non_food_items_link'] = base_url().'index.php/non-food-items';
		$data['importation_and_warehousing_link'] = base_url().'index.php/importation-and-warehousing';
		$data['logistics_department_link'] = base_url().'index.php/logistics-department';
		$data['news_and_media_link'] = base_url().'index.php/news-and-media';
		$data['contact_us_link'] = base_url().'index.php/contact-us';
		$this->load->view('website/news_and_media',$data);
	}

	public function contact_us(){
		$data['index_link'] = base_url();
		$data['about_us_link'] = base_url().'index.php/about-us';
		$data['chairman_message_link'] = base_url().'index.php/message-from-the-chairman-and-ceo';
		$data['food_items_link'] = base_url().'index.php/food-items';
		$data['non_food_items_link'] = base_url().'index.php/non-food-items';
		$data['importation_and_warehousing_link'] = base_url().'index.php/importation-and-warehousing';
		$data['logistics_department_link'] = base_url().'index.php/logistics-department';
		$data['news_and_media_link'] = base_url().'index.php/news-and-media';
		$data['contact_us_link'] = base_url().'index.php/contact-us';
		$this->load->view('website/contact_us',$data);
	}

}
