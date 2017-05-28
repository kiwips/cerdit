<?php 
class compararTorres extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getTorres(){
        $torresNoxPCC= $this->db->query("select PK_TOR, TOR_nombre,TOR_marca,TOR_precio from torre where  TOR_marca LIKE '%nox%' and FK_TOR_PK_TIE=1")->result_array();
        $torresNoxPCB= $this->db->query("select PK_TOR, TOR_nombre,TOR_marca from torre where  TOR_marca LIKE '%nox%' and FK_TOR_PK_TIE=2")->result_array();

        $torresTacensPCC= $this->db->query("select PK_TOR, TOR_nombre,TOR_marca,TOR_precio from torre where  TOR_marca LIKE '%tacens%' and FK_TOR_PK_TIE=1")->result_array();
        $torresTacensPCB= $this->db->query("select PK_TOR, TOR_nombre,TOR_marca from torre where  TOR_marca LIKE '%tacens%' and FK_TOR_PK_TIE=2")->result_array();
        echo "<pre>";
        print_r($torresTacensPCB);
    }
   
}
?>
  