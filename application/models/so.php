<?php 
class so extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_SO(){
            $this->db->select('PK_SO');
            $query = $this->db->get('so');
            return $query->result_array();
        }

        public function get_SO_nombre(){
            $this->db->select('SO_nombre');
            $query = $this->db->get('so');
            return $query->result_array();
        }

        public function get_SO_precio(){
            $this->db->select('SO_precio');
            $query = $this->db->get('so');    
            return $query->result_array();
        }

        public function get_SO_img(){
            $this->db->select('SO_img');
            $query = $this->db->get('so');
            return $query->result_array();
        }    
}
?>