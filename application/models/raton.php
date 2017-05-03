<?php 
class raton extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_RAT(){
            $this->db->select('PK_RAT');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

        public function get_RAT_nombre(){
            $this->db->select('RAT_nombre');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

        public function get_RAT_precio(){
            $this->db->select('RAT_precio');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

        public function get_RAT_img(){
            $this->db->select('RAT_img');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

        public function get_RAT_dpi(){
            $this->db->select('RAT_dpi');
            $query = $this->db->get('raton');    
            return $query->result_array();
        }

        public function get_RAT_cable(){
            $this->db->select('RAT_cable');
            $query = $this->db->get('raton');
            return $query->result_array();
        }
}
?>