<?php 
class compararPlacasBase extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getPlacasBase(){
        $placasBaseAmdPCC= $this->db->query("select PK_PLB, PLB_nombre,PLB_marca,PLB_precio from placa_base where  PLB_marca LIKE '%asus%' and FK_PLB_PK_TIE=1")->result_array();
        $placasBaseAmdPCB= $this->db->query("select PK_PLB, PLB_nombre,PLB_marca from placa_base where  PLB_marca LIKE '%amd%' and FK_PLB_PK_TIE=2")->result_array();

        $placasBaseIntelPCC= $this->db->query("select PK_PLB, PLB_nombre,PLB_marca,PLB_precio from placa_base where  PLB_marca LIKE '%gigabyte%' and FK_PLB_PK_TIE=1")->result_array();
        $placasBaseIntelPCB= $this->db->query("select PK_PLB, PLB_nombre,PLB_marca from placa_base where  PLB_marca LIKE '%intel%' and FK_PLB_PK_TIE=2")->result_array();
        
     
        echo "<pre>";
        print_r($placasBaseIntelPCB);
    }
   
}
?>
  