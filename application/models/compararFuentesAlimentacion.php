<?php 
class compararFuentesAlimentacion extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getFuentesAlimentacion(){
        $fuentesAlimentacionTacensPCC= $this->db->query("select PK_FUE, FUE_nombre,FUE_marca from fuente_alimentacion where  FUE_marca LIKE '%tacens%' and FK_FUE_PK_TIE=1")->result_array();
        $fuentesAlimentacionTacensPCB= $this->db->query("select PK_FUE, FUE_nombre,FUE_marca from fuente_alimentacion where  FUE_marca LIKE '%tacens%' and FK_FUE_PK_TIE=2")->result_array();
        $fuentesAlimentacionNoxPCC= $this->db->query("select PK_FUE, FUE_nombre,FUE_marca from fuente_alimentacion where  FUE_marca LIKE '%nox%' and FK_FUE_PK_TIE=1")->result_array();
        $fuentesAlimentacionNoxPCB= $this->db->query("select PK_FUE, FUE_nombre,FUE_marca from fuente_alimentacion where  FUE_marca LIKE '%nox%' and FK_FUE_PK_TIE=2")->result_array();
        $fuentesAlimentacionAerocoolPCC= $this->db->query("select PK_FUE, FUE_nombre,FUE_marca from fuente_alimentacion where  FUE_marca LIKE '%aerocool%' and FK_FUE_PK_TIE=1")->result_array();
        $fuentesAlimentacionAerocoolPCB= $this->db->query("select PK_FUE, FUE_nombre,FUE_marca from fuente_alimentacion where  FUE_marca LIKE '%aerocool%' and FK_FUE_PK_TIE=2")->result_array();
        echo "<pre>";
        print_r($fuentesAlimentacionTacensPCC);
    }
   
}
?>
  