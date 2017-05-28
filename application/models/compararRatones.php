<?php 
class compararRatones extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getRatones(){
        $ratonesLogitechPCC= $this->db->query("select PK_RAT, RAT_nombre,RAT_marca,RAT_precio from raton where  RAT_marca LIKE '%logitech%' and FK_RAT_PK_TIE=1")->result_array();
        $ratonesLogitechPCB= $this->db->query("select PK_RAT, RAT_nombre,RAT_marca from raton where  RAT_marca LIKE '%logitech%' and FK_RAT_PK_TIE=2")->result_array();     
        echo "<pre>";
        print_r($ratonesLogitechPCB);
    }
   
}
?>
  