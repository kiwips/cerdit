<?php 
class productos extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_PROD(){
            $this->db->select('PK_PROD');
            $query = $this->db->get('productos');
            return $query->result_array();
        }

        public function get_PROD_NOM(){
            $this->db->select('PROD_nom');
            $query = $this->db->get('productos');
            return $query->result_array();
        }
}
?>