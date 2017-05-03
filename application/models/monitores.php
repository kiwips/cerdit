<?php 
class monitores extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_MON(){
            $this->db->select('PK_MON');
            $query = $this->db->get('monitores');
            return $query->result_array();
        }
        
        public function get_MON_nombre(){
            $this->db->select('MON_nombre');
            $query = $this->db->get('monitores');
            return $query->result_array();
        }

        public function get_MON_precio(){
            $this->db->select('MON_precio');
            $query = $this->db->get('monitores');
            return $query->result_array();
        }

        public function get_MON_img(){
            $this->db->select('MON_img');
            $query = $this->db->get('monitores');
            return $query->result_array();
        }

        public function get_MON_frecuencia(){
            $this->db->select('MON_frecuencia');
            $query = $this->db->get('monitores');    
            return $query->result_array();
        }

        public function get_MON_resolucion(){
            $this->db->select('MON_resolucion');
            $query = $this->db->get('monitores');
            return $query->result_array();
        }

        public function get_MON_tamaño(){
            $this->db->select('MON_tamaño');
            $query = $this->db->get('monitores');
            return $query->result_array();
        }

        public function get_MON_sincronizacion(){
            $this->db->select('MON_sincronizacion');
            $query = $this->db->get('monitores');
            return $query->result_array();
        }
}
?>