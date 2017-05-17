<?php 
class insertProducto extends CI_Model{
  function __construct(){
      parent::__construct();
  }  

  public function insertarProductos($listaProducto,$tipoProducto){
  	$this->db->query("ALTER TABLE ".$tipoProducto." AUTO_INCREMENT = 1");
  	$this->db->query("truncate ".$tipoProducto);
    foreach ($listaProducto as $key => $value) {
        $this->db->insert($tipoProducto, $listaProducto[$key]); 
    }
    return true;
  }  
}
?>