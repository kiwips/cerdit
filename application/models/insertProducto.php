<?php 
class insertProducto extends CI_Model{
  function __construct(){
      parent::__construct();
  }  

  public function insertarProductos($listaProducto,$tipoProducto){
    if (strpos($tipoProducto, '_pcb')) {
      $tipoProducto=str_replace('_pcb', '',$tipoProducto );
    }else{
      $this->db->query("truncate table ".$tipoProducto);
    }
    foreach ($listaProducto as $key => $value) {
        $this->db->insert($tipoProducto, $listaProducto[$key]); 
    }
    return true;
  }  
}
?>