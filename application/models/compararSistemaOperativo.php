<?php 
class compararSistemaOperativo extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getSistemaOperativo(){
        $sistemaOperativoWindowsPCC= $this->db->query("select PK_SO, SO_nombre,SO_marca,SO_precio from sistema_operativo where  SO_marca LIKE '%windows%' and FK_SO_PK_TIE=1")->result_array();
        $sistemaOperativoWindowsPCB= $this->db->query("select PK_SO, SO_nombre,SO_marca from sistema_operativo where  SO_marca LIKE '%windows%' and FK_SO_PK_TIE=2")->result_array();
     

        echo "<pre>";
        print_r($sistemaOperativoWindowsPCB);
    }
   
}
?>
  