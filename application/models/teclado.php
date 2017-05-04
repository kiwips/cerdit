<?php 
class teclado extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_TEC(){
            $this->db->select('PK_TEC');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

        public function get_FK_TEC_PK_PROD(){
            $this->db->select('FK_TEC_PK_PROD');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }        

        public function get_TEC_nombre(){
            $this->db->select('TEC_nombre');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

        public function get_TEC_precio(){
            $this->db->select('TEC_precio');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

        public function get_TEC_img(){
            $this->db->select('TEC_img');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

        public function get_TEC_tipo(){
            $this->db->select('TEC_tipo');
            $query = $this->db->get('teclado');    
            return $query->result_array();
        }

        public function get_TEC_cable(){
            $this->db->select('TEC_cable');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }
}
?>