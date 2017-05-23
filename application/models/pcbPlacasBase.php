<?php 
class pcbPlacasBase extends CI_Model{//novanovanovanovanovanovanova
    function __construct(){
        parent::__construct();
    }  
    private $urlPlacasBase=array(
    	'intel'=>array(
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1150?nodo=90',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1150/p/2?nodo=90',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151/p/2?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151/p/3?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151/p/4?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151/p/5?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151/p/6?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151/p/7?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151/p/8?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151/p/9?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i3-i5-i7-1151/p/10?nodo=411',
    		'http://www.pcbox.com/categorias/placas-intel-core-i7-sk-2011-3?nodo=93',
    		'http://www.pcbox.com/categorias/placas-intel-core2-duo-775?nodo=84',
    		'http://www.pcbox.com/categorias/placas-intel-atom-ion?nodo=85',

    	),
    	'amd'=>array(
    		'http://www.pcbox.com/categorias/placas-amd-fm2plus?nodo=91',
    		'http://www.pcbox.com/categorias/placas-amd-fm2?nodo=89',
    		'http://www.pcbox.com/categorias/placas-amd-am4?nodo=428',
    		'http://www.pcbox.com/categorias/placas-amd-am4/p/2?nodo=428',
    		'http://www.pcbox.com/categorias/placas-amd-am3plus?nodo=87',
    		'http://www.pcbox.com/categorias/placas-amd-am1?nodo=92',
    	),
    	
    );
	function saveProductsPCB(){
		$contenido=array(
			'intel'=>array(),
			'amd'=>array(),
	    	
	    );
		foreach ($this->urlPlacasBase as $marca => $value) {
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
		$marca = array('intel','amd');

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
					array_push($productos, array('FK_PLB_PK_PROD'=>2,'PLB_nombre'=>$nombreProducto,'PLB_precio'=>$precioProducto,'PLB_marca'=>$val,'FK_PLB_PK_TIE'=>2));	
				}
			}
				$j++;
			

			
			// return $productos;
			// $this->cont++;
		}
			echo "<pre>";
			print_r($productos);
			echo "<pre>";
			return $productos;
	}
}
?>