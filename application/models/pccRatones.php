<?php 
class pccFuentes extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    private $cont=0;
    private $urlFuentes=array(
    	'aerocool'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/aerocool',
    	),
    	'antec'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/antec',
    	),
    	'cooler-master'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/cooler-master',
    	),
    	'corsair'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/corsair',
	    	'https://www.pccomponentes.com/fuentes-alimentacion/corsair#relevance-1',
    	),
    	'enermax'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/enermax',
	    	'https://www.pccomponentes.com/fuentes-alimentacion/enermax#relevance-1',
    	),
    	'evga'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/evga',
    	),
    	'fractal'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/fractal',
	    	
    	),
    	'l-link'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/l-link',
	    	
    	),
    	'nfortec'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/nfortec',
    	),
    	'nox'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/nox',
    	),
    	'owlotech'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/owlotech',
    	),
    	'phoenix'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/phoenix',
    	),
    	'seasonic'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/seasonic',
	    	'https://www.pccomponentes.com/fuentes-alimentacion/seasonic#relevance-1',
    	),
    	'silverstone'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/silverstone',
    	),
    	'tacens'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/tacens',
    	),
    	'thermaltake'=>array(
	    	'https://www.pccomponentes.com/fuentes-alimentacion/thermaltake',
	    	'https://www.pccomponentes.com/fuentes-alimentacion/thermaltake#relevance-1',
    	),
    );
	function saveProductsPCC(){
		$contenido=array(
		'aerocool'=>array(
	  
	    	),
	    	'antec'=>array(
		    	
	    	),
	    	'cooler-master'=>array(
		    	
		    ),
	    	'corsair'=>array(
		    	
	    	),
	    	'enermax'=>array(

	    	),
	    	'evga'=>array(
		    	
	    	),
	    	'fractal'=>array(
		    	
	    	),
	    	'l-link'=>array(
		    	
	    	),
	    	'nfortec'=>array(
		    	
	    	),
	    	'nox'=>array(
		    	
	    	),
	    	'owlotech'=>array(
		    	
	    	),
	    	'phoenix'=>array(
		    	
	    	),
	    	'seasonic'=>array(
		    	
	    	),
	    	'silverstone'=>array(
		    	
	    	),
	    	'tacens'=>array(
		    	
	    	),
	    	'thermaltake'=>array(
		    	
	    	),
	    );
		foreach ($this->urlFuentes as $marca => $value) {
			foreach ($value as $key1 => $url) {
				if ($marca=='aerocool') {
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='antec') {
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='cooler-master'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='corsair'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='enermax'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='evga'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='fractal'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='l-link'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='nfortec'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='nox'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='owlotech'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='phoenix'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='seasonic'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='silverstone'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='tacens'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='thermaltake'){
					array_push($contenido[$marca], file_get_contents($url));
				}
			}
		}
		$nombre = "data-name";
		$precio = "data-price";
		$imagen = "src";
		
		$productos = array();
		$j=0;
		$a=0;
		$anterior=0;
		$marca = array('aerocool','antec','cooler-master','corsair','enermax','evga','fractal','l-link','nfortec','nox','owlotech','phoenix','seasonic','silverstone','tacens','thermaltake');

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
				if ($nombreProducto == @$productos[$key]['imagen']) {
				 		$j++;
						continue;
				}else{
					if ($nombreProducto=='es'||$imagenProducto==' data-href=') {
						continue;
					}
					array_push($productos, array('FK_FUE_PK_PROD'=>4,'FUE_img'=>$imagenProducto,'FUE_nombre'=>$nombreProducto,'FUE_precio'=>$precioProducto,'FUE_marca'=>$val));	
				}
				$j++;
			
			}
			
			// return $productos;
			// $this->cont++;
		}
			echo "<pre>";
			print_r($productos);
			echo "<pre>";
			// return $productos;
			// $this->cont=0;
	}
}
?>