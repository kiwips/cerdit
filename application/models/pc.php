<?php 
class pc extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_PC(){
            $this->db->select('PK_PC');
            $query = $this->db->get('pc');
            return $query->result_array();
        }

        public function get_PC_FK_PK_USR(){
            $this->db->select('PC_FK_PK_USR');
            $query = $this->db->get('pc');
            return $query->result_array();
        }

        public function get_PC_precio_total(){
            $this->db->select('PC_precio_total');
            $query = $this->db->get('pc');    
            return $query->result_array();
    }

        public function get_PC_items(){
            $this->db->select('PC_items');
            $query = $this->db->get('pc');
            return $query->result_array();
        }
}
?>