<?php 
class Torre extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_TOR(){
            $this->db->select('PK_TOR');
            $query = $this->db->get('torre');
            return $query->result_array();
        }

        public function get_FK_TOR_PK_PROD(){
            $this->db->select('PK_TOR');
            $query = $this->db->get('torre');
            return $query->result_array();
        }

        public function get_TOR_nombre(){
            $this->db->select('TOR_nombre');
            $query = $this->db->get('torre');
            return $query->result_array();
        }

        public function get_TOR_precio(){
            $this->db->select('TOR_precio');
            $query = $this->db->get('torre');    
            return $query->result_array();
        }

        public function get_TOR_img(){
            $this->db->select('TOR_img');
            $query = $this->db->get('torre');
            return $query->result_array();
        }   
        
        public function get_TOR_tamano_x(){
            $this->db->select('TOR_tamano_x');
            $query = $this->db->get('torre');
            return $query->result_array();
        }     

        public function get_TOR_tamano_y(){
            $this->db->select('TOR_tamano_y');
            $query = $this->db->get('torre');
            return $query->result_array();
        } 

        public function get_TOR_tamano_z(){
            $this->db->select('TOR_tamano_z');
            $query = $this->db->get('torre');
            return $query->result_array();
        }  

        /*No tocar*/
        public function get_all(){
            $this->db->select('TOR_nombre, TOR_precio,TOR_precio,TOR_img,TOR_marca');
            $query = $this->db->get('torre');
            return $query->result_array();
        } 

        public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('TOR_marca');
            $query = $this->db->get('torre');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(TOR_PRECIO)) AS precio_minimo, ROUND(MAX(TOR_PRECIO)) AS precio_maximo from torre;");
            return $query->result_array();
        }                
}
?>