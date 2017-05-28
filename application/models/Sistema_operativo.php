<?php 
class Sistema_operativo extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_SO(){
            $this->db->select('PK_SO');
            $query = $this->db->get('sistema_operativo');
            return $query->result_array();
        }

        public function get_FK_SO_PK_PROD(){
            $this->db->select('FK_SO_PK_PROD');
            $query = $this->db->get('sistema_operativo');
            return $query->result_array();
        }        

        public function get_SO_nombre(){
            $this->db->select('SO_nombre');
            $query = $this->db->get('sistema_operativo');
            return $query->result_array();
        }

        public function get_SO_precio(){
            $this->db->select('SO_precio');
            $query = $this->db->get('sistema_operativo');    
            return $query->result_array();
        }

        public function get_SO_img(){
            $this->db->select('SO_img');
            $query = $this->db->get('sistema_operativo');
            return $query->result_array();
        }  

       /*No tocar*/
    public function get_all_coincidir(){
        $query = $this->db->query("SELECT `SO_nombre`,`SO_precio`,`SO_img`,`SO_marca`,`FK_SO_PK_TIE`,`SO_coincidir` FROM sistema_operativo WHERE `SO_coincidir` !=0");

        return $query->result_array();
    }    

    public function get_all_no_coincidir(){
        $query = $this->db->query("SELECT `SO_nombre`,`SO_precio`,`SO_img`,`SO_marca`,`FK_SO_PK_TIE`,`SO_coincidir` FROM sistema_operativo WHERE `SO_coincidir`=0");

        return $query->result_array();
    }      

        public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('SO_marca');
            $query = $this->db->get('sistema_operativo');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(SO_PRECIO)) AS precio_minimo, ROUND(MAX(SO_PRECIO)) AS precio_maximo from sistema_operativo;");
            return $query->result_array();
        }        
}
?>