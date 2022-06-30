<?php
    class Banner_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function addBanner($post_data,$table=''){
          $add_banner = $this->db->insert($table,$post_data);
          if($add_banner){
            return true;
          }else{
            return false;
          }
        }  

        public function getLastAddedFile(){
          $query_result = $this->db->query('SELECT * FROM `banner` ORDER BY `id` DESC LIMIT 1');
          if($query_result->result_array()){
            $result = $query_result->result_array();
            $result = $result[0];
            return $result['banner'];
          }
        }

        public function getServices(){
          $query = $this->db->query('SELECT * FROM `services`');
          return $query->result_array();
        }
    }
?>
