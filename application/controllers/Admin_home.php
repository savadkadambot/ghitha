<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	
	public function index()
	{	

		$this->load->model('Banner_model');
		set_time_limit(0);
		if($_POST){
			if($_POST['submit_type']=='food_items'){
				$content = str_replace('&', '&amp;', $_POST['note']);

				$post_data = array(
	            	'data' => $content,
	            	'created_date' => date('Y-m-d H:i:s')
	            );

				$this->db->where('service_type', 'food_items');
				$update = $this->db->update('services', $post_data);
			}else if($_POST['submit_type']=='non_food_items'){
				$content = str_replace('&', '&amp;', $_POST['note']);

				$post_data = array(
	            	'data' => $content,
	            	'created_date' => date('Y-m-d H:i:s')
	            );

				$this->db->where('service_type', 'non_food_items');
				$update = $this->db->update('services', $post_data);
			}else if($_POST['submit_type']=='upload_banner'){
				$file_ext = pathinfo($_FILES["banner"]["name"], PATHINFO_EXTENSION);
		        $file_name = time().'.'.$file_ext;
		        $config['upload_path'] = './uploads/banner/';
		        $config['allowed_types'] = '*';
		        $config['max_size'] = '2000';
		        $config['max_size'] = 1024 * 10; 
		        $config['max_width'] = '';
		        $config['max_height'] = '';
		        $config['file_name'] = $file_name;
		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);
		        $upload = $this->upload->do_upload('banner');
		        if ( ! $upload){
	                $error = array('error' => $this->upload->display_errors());
	                $data['error_message'] = $error;
	                print_r($data['error_message']);
	                die();
	            }

	            $post_data = array(
	            	'banner' => $file_name,
	            	'created_date' => date('Y-m-d H:i:s')
	            );
	            $this->Banner_model->addBanner($post_data,'banner');
			}
		}

		$last_added_file = $this->Banner_model->getLastAddedFile();
		$data['banner_file_url'] = base_url().'uploads/banner/'.$last_added_file;
		$services = $this->Banner_model->getServices();

		$data['food_item'] = $services[0]['data'];
		$data['non_food_item'] = $services[1]['data'];



		// $this->load->view('common/header');
		$this->load->view('admin_home/dashboard',$data);
		//$this->load->view('common/footer');
	}


	public function getServicesImage(){
		$this->load->model('Banner_model');
		
	}
}
