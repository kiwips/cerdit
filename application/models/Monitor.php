<?php 
class Monitor extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_MON(){
            $this->db->select('PK_MON');
            $query = $this->db->get('monitor');
            return $query->result_array();
        }

        public function get_FK_MON_PK_PROD(){
            $this->db->select('FK_MON_PK_PROD');
            $query = $this->db->get('monitor');
            return $query->result_array();
        }        
        
        public function get_MON_nombre(){
            $this->db->select('MON_nombre');
            $query = $this->db->get('monitor');
            return $query->result_array();
        }

        public function get_MON_precio(){
            $this->db->select('MON_precio');
            $query = $this->db->get('monitor');
            return $query->result_array();
        }

        public function get_MON_img(){
            $this->db->select('MON_img');
            $query = $this->db->get('monitor');
            return $query->result_array();
        }

        public function get_MON_frecuencia(){
            $this->db->select('MON_frecuencia');
            $query = $this->db->get('monitor');    
            return $query->result_array();
        }

        public function get_MON_resolucion(){
            $this->db->select('MON_resolucion');
            $query = $this->db->get('monitor');
            return $query->result_array();
        }

        public function get_MON_tamaño(){
            $this->db->select('MON_tamaño');
            $query = $this->db->get('monitor');
            return $query->result_array();
        }

        public function get_MON_sincronizacion(){
            $this->db->select('MON_sincronizacion');
            $query = $this->db->get('monitor');
            return $query->result_array();
        }


            /*No tocar*/
    public function get_all_coincidir(){
        $query = $this->db->query("SELECT `MON_nombre`,`MON_precio`,`MON_img`,`MON_marca`,`FK_MON_PK_TIE`,`MON_coincidir` FROM monitor WHERE `MON_coincidir` !=0");

        return $query->result_array();
    }    

    public function get_all_no_coincidir(){
        $query = $this->db->query("SELECT `MON_nombre`,`MON_precio`,`MON_img`,`MON_marca`,`FK_MON_PK_TIE`,`MON_coincidir` FROM monitor WHERE `MON_coincidir`=0");

        return $query->result_array();
    }      

        public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('MON_marca');
            $query = $this->db->get('monitor');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(MON_PRECIO)) AS precio_minimo, ROUND(MAX(MON_PRECIO)) AS precio_maximo from monitor;");
            return $query->result_array();
        }             
}
?>