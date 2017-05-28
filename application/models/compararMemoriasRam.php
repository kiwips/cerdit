<?php 
class compararMemoriasRam extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getMemoriasRam(){
        $memoriasRamKingstonPCC= $this->db->query("select PK_RAM, RAM_nombre,RAM_marca,RAM_precio from memoria_ram where  RAM_marca LIKE '%kingston%' and FK_RAM_PK_TIE=1")->result_array();
        $memoriasRamKingstonPCB= $this->db->query("select PK_RAM, RAM_nombre,RAM_marca from memoria_ram where  RAM_marca LIKE '%kingston%' and FK_RAM_PK_TIE=2")->result_array();
        echo "<pre>";
        print_r($memoriasRamKingstonPCC);
    }
   
}
?>
  