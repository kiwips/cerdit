<?php 
class Memoria_ram extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_RAM(){
            $this->db->select('PK_RAM');
            $query = $this->db->get('memoria_ram');
            return $query->result_array();
        }

      public function get_FK_RAM_PK_PROD(){
            $this->db->select('FK_RAM_PK_PROD');
            $query = $this->db->get('memoria_ram');
            return $query->result_array();
        }

        public function get_RAM_nombre(){
            $this->db->select('RAM_nombre');
            $query = $this->db->get('memoria_ram');
            return $query->result_array();
        }

        public function get_RAM_precio(){
            $this->db->select('RAM_precio');
            $query = $this->db->get('memoria_ram');    
            return $query->result_array();
        }

        public function get_RAM_img(){
            $this->db->select('RAM_img');
            $query = $this->db->get('memoria_ram');
            return $query->result_array();
        }   
        
        public function get_RAM_num_ram(){
            $this->db->select('RAM_num_ram');
            $query = $this->db->get('memoria_ram');
            return $query->result_array();
        } 

            /*No tocar*/
    public function get_all_coincidir(){
        $query = $this->db->query("SELECT `RAM_nombre`,`RAM_precio`,`RAM_img`,`RAM_marca`,`FK_RAM_PK_TIE`,`RAM_coincidir` FROM memoria_ram WHERE `RAM_coincidir` !=0");

        return $query->result_array();
    }    

    public function get_all_no_coincidir(){
        $query = $this->db->query("SELECT `RAM_nombre`,`RAM_precio`,`RAM_img`,`RAM_marca`,`FK_RAM_PK_TIE`,`RAM_coincidir` FROM memoria_ram WHERE `RAM_coincidir`=0");

        return $query->result_array();
    }            

        public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('RAM_marca');
            $query = $this->db->get('memoria_ram');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(RAM_PRECIO)) AS precio_minimo, ROUND(MAX(RAM_PRECIO)) AS precio_maximo from memoria_ram;");
            return $query->result_array();
        }                  
}
?>