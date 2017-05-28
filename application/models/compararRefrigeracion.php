<?php 
class compararRefrigeracion extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getRefrigeracion(){
        $refrigeracionNoxPCC= $this->db->query("select PK_REF, REF_nombre,REF_marca,REF_precio from refrigeracion where  REF_marca LIKE '%nox%' and FK_REF_PK_TIE=1")->result_array();
        $refrigeracionNoxPCB= $this->db->query("select PK_REF, REF_nombre,REF_marca from refrigeracion where  REF_marca LIKE '%nox%' and FK_REF_PK_TIE=2")->result_array();
        $refrigeracionCoolerMasterPCC= $this->db->query("select PK_REF, REF_nombre,REF_marca,REF_precio from refrigeracion where  REF_marca LIKE '%cooler-master%' and FK_REF_PK_TIE=1")->result_array();
        $refrigeracionCoolerMasterPCB= $this->db->query("select PK_REF, REF_nombre,REF_marca from refrigeracion where  REF_marca LIKE '%cooler-master%' and FK_REF_PK_TIE=2")->result_array();
        $refrigeracionNoctuaPCC= $this->db->query("select PK_REF, REF_nombre,REF_marca,REF_precio from refrigeracion where  REF_marca LIKE '%noctua%' and FK_REF_PK_TIE=1")->result_array();
        $refrigeracionNoctuaPCB= $this->db->query("select PK_REF, REF_nombre,REF_marca from refrigeracion where  REF_marca LIKE '%noctua%' and FK_REF_PK_TIE=2")->result_array();
        $refrigeracionTacensPCC= $this->db->query("select PK_REF, REF_nombre,REF_marca,REF_precio from refrigeracion where  REF_marca LIKE '%tacens%' and FK_REF_PK_TIE=1")->result_array();
        $refrigeracionTacensPCB= $this->db->query("select PK_REF, REF_nombre,REF_marca from refrigeracion where  REF_marca LIKE '%tacens%' and FK_REF_PK_TIE=2")->result_array();

        echo "<pre>";
        print_r($refrigeracionTacensPCB);
    }
   
}
?>
  