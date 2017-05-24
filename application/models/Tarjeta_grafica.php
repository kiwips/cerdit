<?php 
class Tarjeta_grafica extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function get_PK_GRF(){
        $this->db->select('PK_GRF');
        $query = $this->db->get('tarjeta_grafica');
        return $query->result_array();
    }

    public function get_FK_GRF_PK_PROD(){
        $this->db->select('FK_GRF_PK_PROD');
        $query = $this->db->get('tarjeta_grafica');
        return $query->result_array();
    }

    public function get_GRF_nombre(){
        $this->db->select('GRF_nombre');
        $query = $this->db->get('tarjeta_grafica');
        return $query->result_array();
    }

    public function get_GRF_precio(){
        $this->db->select('GRF_precio');
        $query = $this->db->get('tarjeta_grafica');    
        return $query->result_array();
    }

    public function get_GRF_img(){
        $this->db->select('GRF_img');
        $query = $this->db->get('tarjeta_grafica');
        return $query->result_array();
    }   

    public function get_GRF_clock(){
        $this->db->select('GRF_clock');
        $query = $this->db->get('tarjeta_grafica');
        return $query->result_array();
    }         

            /*No tocar*/
        public function get_all(){
            $this->db->select('GRF_nombre, GRF_precio,GRF_precio,GRF_img,GRF_marca');
            $query = $this->db->get('tarjeta_grafica');
            return $query->result_array();
        }

        public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('GRF_marca');
            $query = $this->db->get('tarjeta_grafica');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(GRF_PRECIO)) AS precio_minimo, ROUND(MAX(GRF_PRECIO)) AS precio_maximo from tarjeta_grafica;");
            return $query->result_array();
        }           
}
?>