<?php 
class discosDuros extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_DD(){
            $this->db->select('PK_DD');
            $query = $this->db->get('discosduros');
            return $query->result_array();
        }

        public function get_DD_nombre(){
            $this->db->select('DD_nombre');
            $query = $this->db->get('discosduros');
            return $query->result_array();
        }

        public function get_DD_precio(){
            $this->db->select('DD_precio');
            $query = $this->db->get('discosduros');    
            return $query->result_array();
        }

        public function get_DD_img(){
            $this->db->select('DD_img');
            $query = $this->db->get('discosduros');
            return $query->result_array();
        }

        public function get_DD_tipo(){
            $this->db->select('DD_tipo');
            $query = $this->db->get('discosduros');    
            return $query->result_array();
        }

        public function get_DD_pulgadas(){
            $this->db->select('DD_pulgadas');
            $query = $this->db->get('discosduros');
            return $query->result_array();
        }   

        public function get_DD_velocidad(){
            $this->db->select('DD_velocidad');
            $query = $this->db->get('discosduros');
            return $query->result_array();
        }                   
}
?>