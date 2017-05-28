<?php 
class compararTeclados extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getTeclados(){
        $TecladosNoxPCC= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca,TEC_precio from teclado where  TEC_marca LIKE '%nox%' and FK_TEC_PK_TIE=1")->result_array();
        $TecladosNoxPCB= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca from teclado where  TEC_marca LIKE '%nox%' and FK_TEC_PK_TIE=2")->result_array();
    	$TecladosCorsairPCC= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca,TEC_precio from teclado where  TEC_marca LIKE '%corsair%' and FK_TEC_PK_TIE=1")->result_array();
        $TecladosCorsairPCB= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca from teclado where  TEC_marca LIKE '%corsair%' and FK_TEC_PK_TIE=2")->result_array();
        $TecladosLogitechPCC= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca,TEC_precio from teclado where  TEC_marca LIKE '%logitech%' and FK_TEC_PK_TIE=1")->result_array();
        $TecladosLogitechPCB= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca from teclado where  TEC_marca LIKE '%logitech%' and FK_TEC_PK_TIE=2")->result_array();
        $TecladosOzonePCC= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca,TEC_precio from teclado where  TEC_marca LIKE '%ozone%' and FK_TEC_PK_TIE=1")->result_array();
        $TecladosOzonePCB= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca from teclado where  TEC_marca LIKE '%ozone%' and FK_TEC_PK_TIE=2")->result_array();
        $TecladosRazerPCC= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca,TEC_precio from teclado where  TEC_marca LIKE '%razer%' and FK_TEC_PK_TIE=1")->result_array();
        $TecladosRazerPCB= $this->db->query("select PK_TEC, TEC_nombre,TEC_marca from teclado where  TEC_marca LIKE '%razer%' and FK_TEC_PK_TIE=2")->result_array();
        echo "<pre>";
        print_r($TecladosRazerPCB);
    }
   
}
?>
  