<?php 
class pccTorres extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlTorres=array(
    	'aerocool'=>array(
	    	'https://www.pccomponentes.com/torres-atx/aerocool',
    	),

    	'antec'=>array(
    		'https://www.pccomponentes.com/torres-atx/antec',
    	),

    	'b-move'=>array(
	    	'https://www.pccomponentes.com/torres-atx/b-move',
    	),

    	'bitfenix'=>array(
	    	'https://www.pccomponentes.com/torres-atx/bitfenix',
    	),    

    	'bultaco'=>array(
	    	'https://www.pccomponentes.com/torres-atx/bultaco',
    	),	

    	'cooler-master'=>array(
	    	'https://www.pccomponentes.com/torres-atx/cooler-master',
	    	'https://www.pccomponentes.com/torres-atx/cooler-master#relevance-1',
    	),

    	'corsair'=>array(
	    	'https://www.pccomponentes.com/torres-atx/corsair',
	    	'https://www.pccomponentes.com/torres-atx/corsair#relevance-1',
    	),

    	'enermax'=>array(
	    	'https://www.pccomponentes.com/torres-atx/enermax',
    	),

    	'fractal'=>array(
	    	'https://www.pccomponentes.com/torres-atx/fractal',
	    	'https://www.pccomponentes.com/torres-atx/fractal#relevance-1',
    	), 

    	'l-link'=>array(
	    	'https://www.pccomponentes.com/torres-atx/l-link',
    	),    	

    	'lian-li'=>array(
	    	'https://www.pccomponentes.com/torres-atx/lian-li',
    	),

    	'nfortec'=>array(
	    	'https://www.pccomponentes.com/torres-atx/nfortec',
    	), 

    	'nox'=>array(
	    	'https://www.pccomponentes.com/torres-atx/nox',
	    	'https://www.pccomponentes.com/torres-atx/nox#relevance-1',
    	),

    	'nzxt'=>array(
	    	'https://www.pccomponentes.com/torres-atx/nzxt',
	    	'https://www.pccomponentes.com/torres-atx/nzxt#relevance-1',
    	),    

    	'owlotech'=>array(
	    	'https://www.pccomponentes.com/torres-atx/owlotech',
    	),	

    	'phanteks'=>array(
	    	'https://www.pccomponentes.com/torres-atx/phanteks',
	    	'https://www.pccomponentes.com/torres-atx/phanteks#relevance-1',
	    	'https://www.pccomponentes.com/torres-atx/phanteks#relevance-2',
    	),

	'silverstone'=>array(
	    	'https://www.pccomponentes.com/torres-atx/silverstone',
    	),

    	'tacens'=>array(
	    	'https://www.pccomponentes.com/torres-atx/tacens',
    	),

    	'thermaltake'=>array(
	    	'https://www.pccomponentes.com/torres-atx/thermaltake',
	    	'https://www.pccomponentes.com/torres-atx/thermaltake#relevance-1',
    	),

    	'tooq'=>array(
	    	'https://www.pccomponentes.com/torres-atx/tooq',
    	),   	      	
    );
	function saveProductsPCC(){
		$contenido=array(			
	    	'aerocool'=>array(),
	    	'antec'=>array(),
	    	'b-move'=>array(),
	    	'bitfenix'=>array(),
	    	'bultaco'=>array(),
	    	'cooler-master'=>array(),
	    	'corsair'=>array(),
	    	'enermax'=>array(),
	    	'fractal'=>array(),
	    	'l-link'=>array(),
	    	'lian-li'=>array(),
	    	'nfortec'=>array(),
	    	'nox'=>array(),
	    	'nzxt'=>array(),
	    	'owlotech'=>array(),
	    	'phanteks'=>array(),
	    	'silverstone'=>array(),
	    	'tacens'=>array(),
	    	'thermaltake'=>array(),
	    	'tooq'=>array(),
	    );
		foreach ($this->urlTorres as $marca => $value) {
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
		$marca = array('antec', 'cooler-master', 'enermax', 'lepa', 'nfortec', 'noctua', 'nox', 'phanteks', 'silverstone', 'tacens', 'thermalright', 'thermaltake','antec-liquida', 'cooler-master-liquida', 'corsair-liquida', 'ekwb-liquida', 'enermax-liquida', 'fractal-liquida', 'lepa-liquida', 'nox-liquida', 'nzxt-liquida', 'silverstone-liquida', 'thermaltake-liquida');

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
				if ($nombreProducto == @$productos[$key]['imagen']) {
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
					if ($nombreProducto=='es'||$imagenProducto==' data-hTOR=') {
						continue;
					}
					array_push($productos, array('FK_TOR_PK_PROD'=>7,'TOR_img'=>$imagenProducto,'TOR_nombre'=>$nombreProducto,'TOR_precio'=>$precioProducto,'TOR_marca'=>$val));	
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