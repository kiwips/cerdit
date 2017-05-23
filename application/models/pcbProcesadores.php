<?php 
class pcbProcesadores extends CI_Model{//novanovanovanovanova
    function __construct(){
        parent::__construct();
    }  
    private $urlProcesadores=array(
    	'amd'=>array(
    		'http://www.pcbox.com/categorias/procesadores-amd-fm2plus?nodo=101',
    		'http://www.pcbox.com/categorias/procesadores-amd-fm2?nodo=99',
    		'http://www.pcbox.com/categorias/procesadores-amd-am4?nodo=429',
    		'http://www.pcbox.com/categorias/procesadores-amd-am3plus?nodo=97',
    		'http://www.pcbox.com/categorias/procesadores-amd-am3?nodo=94',
    		'http://www.pcbox.com/categorias/procesadores-amd-am1?nodo=102',
    	),
    	'intel'=>array(
    		   'http://www.pcbox.com/categorias/procesadores-intel-core-i3-i5-i7-1150?nodo=100',
    		   'http://www.pcbox.com/categorias/procesadores-intel-core-i3-i5-i7-1151?nodo=414',
    		   'http://www.pcbox.com/categorias/procesadores-intel-core-i3-i5-i7-1151/p/2?nodo=414',
    		   'http://www.pcbox.com/categorias/procesadores-intel-core-i7-sk-2011-3?nodo=103',	
    	),
    	
    );
	function saveProductsPCB(){
		$contenido=array(
			'amd'=>array(),
	    	'intel'=>array(),
	    );
		foreach ($this->urlProcesadores as $marca => $value) {
			foreach ($value as $key1 => $url) {
				array_push($contenido[$marca], file_get_contents($url));
			}
		}
		$nombre = 'itemprop="name" title';
		$precio = 'content';
		
		$productos = array();
		$j=0;
		$a=0;
		$anterior=0;
		$marca = array('amd','intel');

		foreach ($marca as $clave => $val) {
			$a=0;
			$anterior=0;
			while(true){
				if ($a<$anterior) {
					break;
				}
				/*====================PRODUCT NAME==============*/
				$anterior=$a;
				$a = strpos($contenido[$val][0], $nombre,$a);
				$aux=0;
				$aux2=0;
				$aux3=false;
				$contInicio=0;
				$contFin=0;
				$nombreProducto="";
				end($productos);
				$key=key($productos);
				while (true) {
					$b=$contenido[$val][0][$a+$aux];
					if ($b=="'"&&!$aux2) {
						$aux2++;
						$aux3=true;
						$contInicio=$aux+1;
					}else if ($b=="'"&&$aux2) {
						$contFin=$aux;
						break;
					}$aux++;
				}
				for ($i=$a+$contInicio; $i <$a+$contFin; $i++) { 
			 		@$nombreProducto.= $contenido[$val][0][$i];
			 	}
				/*=================PRICING=====================*/

				$a = strpos($contenido[$val][0], $precio,$a);
				$aux=0;
				$aux2=0;
				$aux3=false;
				$contInicio=0;
				$contFin=0;
				$precioProducto="";

				while (true) {
					$b=$contenido[$val][0][$a+$aux];
					if ($b=="'"&&!$aux2) {
						$aux2++;
						$aux3=true;
						$contInicio=$aux+1;
					}else if ($b=="'"&&$aux2) {
						$contFin=$aux;
						break;
					}$aux++;
				}
				for ($i=$a+$contInicio; $i <$a+$contFin; $i++) { 
			 		@$precioProducto.= $contenido[$val][0][$i];
			 	}
				if ($nombreProducto == @$productos[$key]['producto']) {
				 		$j++;
						continue;
				}else{
					if ($precioProducto==' alt=' || $nombreProducto=='//fonts.googleapis.com/css?family=Handlee') {
						continue;
					}
					array_push($productos, array('FK_MIC_PK_PROD'=>1,'MIC_nombre'=>$nombreProducto,'MIC_precio'=>$precioProducto,'MIC_marca'=>$val,'FK_MIC_PK_TIE'=>1));	
				}
			}
				$j++;
			
			}
			
			// return $productos;
			// $this->cont++;
			echo "<pre>";
			print_r($productos);
			echo "<pre>";
			return $productos;
	}
}
?>