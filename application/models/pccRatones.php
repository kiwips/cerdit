<?php 
class pccRatones extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    private $cont=0;
    private $urlRatones=array(
		'3dconnexion'=>array(
	  		'https://www.pccomponentes.com/ratones/3dconnexion',
	    	),

	    	'approx'=>array(
		    	'https://www.pccomponentes.com/ratones/approx',
		    ),
	    	'asus'=>array(
		    	'https://www.pccomponentes.com/ratones/asus',
	    	),
	    	'bg'=>array(
	    		'https://www.pccomponentes.com/ratones/bg',
	    	),
	    	'bluestork'=>array(
		    	'https://www.pccomponentes.com/ratones/bluestork',
	    	),
	    	'bultaco'=>array(
		    	'https://www.pccomponentes.com/ratones/bultaco',
	    	),
	    	'conceptronic'=>array(
		    	'https://www.pccomponentes.com/ratones/conceptronic',
	    	),
	    	'cooler-master'=>array(
		    	'https://www.pccomponentes.com/ratones/cooler-master',
	    	),
	    	'corsair'=>array(
		    	'https://www.pccomponentes.com/ratones/corsair',
	    	),
	    	'creative'=>array(
		    	'https://www.pccomponentes.com/ratones/creative',
	    	),
	    	'elephone'=>array(
		    	'https://www.pccomponentes.com/ratones/elephone',
	    	),
	    	'g-skill'=>array(
		    	'https://www.pccomponentes.com/ratones/g-skill',
	    	),
	    	'kingston'=>array(
		    	'https://www.pccomponentes.com/ratones/kingston',
	    	),
	    	'krom'=>array(
		    	'https://www.pccomponentes.com/ratones/krom',
	    	),
	    	'logitech'=>array(
		    	'https://www.pccomponentes.com/raton-logitech',
		    	'https://www.pccomponentes.com/raton-logitech#relevance-1',
	    	),
	    	'mad-catz'=>array(
		    	'https://www.pccomponentes.com/ratones-mad-catz',
	    	),
	    	'microsoft'=>array(
		    	'https://www.pccomponentes.com/ratones/microsoft',
		    	'https://www.pccomponentes.com/ratones/microsoft#relevance-1'
	    	),
	    	'newskill'=>array(
		    	'https://www.pccomponentes.com/ratones/newskill',
	    	),
	    	'ngs'=>array(
		    	'https://www.pccomponentes.com/ratones/ngs',
	    	),
	    	'owlotech'=>array(
		    	'https://www.pccomponentes.com/ratones/owlotech',
	    	),
	    	'ozone'=>array(
	    		'https://www.pccomponentes.com/ratones/ozone',
	    	),
	    	'razer'=>array(
		    	'https://www.pccomponentes.com/raton-razer',
	    	),
	    	'sharkoon'=>array(
		    	'https://www.pccomponentes.com/ratones/sharkoon',
	    	),
	    	'steelseries'=>array(
		    	'https://www.pccomponentes.com/raton-steelseries',
	    	),
	    	'tacens'=>array(
		    	'https://www.pccomponentes.com/ratones/tacens',
	    	),
	    	'the-g-lab'=>array(
		    	'https://www.pccomponentes.com/ratones/the-g-lab',
	    	),
	    	'thermaltake'=>array(
		    	'https://www.pccomponentes.com/ratones/thermaltake',
	    	),
	    	'thunder-x3'=>array(
		    	'https://www.pccomponentes.com/ratones/thunder-x3',
	    	),
	    	'toshiba'=>array(
		    	'https://www.pccomponentes.com/ratones/toshiba',
	    	),
	    	'trust'=>array(
		    	'https://www.pccomponentes.com/ratones/trust',
		    	'https://www.pccomponentes.com/ratones/trust#relevance-1',
	    	),
	    	'unotec'=>array(
		    	'https://www.pccomponentes.com/ratones/unotec',
	    	),
	    	'zowie'=>array(
		    	'https://www.pccomponentes.com/ratones/zowie',
	    	),
    );

	function saveProductsPCC(){
		$contenido=array(
			'3dconnexion'=>array(),
	    	'approx'=>array(),
	    	'asus'=>array(),
	    	'bg'=>array(),
	    	'bluestork'=>array(),
	    	'bultaco'=>array(),
	    	'conceptronic'=>array(),
	    	'cooler-master'=>array(),
	    	'corsair'=>array(),
	    	'creative'=>array(),
	    	'elephone'=>array(),
	    	'g-skill'=>array(),
	    	'kingston'=>array(),
	    	'krom'=>array(),
	    	'logitech'=>array(),
	    	'mad-catz'=>array(),
	    	'microsoft'=>array(),
	    	'newskill'=>array(),
	    	'ngs'=>array(),
	    	'owlotech'=>array(),
	    	'ozone'=>array(),
	    	'razer'=>array(),
	    	'sharkoon'=>array(),
	    	'steelseries'=>array(),
	    	'tacens'=>array(),
	    	'the-g-lab'=>array(),
	    	'thermaltake'=>array(),
	    	'thunder-x3'=>array(),
	    	'toshiba'=>array(),
	    	'trust'=>array(),
	    	'unotec'=>array(),
	    	'zowie'=>array(),
	    );
		foreach ($this->urlRatones as $marca => $value) {
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
		$marca = array('3dconnexion','approx','asus','bg','bluestork','bultaco', 'conceptronic', 'cooler-master', 'corsair', 'creative', 'elephone', 'g-skill', 'kingston', 'krom', 'logitech', 'mad-catz', 'microsoft', 'newskill', 'ngs', 'owlotech', 'ozone', 'razer', 'sharkoon', 'steelseries', 'tacens', 'the-g-lab', 'thermaltake', 'thunder-x3', 'toshiba', 'trust', 'unotec', 'zowie',);
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
					array_push($productos, array('FK_RAT_PK_PROD'=>11,'RAT_img'=>$imagenProducto,'RAT_nombre'=>$nombreProducto,'RAT_precio'=>$precioProducto,'RAT_marca'=>$val,'FK_RAT_PK_TIE'=>1));	
				}
				$j++;
			
			}
			
			// return $productos;
			// $this->cont++;
		}
			// echo "<pre>";
			// print_r($productos);
			// echo "</pre>";
			return $productos;
			// $this->cont=0;
	}
}
?>