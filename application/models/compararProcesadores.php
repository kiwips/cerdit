<?php 
class compararProcesadores extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getProcesadores(){
        $procesadoresIntelPCC= $this->db->query("select PK_MIC, MIC_nombre,MIC_marca,MIC_precio from micro where  MIC_marca LIKE '%intel%' and FK_MIC_PK_TIE=1")->result_array();
        $procesadoresIntelPCB= $this->db->query("select PK_MIC, MIC_nombre,MIC_marca from micro where  MIC_marca LIKE '%intel%' and FK_MIC_PK_TIE=2")->result_array();

        $procesadoresAmdPCC= $this->db->query("select PK_MIC, MIC_nombre,MIC_marca,MIC_precio from micro where  MIC_marca LIKE '%amd%' and FK_MIC_PK_TIE=1")->result_array();
        $procesadoresAmdPCB= $this->db->query("select PK_MIC, MIC_nombre,MIC_marca from micro where  MIC_marca LIKE '%amd%' and FK_MIC_PK_TIE=2")->result_array();
        echo "<pre>";
        print_r($procesadoresAmdPCB);
    }
   
}
?>
  