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
<<<<<<< HEAD
				 if ($marca=='aerocool') {
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='antec'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='b-move'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='bitfenix'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='bultaco'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='cooler-master'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='corsair'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='enermax'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='fractal'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='l-link'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='lian-li'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='nfortec'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='nox'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='nzxt'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='owlotech'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='phanteks'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='silverstone'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='tacens'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='thermaltake'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='tooq'){
					array_push($contenido[$marca], file_get_contents($url));
				}
=======
				array_push($contenido[$marca], file_get_contents($url));
>>>>>>> master
			}
		}
		$nombre = "data-name";
		$precio = "data-price";
		$imagen = "src";
		
		$productos = array();
		$j=0;
		$a=0;
		$anterior=0;
		$marca = array('aerocool', 'antec', 'b-move', 'bitfenix', 'bultaco', 'cooler-master', 'corsair', 'enermax', 'fractal', 'l-link', 'lian-li', 'nfortec', 'nox', 'nzxt', 'owlotech', 'phanteks', 'silverstone', 'tacens', 'thermaltake', 'tooq',);
		foreach ($marca as $clave => $val) {
			$a=0;
			$anterior=0;
			while(true){
				if ($a<$anterior) {
					break;
				}
<<<<<<< HEAD
				/*====================PRODUCT NAME==============*/
				$anterior=$a;
				$a = strpos($contenido[$val][0], $nombre,$a);
=======
				/*=================IMAGES=====================*/

				$a = strpos($contenido[$val][0], $imagen,$a);
>>>>>>> master
				$aux=0;
				$aux2=0;
				$aux3=false;
				$contInicio=0;
				$contFin=0;
<<<<<<< HEAD
				$nombreProducto="";
				end($productos);
				$key=key($productos);
=======
				$imagenProducto="";
>>>>>>> master
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
<<<<<<< HEAD
			 		@$nombreProducto.= $contenido[$val][0][$i];
			 	}
				/*=================PRICING=====================*/

				$a = strpos($contenido[$val][0], $precio,$a);
=======
			 		@$imagenProducto.= $contenido[$val][0][$i];
			 	}
				if ($imagenProducto == @$productos[$key]['imagen']) {
			 		$j++;
					continue;
				}
				/*====================PRODUCT NAME==============*/
				$anterior=$a;
				$a = strpos($contenido[$val][0], $nombre,$a);
>>>>>>> master
				$aux=0;
				$aux2=0;
				$aux3=false;
				$contInicio=0;
				$contFin=0;
<<<<<<< HEAD
				$precioProducto="";

=======
				$nombreProducto="";
				end($productos);
				$key=key($productos);
>>>>>>> master
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
<<<<<<< HEAD
			 		@$precioProducto.= $contenido[$val][0][$i];
			 	}
				if ($nombreProducto == @$productos[$key]['producto']) {
				 		$j++;
						continue;
				}
				

				/*=================IMAGES=====================*/

				$a = strpos($contenido[$val][0], $imagen,$a);
=======
			 		@$nombreProducto.= $contenido[$val][0][$i];
			 	}
				/*=================PRICING=====================*/

				$a = strpos($contenido[$val][0], $precio,$a);
>>>>>>> master
				$aux=0;
				$aux2=0;
				$aux3=false;
				$contInicio=0;
				$contFin=0;
<<<<<<< HEAD
				$imagenProducto="";
=======
				$precioProducto="";

>>>>>>> master
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
<<<<<<< HEAD
			 		@$imagenProducto.= $contenido[$val][0][$i];
			 	}
				if ($nombreProducto == @$productos[$key]['imagen']) {
=======
			 		@$precioProducto.= $contenido[$val][0][$i];
			 	}
				if ($nombreProducto == @$productos[$key]['producto']) {
>>>>>>> master
				 		$j++;
						continue;
				}else{
					if ($nombreProducto=='es'||$imagenProducto==' data-hTOR=') {
						continue;
					}
					array_push($productos, array('FK_TOR_PK_PROD'=>7,'TOR_img'=>$imagenProducto,'TOR_nombre'=>$nombreProducto,'TOR_precio'=>$precioProducto,'TOR_marca'=>$val,'FK_TOR_PK_TIE'=>1));	
				}
				$j++;
			
			}
		}
<<<<<<< HEAD
			echo "<pre>";
			print_r($productos);
			echo "</pre>";
			/*return $productos;*/
=======
			// echo "<pre>";
			// print_r($productos);
			// echo "</pre>";
			return $productos;
>>>>>>> master
	}
}
?>