<?php 
class pccRefrigeracion extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlRefrigeracion=array(
    	'antec'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/antec',
    	),

    	'cooler-master'=>array(
    		'https://www.pccomponentes.com/ventiladores-cpu/cooler-master',
    	),

    	'enermax'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/enermax',   	
    	),

    	'lepa'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/lepa',
    	),    

    	'nfortec'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/nfortec',
    	),	

    	'noctua'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/noctua',
    	),

    	'nox'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/nox',
    	),

    	'phanteks'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/phanteks',
    	),

    	'silverstone'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/silverstone',    	
    	), 

    	'tacens'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/tacens',	    	
    	),    	

    	'thermalright'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/thermalright',
    	),

    	'thermaltake'=>array(
	    	'https://www.pccomponentes.com/ventiladores-cpu/thermaltake',
    	), 

    	'antec-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/antec',
    	),

    	'cooler-master-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/cooler-master',
    	),    

    	'corsair-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/corsair',
    	),	

    	'ekwb-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/ekwb',
	    	'https://www.pccomponentes.com/refrigeracion-liquida/ekwb#relevance-1',
	    	'https://www.pccomponentes.com/refrigeracion-liquida/ekwb#relevance-2',
	    	'https://www.pccomponentes.com/refrigeracion-liquida/ekwb#relevance-3',
	    	'https://www.pccomponentes.com/refrigeracion-liquida/ekwb#relevance-4',
	    	'https://www.pccomponentes.com/refrigeracion-liquida/ekwb#relevance-5',
    	),

	'enermax-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/enermax',
    	),

    	'fractal-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/fractal',
    	),

    	'lepa-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/lepa',
    	),

    	'nox-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/nox',
    	), 

    	'nzxt-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/nzxt',
    	),    	

    	'silverstone-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/silverstone',
    	),

    	'thermaltake-liquida'=>array(
	    	'https://www.pccomponentes.com/refrigeracion-liquida/thermaltake',
    	),     	      	
    );
	function saveProductsPCC(){
		$contenido=array(			
	    	'antec'=>array(),
	    	'cooler-master'=>array(),
	    	'enermax'=>array(),
	    	'lepa'=>array(),
	    	'nfortec'=>array(),
	    	'noctua'=>array(),
	    	'nox'=>array(),
	    	'phanteks'=>array(),
	    	'silverstone'=>array(),
	    	'tacens'=>array(),
	    	'thermalright'=>array(),
	    	'thermaltake'=>array(),
	    	'antec-liquida'=>array(),
	    	'cooler-master-liquida'=>array(),
	    	'corsair-liquida'=>array(),
	    	'ekwb-liquida'=>array(),
	    	'enermax-liquida'=>array(),
	    	'fractal-liquida'=>array(),
	    	'lepa-liquida'=>array(),
	    	'nox-liquida'=>array(),
	    	'nzxt-liquida'=>array(),
	    	'silverstone-liquida'=>array(),
	    	'thermaltake-liquida'=>array(),


	    );
		foreach ($this->urlRefrigeracion as $marca => $value) {
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
					array_push($productos, array('FK_REF_PK_PROD'=>7,'REF_img'=>$imagenProducto,'REF_nombre'=>$nombreProducto,'REF_precio'=>$precioProducto,'REF_marca'=>$val,'FK_REF_PK_TIE'=>1));	
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