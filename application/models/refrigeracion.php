<?php 
class refrigeracion extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_REF(){
            $this->db->select('PK_REF');
            $query = $this->db->get('refrigeracion');
            return $query->result_array();
        }

        public function get_FK_REF_PK_PROD(){
            $this->db->select('FK_REF_PK_PROD');
            $query = $this->db->get('refrigeracion');
            return $query->result_array();
        }        

        public function get_REF_nombre(){
            $this->db->select('REF_nombre');
            $query = $this->db->get('refrigeracion');
            return $query->result_array();
        }

        public function get_REF_liquida(){
            $this->db->select('REF_liquida');
            $query = $this->db->get('refrigeracion');
            return $query->result_array();
        }

        public function get_REF_precio(){
            $this->db->select('REF_precio');
            $query = $this->db->get('refrigeracion');    
            return $query->result_array();
        }

        public function get_REF_img(){
            $this->db->select('REF_img');
            $query = $this->db->get('refrigeracion');
            return $query->result_array();
        }

        public function get_REF_socket(){
            $this->db->select('REF_socket');
            $query = $this->db->get('refrigeracion');    
            return $query->result_array();
        }

        public function get_REF_tamano_x(){
            $this->db->select('REF_tamano_x');
            $query = $this->db->get('refrigeracion');
            return $query->result_array();
        }     

        public function get_REF_tamano_y(){
            $this->db->select('REF_tamano_y');
            $query = $this->db->get('refrigeracion');
            return $query->result_array();
        } 

        public function get_REF_tamano_z(){
            $this->db->select('REF_tamano_z');
            $query = $this->db->get('refrigeracion');
            return $query->result_array();
        }     
             
}
?>