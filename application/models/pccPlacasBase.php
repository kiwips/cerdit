<?php 
class pccPlacasBase extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlPlacasBase=array(
    	'asus'=>array(
    		'https://www.pccomponentes.com/placas-base/asus', 
    		'https://www.pccomponentes.com/placas-base/asus#relevance-1', 
    		'https://www.pccomponentes.com/placas-base/asus#relevance-2', 
    		'https://www.pccomponentes.com/placas-base/asus#relevance-3', 
    		'https://www.pccomponentes.com/placas-base/asus#relevance-4', 
    		'https://www.pccomponentes.com/placas-base/asus#relevance-5', 
    	),
    	'gigabyte'=>array(
    		'https://www.pccomponentes.com/placas-base/gigabyte', 
    		'https://www.pccomponentes.com/placas-base/gigabyte#relevance-1', 
    		'https://www.pccomponentes.com/placas-base/gigabyte#relevance-2', 
    		'https://www.pccomponentes.com/placas-base/gigabyte#relevance-3', 
    	),
    	'msi'=>array(
    		'https://www.pccomponentes.com/placas-base/msi', 
    		'https://www.pccomponentes.com/placas-base/msi#relevance-1', 
    		'https://www.pccomponentes.com/placas-base/msi#relevance-2', 
    		'https://www.pccomponentes.com/placas-base/msi#relevance-3', 
    		'https://www.pccomponentes.com/placas-base/msi#relevance-4', 
    	),
    	
    );
	function saveProductsPCC(){
		$contenido=array(
<<<<<<< HEAD
		'asus'=>array(),
	    	'gigabyte'=>array(),
	    	'msi'=>array(),
=======
			'asus'=>array(),
			'gigabyte'=>array(),
			'msi'=>array(),
	    	
>>>>>>> master
	    );
		foreach ($this->urlPlacasBase as $marca => $value) {
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
		$marca = array('asus','gigabyte','msi');

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
					array_push($productos, array('FK_PLB_PK_PROD'=>2,'PLB_img'=>$imagenProducto,'PLB_nombre'=>$nombreProducto,'PLB_precio'=>$precioProducto,'PLB_marca'=>$val,'FK_PLB_PK_TIE'=>1));	
				}
				$j++;
			
			}
			
			// return $productos;
			// $this->cont++;
		}
			// echo "<pre>";
			// print_r($productos);
			// echo "<pre>";
			return $productos;
	}
}
?>