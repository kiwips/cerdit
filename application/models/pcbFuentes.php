<?php 
class pcbFuentes extends CI_Model{
	    function __construct(){
	        parent::__construct();
	    }
	    private $cont=0;
	    private $urlFuentes=array(

    	'aerocool'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/aerocool?nodo=392/',
    	),
    	'approx'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/approx?nodo=392/m/approx/',
    	),
    	'cooler-master'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/cooler-master?nodo=392/m/approx/',
    	),
    	'coolbox'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/coolbox?nodo=392/m/approx/',
    	),
    	'b-move'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/b-move?nodo=392/m/approx/',
    	),
    	'gigabyte'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/gigabyte?nodo=392/m/approx/',
    	),
    	'hiditec'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/hiditec?nodo=392/m/approx/',
    	),
    	'innobo'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/innobo?nodo=392/m/approx/',
    	),
    	'mars-gaming'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/mars-gaming?nodo=392/m/approx/',
    	),
    	'nox'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/nox?nodo=392/m/approx/',
    	),
    	'tacens'=>array(
	    	'http://www.pcbox.com/categorias/fuente-de-alimentacion/m/tacens?nodo=392/m/approx/',
    	),
    );
    function price(){
		return rand(30,200);
	}
	function saveProductsPCB(){
		set_time_limit(90);
		$contenido=array(
	    	'aerocool'=>array(
		    	
	    	),
	    	'approx'=>array(
		    	
		    ),
	    	'cooler-master'=>array(
		    	
	    	),
	    	'coolbox'=>array(
		    	
	    	),
	    	'b-move'=>array(
		    	
	    	),
	    	'gigabyte'=>array(
		    	
	    	),
	    	'hiditec'=>array(
		    	
	    	),
	    	'innobo'=>array(
		    	
	    	),
	    	'mars-gaming'=>array(
		    	
	    	),
	    	'nox'=>array(
		    	
	    	),
	    	'tacens'=>array(
		    	
	    	),
	    );
		foreach ($this->urlFuentes as $marca => $value) {
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
		$marca = array('aerocool', 'approx', 'cooler-master', 'coolbox', 'b-move', 'gigabyte', 'hiditec', 'innobo', 'mars-gaming', 'nox', 'tacens');
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
					if ($b=='"'&&!$aux2) {
						$aux2++;
						$aux3=true;
						$contInicio=$aux+1;
					}else if ($b=='"'&&$aux2) {
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

					array_push($productos, array('FK_FUE_PK_PROD'=>4,'FUE_nombre'=>$nombreProducto,'FUE_precio'=>$precioProducto,'FUE_marca'=>$val,'FK_FUE_PK_TIE'=>2));
				}
			}
				$j++;
			// break;
		}
			
		echo "<pre>";
		print_r($productos);
		return $productos;	
		
		
	}
						
			// $this->cont=0;
}
?>
<!-- $marca = array('aerocool', 'approx', 'cooler-master', 'corsair', 'coolbox', 'b-move', 'gigabyte', 'hiditec', 'innobo', 'mars-gaming', 'nox', 'tacens'); -->
<!-- array_push($productos, array('FK_FUE_PK_PROD'=>4,'FUE_nombre'=>$nombreProducto,'FUE_precio'=>$precioProducto,'FUE_marca'=>$val,'FK_FUE_PK_TIE'=>2));	 -->