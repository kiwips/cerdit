<?php 
class Disco_duro extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function get_PK_DD(){
        $this->db->select('PK_DD');
        $query = $this->db->get('disco_duros');
        return $query->result_array();
    }

    public function get_FK_DD_PK_PROD(){
        $this->db->select('FK_DD_PK_PROD');
        $query = $this->db->get('disco_duros');
        return $query->result_array();
    }

    public function get_DD_nombre(){
        $this->db->select('DD_nombre');
        $query = $this->db->get('disco_duros');
        return $query->result_array();
    }

    public function get_DD_precio(){
        $this->db->select('DD_precio');
        $query = $this->db->get('disco_duros');    
        return $query->result_array();
    }

    public function get_DD_img(){
        $this->db->select('DD_img');
        $query = $this->db->get('disco_duros');
        return $query->result_array();
    }

    public function get_DD_tipo(){
        $this->db->select('DD_tipo');
        $query = $this->db->get('disco_duros');    
        return $query->result_array();
    }

    public function get_DD_pulgadas(){
        $this->db->select('DD_pulgadas');
        $query = $this->db->get('disco_duros');
        return $query->result_array();
    }   

    public function get_DD_velocidad(){
        $this->db->select('DD_velocidad');
        $query = $this->db->get('disco_duros');
        return $query->result_array();
    }     

    /*No tocar*/
    public function get_all_coincidir(){
        $query = $this->db->query("SELECT `DD_nombre`,`DD_precio`,`DD_img`,`DD_marca`,`FK_DD_PK_TIE`,`DD_coincidir` FROM disco_duro WHERE `DD_coincidir` !=0");

        return $query->result_array();
    }    

    public function get_all_no_coincidir(){
        $query = $this->db->query("SELECT `DD_nombre`,`DD_precio`,`DD_img`,`DD_marca`,`FK_DD_PK_TIE`,`DD_coincidir` FROM disco_duro WHERE `DD_coincidir`=0");

        return $query->result_array();
    }    




    public function get_all_marca(){
        $this->db->distinct();
        $this->db->select('DD_marca');
        $query = $this->db->get('disco_duro');
        return $query->result_array();
    }

    public function get_min_max_precio(){
        $query = $this->db->query("SELECT ROUND(MIN(DD_PRECIO)) AS precio_minimo, ROUND(MAX(DD_PRECIO)) AS precio_maximo from disco_duro;");
        return $query->result_array();
    }
}
?>