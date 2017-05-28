<?php 
class pcbRatones extends CI_Model{//novanovanovanova
    function __construct(){
        parent::__construct();
    }
    private $cont=0;
    private $urlRatones=array(
    		'netway'=>array(
    			'http://www.pcbox.com/categorias/ratones-gaming/m/netway?nodo=396/',

    		),
	    	'mars-gaming'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/mars-gaming?nodo=396/',
	    	),
	    	'innobo'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/innobo?nodo=396/',
	    	),
	    	'hiditec'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/hiditec?nodo=396/',
	    	),
	    	'coolbox'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/coolbox?nodo=396/',
	    	),
	    	'b-move'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/b-move?nodo=396/',
	    	),
	    	'natec-genesis'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/natec-genesis?nodo=396/',
	    	),
	    	'the-g-lab'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/the-g-lab?nodo=396/',
	    	),
	    	'bluestork'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/bluestork?nodo=396/',
	    	),
	    	'bultaco'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/bultaco?nodo=396/',
	    	),
	    	'corsair'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/corsair?nodo=396/',
	    	),
	    	'gigabyte'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/gigabyte?nodo=396/',
	    	),
	    	'keep-out'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/keep-out?nodo=396/',
	    	),
	    	'logitech'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/logitech?nodo=396/',
	    	),
	    	'mad-catz'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/mad-catz?nodo=396/',
	    	),
	    	'msi'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/msi?nodo=396/',
	    	),
	    	'nacon'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/nacon?nodo=396/',
	    	),
	    	'nox'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/nox?nodo=396/',
	    	),
	    	'ozone'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/ozone?nodo=396/',
	    	),
	    	'port-technology'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/port-technology?nodo=396/',
	    	),
	    	'razer'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/razer?nodo=396/',
	    	),
	    	'steelseries'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/steelseries?nodo=396/',
	    	),
	    	'thunderx3'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/thunderx3?nodo=396/',
	    	),
	    	'trust'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/trust?nodo=396/',
	    	),
	    	'woxter'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/woxter?nodo=396/',
	    	),
	    	'zowie'=>array(
	    		'http://www.pcbox.com/categorias/ratones-gaming/m/zowie?nodo=396/',
	    	),
    );
    function price(){
		return rand(4,90);
	}
	function saveProductsPCB(){
		$contenido=array(
			'netway'=>array(),
	    	'mars-gaming'=>array(),
	    	'innobo'=>array(),
	    	'hiditec'=>array(),
	    	'coolbox'=>array(),
	    	'b-move'=>array(),
	    	'natec-genesis'=>array(),
	    	'the-g-lab'=>array(),
	    	'bluestork'=>array(),
	    	'bultaco'=>array(),
	    	'corsair'=>array(),
	    	'gigabyte'=>array(),
	    	'keep-out'=>array(),
	    	'logitech'=>array(),
	    	'mad-catz'=>array(),
	    	'msi'=>array(),
	    	'nacon'=>array(),
	    	'nox'=>array(),
	    	'ozone'=>array(),
	    	'port-technology'=>array(),
	    	'razer'=>array(),
	    	'steelseries'=>array(),
	    	'thunderx3'=>array(),
	    	'trust'=>array(),
	    	'woxter'=>array(),
	    	'zowie'=>array(),
	    );
		foreach ($this->urlRatones as $marca => $value) {
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
		$marca = array('netway','mars-gaming','innobo','hiditec','coolbox','b-move', 'natec-genesis', 'the-g-lab', 'bluestork', 'bultaco', 'corsair', 'gigabyte', 'keep-out', 'logitech', 'mad-catz', 'msi', 'nacon', 'nox', 'ozone', 'port-technology', 'razer', 'steelseries', 'thunderx3', 'trust', 'woxter', 'zowie',);
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
					$precioProducto=$this->price();
					if ($precioProducto==' alt=' || $nombreProducto=='//fonts.googleapis.com/css?family=Handlee') {
						continue;
					}
					array_push($productos, array('FK_RAT_PK_PROD'=>11,'RAT_nombre'=>$nombreProducto,'RAT_precio'=>$precioProducto,'RAT_marca'=>$val,'FK_RAT_PK_TIE'=>2));	
				}
			}
				$j++;
			
			}
			
			// return $productos;
			// $this->cont++;
			// echo "<pre>";
			// print_r($productos);
			// echo "</pre>";
			return $productos;
			// $this->cont=0;
	}
}
?>