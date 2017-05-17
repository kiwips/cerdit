<?php 
class pccMemoriaRam extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlRam = array(
    	'avexir'=>array(
	    	'https://www.pccomponentes.com/memorias-ram/avexir',	    	
    	),

    	'corsair'=>array(
	    	'https://www.pccomponentes.com/memorias-ram/corsair',
	    	'https://www.pccomponentes.com/memorias-ram/corsair#relevance-1',
	    	'https://www.pccomponentes.com/memorias-ram/corsair#relevance-2',
	    	'https://www.pccomponentes.com/memorias-ram/corsair#relevance-3',
		),

    	'crucial'=>array(
	    	'https://www.pccomponentes.com/memorias-ram/crucial',
    	),

    	'g-skill'=>array(
	    	'https://www.pccomponentes.com/memorias-ram/g-skill',
	    	'https://www.pccomponentes.com/memorias-ram/g-skill#relevance-1',
	    	'https://www.pccomponentes.com/memorias-ram/g-skill#relevance-2',
	    	'https://www.pccomponentes.com/memorias-ram/g-skill#relevance-3',
	    	'https://www.pccomponentes.com/memorias-ram/g-skill#relevance-4',
	    	'https://www.pccomponentes.com/memorias-ram/g-skill#relevance-5',
	    	'https://www.pccomponentes.com/memorias-ram/g-skill#relevance-6',
	    	'https://www.pccomponentes.com/memorias-ram/g-skill#relevance-7',
	    	'https://www.pccomponentes.com/memorias-ram/g-skill#relevance-8',
    	),

    	'kingston'=>array(
	    	'https://www.pccomponentes.com/memorias-ram/kingston',
	    	'https://www.pccomponentes.com/memorias-ram/kingston#relevance-1',
	    	'https://www.pccomponentes.com/memorias-ram/kingston#relevance-2',
	    	'https://www.pccomponentes.com/memorias-ram/kingston#relevance-3',
	    	'https://www.pccomponentes.com/memorias-ram/kingston#relevance-4',	    	
    	)
    );
	function saveProductsPCC(){
		$contenido=array(			
	    	'avexir'=>array(),
	    	'corsair'=>array(),
	    	'crucial'=>array(),
	    	'g-skill'=>array(),
	    	'kingston'=>array(),
	    );
		foreach ($this->urlRam as $marca => $value) {
			foreach ($value as $key1 => $url) {
				array_push($contenido[$marca], file_get_contents($url));
			}
		}
		$nombre = "data-name";
		$precio = "data-price";
		$imagen = "src";
		
		$productos = array();
		$j=0;
		$a=0;
		$anterior=0;
		$marca = array('avexir', 'corsair', 'crucial', 'g-skill', 'kingston');

		foreach ($marca as $clave => $val) {
			$a=0;
			$anterior=0;
			while(true){
				if ($a<$anterior) {
					break;
				}
				/*=================IMAGES=====================*/

				$a = strpos($contenido[$val][0], $imagen,$a);
				$aux=0;
				$aux2=0;
				$aux3=false;
				$contInicio=0;
				$contFin=0;
				$imagenProducto="";
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
			 		@$imagenProducto.= $contenido[$val][0][$i];
			 	}
				if ($imagenProducto == @$productos[$key]['imagen']) {
				 		$j++;
						continue;
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
					if ($nombreProducto=='es'||$imagenProducto==' data-href='||$imagenProducto=='https://') {
						continue;
					}
					array_push($productos, array('FK_RAM_PK_PROD'=>5,'RAM_img'=>$imagenProducto,'RAM_nombre'=>$nombreProducto,'RAM_precio'=>$precioProducto,'RAM_marca'=>$val));	
				}
				$j++;
			
			}
		}
			// echo "<pre>";
			// print_r($productos);
			// echo "</pre>";
			return $productos;
	}
}
?>