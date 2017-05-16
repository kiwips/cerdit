<?php 
class insertProducto extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function insertProductos($listaProducto,$tipoProducto){
        foreach ($listaProducto as $key => $value) {
            foreach ($value as $key1 => $value1) {

              $this->db->insert($tipoProducto, $listaProducto[$key]); 
          }
      }
  }  
}
?>