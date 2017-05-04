<?php 
class fuentes extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_FUE(){
            $this->db->select('PK_FUE');
            $query = $this->db->get('fuente alimentacion');
            return $query->result_array();
        }

        public function get_FK_FUE_PK_PROD(){
            $this->db->select('FK_FUE_PK_PROD');
            $query = $this->db->get('fuente alimentacion');
            return $query->result_array();
        }        

        public function get_FUE_nombre(){
            $this->db->select('FUE_nombre');
            $query = $this->db->get('fuente alimentacion');
            return $query->result_array();
        }

        public function get_FUE_precio(){
            $this->db->select('FUE_precio');
            $query = $this->db->get('fuente alimentacion');    
            return $query->result_array();
        }

        public function get_FUE_img(){
            $this->db->select('FUE_img');
            $query = $this->db->get('fuente alimentacion');
            return $query->result_array();
        }         
}
?>