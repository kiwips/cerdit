<?php 
class graficas extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_GRF(){
            $this->db->select('PK_GRF');
            $query = $this->db->get('grf');
            return $query->result_array();
        }

        public function get_GRF_nombre(){
            $this->db->select('GRF_nombre');
            $query = $this->db->get('grf');
            return $query->result_array();
        }

        public function get_GRF_precio(){
            $this->db->select('GRF_precio');
            $query = $this->db->get('grf');    
            return $query->result_array();
        }

        public function get_GRF_img(){
            $this->db->select('GRF_img');
            $query = $this->db->get('grf');
            return $query->result_array();
        }   
        
        public function get_GRF_clock(){
            $this->db->select('GRF_clock');
            $query = $this->db->get('grf');
            return $query->result_array();
        }           
}
?>