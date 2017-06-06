<?php 
class pcbTeclados extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlTeclados=array(
    	'mars-gaming'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/mars-gaming?nodo=398/',
    	),
    	'netway'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/netway?nodo=398/',
    	),
    	'nox'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/nox?nodo=398/',
    	),
    	'b-move'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/b-move?nodo=398/',
    	),
    	'aerocool'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/aerocool?nodo=398/',
    	),
    	'bluestork'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/bluestork?nodo=398/',
    	),
    	'cherry'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/cherry?nodo=398/',
    	),
    	'coolbox'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/coolbox?nodo=398/',
    	),    	
    	'cooler-master'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/cooler-master?nodo=398/',
    	),     	      	
    	),     	       	
    	'corsair'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/corsair?nodo=398/',
    	),
    	'gigabyte'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/gigabyte?nodo=398/',
    	),
    	'hiditec'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/hiditec?nodo=398/',
    	),
    	'hyperx'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/hyperx?nodo=398/',
    	),
    	'keep-out'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/keep-out?nodo=398/',
    	),
    	'logitech'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/logitech?nodo=398/',
    	),
    	'nacon'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/nacon?nodo=398/',
    	),
    	'natec-genesis'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/natec-genesis?nodo=398/',
    	), 
    	'ozone'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/ozone?nodo=398/',
    	),
    	'razer'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/razer?nodo=398/',
    	),
    	'the-g-lab'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/the-g-lab?nodo=398/',
    	),
    	'thunderx3'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/thunderx3?nodo=398/',
    	),
    	'trust'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/trust?nodo=398/',
    	),
    	'woxter'=>array(
    		'http://www.pcbox.com/categorias/teclados-gaming/m/woxter?nodo=398/',
    	),
    	
    );

	function saveProductsPCB(){
		$contenido=array(			
	   	'mars-gaming'=>array(),
	   	'netway'=>array(),
	   	'nox'=>array(),
	   	'b-move'=>array(),
	   	'aerocool'=>array(),
	   	'bluestork'=>array(),
	   	'cherry'=>array(),
	   	'coolbox'=>array(),    	
	   	'cooler-master'=>array(),     	      	
	   	'corsair'=>array(),
	   	'gigabyte'=>array(),
	   	'hiditec'=>array(),
	   	'hyperx'=>array(),
	   	'keep-out'=>array(),
	   	'logitech'=>array(),
	   	'nacon'=>array(),
	   	'natec-genesis'=>array(), 
	   	'ozone'=>array(),
	   	'razer'=>array(),
	   	'the-g-lab'=>array(),
	   	'thunderx3'=>array(),
	   	'trust'=>array(),
	   	'woxter'=>array(),
	   );
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
		$marca = array('mars-gaming','netway','nox','b-move','aerocool','bluestork','cherry','coolbox','cooler-master','corsair','gigabyte','hiditec','hyperx','keep-out','logitech','nacon','natec-genesis','ozone','razer','the-g-lab','thunderx3','trust','woxter');

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
					array_push($productos, array('FK_TEC_PK_PROD'=>10,'TEC_nombre'=>$nombreProducto,'TEC_precio'=>$precioProducto,'TEC_marca'=>$val,'FK_TEC_PK_TIE'=>2));	
				}
			}
				$j++;
			
			}
			echo "<pre>";
			print_r($productos);
			echo "</pre>";
			return $productos;
	}
}
?>