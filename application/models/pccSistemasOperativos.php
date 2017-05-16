<?php 
class pccSistemasOperativos extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlSistemasOperativos=array(
    	'windows'=>array(
    		'https://www.pccomponentes.com/sistemas-operativos', 
    	),
    	
    );
	function saveProductsPCC(){
		$contenido=array(
			'windows'=>array(),
	    	
	    );
		foreach ($this->urlSistemasOperativos as $marca => $value) {
			foreach ($value as $key1 => $url) {
				if ($marca=='windows') {
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
		$marca = array('windows');

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
					array_push($productos, array('FK_PLB_PK_PROD'=>12,'PLB_img'=>$imagenProducto,'PLB_nombre'=>$nombreProducto,'PLB_precio'=>$precioProducto,'PLB_marca'=>$val));	
				}
				$j++;
			
			}
			
			// return $productos;
			// $this->cont++;
		}
			echo "<pre>";
			print_r($productos);
			echo "<pre>";
			return $productos;
	}
}
?>