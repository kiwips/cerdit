<?php 
class pccTeclados extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlTeclados=array(
    	'asus'=>array(
	    	'https://www.pccomponentes.com/teclados/asus',
    	),

    	'b-move'=>array(
	    	'https://www.pccomponentes.com/teclados/b-move',
    	),    

    	'bg'=>array(
	    	'https://www.pccomponentes.com/teclados/bg',	    	
    	),	

    	'bluestork'=>array(
	    	'https://www.pccomponentes.com/teclados/bluestork',	    	
    	),

    	'cooler-master'=>array(
	    	'https://www.pccomponentes.com/teclados/cooler-master',	    	
    	),

    	'corsair'=>array(
    		'https://www.pccomponentes.com/teclado-corsair',	  
	    	'https://www.pccomponentes.com/teclado-corsair#relevance-1',	    	
    	),    	

    	'g-skill'=>array(
	    	'https://www.pccomponentes.com/teclados/g-skill',
    	),

    	'kingston'=>array(
	    	'https://www.pccomponentes.com/teclados/kingston',	    	
    	),

    	'krom'=>array(
	    	'https://www.pccomponentes.com/teclados/krom',	    	
    	),     	       	
    	'l-link'=>array(
	    	'https://www.pccomponentes.com/teclados/l-link',	    	
    	),
    	'leotec'=>array(
	    	'https://www.pccomponentes.com/teclados/leotec',	    	
    	),
    	'logitech'=>array(
    		'https://www.pccomponentes.com/teclados/logitech',	    	
	    	'https://www.pccomponentes.com/teclados/logitech#relevance-1',	    	
    	),
    	'microsoft'=>array(
	    	'https://www.pccomponentes.com/teclados/microsoft',	    	
    	),
    	'newskill'=>array(
	    	'https://www.pccomponentes.com/teclados/newskill',	    	
    	),
    	'ngs'=>array(
	    	'https://www.pccomponentes.com/teclados/ngs',	    	
    	),
    	'nox'=>array(
	    	'https://www.pccomponentes.com/teclados/nox',	    	
    	),

    	'oem'=>array(
	    	'https://www.pccomponentes.com/teclados/oem',
    	), 
    	'owlotech'=>array(
	    	'https://www.pccomponentes.com/teclados/owlotech',	    	
    	),
    	'ozone'=>array(
	    	'https://www.pccomponentes.com/teclados/ozone',	    	
    	),
    	'phoenix'=>array(
	    	'https://www.pccomponentes.com/teclados/phoenix',	    	
    	),
    	'razer'=>array(
	    	'https://www.pccomponentes.com/teclado-razer',	    	
    	),
    	'rikomagic'=>array(
	    	'https://www.pccomponentes.com/teclados/rikomagic',	    	
    	),
    	'satechi'=>array(
	    	'https://www.pccomponentes.com/teclados/satechi',	    	
    	),
    	'silverht'=>array(
	    	'https://www.pccomponentes.com/teclados/silverht',	    	
    	),
    	'steelseries'=>array(
	    	'https://www.pccomponentes.com/teclados/steelseries',	    	
    	),
    	'tacens'=>array(
	    	'https://www.pccomponentes.com/teclados/tacens',	    	
    	),
    	'the-g-lab'=>array(
	    	'https://www.pccomponentes.com/teclados/the-g-lab',	    	
    	),
    	'thermaltake'=>array(
	    	'https://www.pccomponentes.com/teclados/thermaltake',	    	
    	),
    	'thunder-x3'=>array(
	    	'https://www.pccomponentes.com/teclados/thunder-x3',	    	
    	),
    	'trust'=>array(
	    	'https://www.pccomponentes.com/teclados/trust',	    	
    	),
    	'unotec'=>array(
	    	'https://www.pccomponentes.com/teclados/unotec',	    	
    	),
    	
    );
	function saveProductsPCC(){
		$contenido=array(			
	    	'asus'=>array(),
	    	'b-move'=>array(),
	    	'bg'=>array(),
	    	'bluestork'=>array(),
	    	'cooler-master'=>array(),
	    	'corsair'=>array(),
	    	'g-skill'=>array(),
	    	'kingston'=>array(),    	
	    	'krom'=>array(),     	       	
	    	'l-link'=>array(),
	    	'leotec'=>array(),
	    	'logitech'=>array(),
	    	'microsoft'=>array(),
	    	'newskill'=>array(),
	    	'ngs'=>array(),
	    	'nox'=>array(),
	    	'oem'=>array(), 
	    	'owlotech'=>array(),
	    	'ozone'=>array(),
	    	'phoenix'=>array(),
	    	'razer'=>array(),
	    	'rikomagic'=>array(),
	    	'satechi'=>array(),
	    	'silverht'=>array(),
	    	'steelseries'=>array(),
	    	'tacens'=>array(),
	    	'the-g-lab'=>array(),
	    	'thermaltake'=>array(),
	    	'thunder-x3'=>array(),
	    	'trust'=>array(),
	    	'unotec'=>array(),
	    );
		foreach ($this->urlTeclados as $marca => $value) {
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
		$marca = array('asus','b-move','bg','bluestork','cooler-master','corsair','g-skill','kingston',    'krom','l-link','leotec','logitech','microsoft','newskill','ngs','nox','oem', 'owlotech','ozone','phoenix','razer','rikomagic','satechi','silverht','steelseries','tacens','the-g-lab','thermaltake','thunder-x3','trust','unotec',);

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
					array_push($productos, array('FK_REF_PK_PROD'=>10,'REF_img'=>$imagenProducto,'REF_nombre'=>$nombreProducto,'REF_precio'=>$precioProducto,'REF_marca'=>$val));	
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