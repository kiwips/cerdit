<?php 
class Fuente_alimentacion extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_FUE(){
            $this->db->select('PK_FUE');
            $query = $this->db->get('fuente_alimentacion');
            return $query->result_array();
        }

        public function get_FK_FUE_PK_PROD(){
            $this->db->select('FK_FUE_PK_PROD');
            $query = $this->db->get('fuente_alimentacion');
            return $query->result_array();
        }        

        public function get_FUE_nombre(){
            $this->db->select('FUE_nombre');
            $query = $this->db->get('fuente_alimentacion');
            return $query->result_array();
        }

        public function get_FUE_precio(){
            $this->db->select('FUE_precio');
            $query = $this->db->get('fuente_alimentacion');    
            return $query->result_array();
        }

        public function get_FUE_img(){
            $this->db->select('FUE_img');
            $query = $this->db->get('fuente_alimentacion');
            return $query->result_array();
        }   

            /*No tocar*/
    public function get_all_coincidir(){
        $query = $this->db->query("SELECT `FUE_nombre`,`FUE_precio`,`FUE_img`,`FUE_marca`,`FK_FUE_PK_TIE`,`FUE_coincidir` FROM fuente_alimentacion WHERE `FUE_coincidir` !=0");

        return $query->result_array();
    }    

    public function get_all_no_coincidir(){
        $query = $this->db->query("SELECT `FUE_nombre`,`FUE_precio`,`FUE_img`,`FUE_marca`,`FK_FUE_PK_TIE`,`FUE_coincidir` FROM fuente_alimentacion WHERE `FUE_coincidir`=0");
        return $query->result_array();
    }    

    public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('FUE_marca');
            $query = $this->db->get('fuente_alimentacion');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(FUE_PRECIO)) AS precio_minimo, ROUND(MAX(FUE_PRECIO)) AS precio_maximo from fuente_alimentacion;");
            return $query->result_array();
        }               
}
?>