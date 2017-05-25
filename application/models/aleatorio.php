<?php 
class aleatorio extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    private $nombreProductos = array(
    		'DD',
    		'FUE',
    		'ram',
    		'micro',
    	);
    private $nombrebdd=array(
    	'disco_duro',
    	'fuente_alimentacion',
    	);

    public function sacarProdAleatorio(){
    	$rand = rand(0,1);
    	
    	$nombre = $this->nombreProductos[$rand];

    	$query=$this->db->query('Select max(PK_'.$nombre.') as maximo from '.$this->nombrebdd[$rand])->result_array();
    	$randProd=rand(1,$query[0]['maximo']);
    	$queryImagenProd=$this->db->query('select '.$this->nombreProductos[$rand].'_img, '.$this->nombreProductos[$rand].'_precio from '.$this->nombrebdd[$rand].' WHERE PK_'.$this->nombreProductos[$rand].'='.$randProd);
    	return $queryImagenProd->result_array();
    }
}
?>