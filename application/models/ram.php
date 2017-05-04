<?php 
class ram extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_RAM(){
            $this->db->select('PK_RAM');
            $query = $this->db->get('memoria ram');
            return $query->result_array();
        }

      public function get_FK_RAM_PK_PROD(){
            $this->db->select('FK_RAM_PK_PROD');
            $query = $this->db->get('memoria ram');
            return $query->result_array();
        }

        public function get_RAM_nombre(){
            $this->db->select('RAM_nombre');
            $query = $this->db->get('memoria ram');
            return $query->result_array();
        }

        public function get_RAM_precio(){
            $this->db->select('RAM_precio');
            $query = $this->db->get('memoria ram');    
            return $query->result_array();
        }

        public function get_RAM_img(){
            $this->db->select('RAM_img');
            $query = $this->db->get('memoria ram');
            return $query->result_array();
        }   
        
        public function get_RAM_num_ram(){
            $this->db->select('RAM_num_ram');
            $query = $this->db->get('memoria ram');
            return $query->result_array();
        }           
}
?>