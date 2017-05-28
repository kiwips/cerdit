<?php 
class procesador extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_MIC(){
            $this->db->select('PK_MIC');
            $query = $this->db->get('micro');
            return $query->result_array();
        }

        public function get_FK_MIC_PK_PROD(){
            $this->db->select('FK_MIC_PK_PROD');
            $query = $this->db->get('micro');
            return $query->result_array();
        }

        public function get_MIC_nombre(){
            $this->db->select('MIC_nombre');
            $query = $this->db->get('micro');
            return $query->result_array();
        }

        public function get_MIC_precio(){
            $this->db->select('MIC_precio');
            $query = $this->db->get('micro');    
            return $query->result_array();
        }

        public function get_MIC_socket(){
            $this->db->select('MIC_socket');
            $query = $this->db->get('micro');
            return $query->result_array();
        }

        public function get_MIC_img(){
            $this->db->select('MIC_img');
            $query = $this->db->get('micro');
            return $query->result_array();
        }   

        /*No tocar*/
    public function get_all_coincidir(){
        $query = $this->db->query("SELECT `MIC_nombre`,`MIC_precio`,`MIC_img`,`MIC_marca`,`FK_MIC_PK_TIE`,`MIC_coincidir` FROM micro WHERE `MIC_coincidir` !=0");

        return $query->result_array();
    }    

    public function get_all_no_coincidir(){
        $query = $this->db->query("SELECT `MIC_nombre`,`MIC_precio`,`MIC_img`,`MIC_marca`,`FK_MIC_PK_TIE`,`MIC_coincidir` FROM micro WHERE `MIC_coincidir`=0");

        return $query->result_array();
    }    

      public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('MIC_marca');
            $query = $this->db->get('micro');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(MIC_PRECIO)) AS precio_minimo, ROUND(MAX(MIC_PRECIO)) AS precio_maximo from micro;");
            return $query->result_array();
        }
}
?>