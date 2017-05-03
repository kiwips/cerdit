<?php 
class micro extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_MIC(){
            $this->db->select('PK_MIC');
            $query = $this->db->get('micro');
            return $query->result_array();
        }

        public function get_MIC_nombre(){
            $this->db->select('MIC_nombre');
            $query = $this->db->get('micro');
            return $query->result_array();
        }

        public function get_MIC_precio(){
            $this->db->select('MIC_precio');
            $query = $this->db->get('micro');    
            return $query->result_array();
        }

        public function get_MIC_socket(){
            $this->db->select('MIC_socket');
            $query = $this->db->get('micro');
            return $query->result_array();
        }

        public function get_MIC_img(){
            $this->db->select('MIC_img');
            $query = $this->db->get('micro');
            return $query->result_array();
        }   
}
?>