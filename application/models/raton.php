<?php 
class raton extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_RAT(){
            $this->db->select('PK_RAT');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

        public function get_FK_RAT_PK_PROD(){
            $this->db->select('FK_RAT_PK_PROD');
            $query = $this->db->get('raton');
            return $query->result_array();
        }        

        public function get_RAT_nombre(){
            $this->db->select('RAT_nombre');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

        public function get_RAT_precio(){
            $this->db->select('RAT_precio');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

        public function get_RAT_img(){
            $this->db->select('RAT_img');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

        public function get_RAT_dpi(){
            $this->db->select('RAT_dpi');
            $query = $this->db->get('raton');    
            return $query->result_array();
        }

        public function get_RAT_cable(){
            $this->db->select('RAT_cable');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

            /*No tocar*/
    public function get_all_coincidir(){
        $query = $this->db->query("SELECT `RAT_nombre`,`RAT_precio`,`RAT_img`,`RAT_marca`,`FK_RAT_PK_TIE`,`RAT_coincidir` FROM raton WHERE `RAT_coincidir` !=0");

        return $query->result_array();
    }    

    public function get_all_no_coincidir(){
        $query = $this->db->query("SELECT `RAT_nombre`,`RAT_precio`,`RAT_img`,`RAT_marca`,`FK_RAT_PK_TIE`,`RAT_coincidir` FROM raton WHERE `RAT_coincidir`=0");

        return $query->result_array();
    }            

        public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('RAT_marca');
            $query = $this->db->get('raton');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(RAT_PRECIO)) AS precio_minimo, ROUND(MAX(RAT_PRECIO)) AS precio_maximo from raton;");
            return $query->result_array();
        }          
}
?>