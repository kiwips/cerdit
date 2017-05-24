<?php 
class Placa_Base extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_PLB(){
            $this->db->select('PK_PLB');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }

        public function get_FK_PLB_PK_PROD(){
            $this->db->select('FK_PLB_PK_PROD');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }        

        public function get_PLB_precio(){
            $this->db->select('PLB_precio');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }

        public function get_PLB_socket(){
            $this->db->select('PLB_socket');
            $query = $this->db->get('placa_base');    
            return $query->result_array();
        }

        public function get_PLB_ram(){
            $this->db->select('PLB_ram');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }

        public function get_PLB_puertos_pci(){
            $this->db->select('PLB_puertos_pci');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }

        public function get_PLB_chipset(){
            $this->db->select('PLB_chipset');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }

        public function get_PLB_tipo(){
            $this->db->select('PLB_tipo');
            $query = $this->db->get('placa_base');    
            return $query->result_array();
        }

        public function get_PLB_con_usb(){
            $this->db->select('PLB_con_usb');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }

        public function get_PLB_con_red(){
            $this->db->select('PLB_con_red');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }

        public function get_PLB_con_video(){
            $this->db->select('PLB_con_video');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }

        public function get_PLB_con_sata(){
            $this->db->select('PLB_con_sata');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }        

        public function get_PLB_con_ram(){
            $this->db->select('PLB_con_ram');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }       

        public function get_PLB_img(){
            $this->db->select('PLB_img');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }   

      /*No tocar*/
        public function get_all(){
            $this->db->select('PLB_nombre, PLB_precio,PLB_precio,PLB_img,PLB_marca');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        } 

        public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('PLB_marca');
            $query = $this->db->get('placa_base');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(PLB_PRECIO)) AS precio_minimo, ROUND(MAX(PLB_PRECIO))AS precio_maximo from placa_base;");
            return $query->result_array();
        }                 
}
?>