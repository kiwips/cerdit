<?php 
class pccGraficas extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    private $cont=0;
    private $urlGraficas=array(
    	'nvidia'=>array(
	    	'https://www.pccomponentes.com/tarjetas-graficas-nvidia',
	    	'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-1',
	    	'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-2',
	    	'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-3',
	    	'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-4',
	    	'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-5',
    	),
    	'amd'=>array(
	    	'https://www.pccomponentes.com/tarjetas-graficas-amd',
	    	'https://www.pccomponentes.com/tarjetas-graficas-amd#relevance-1',
	    	'https://www.pccomponentes.com/tarjetas-graficas-amd#relevance-2',
    	),'asus'=>array(
	    	'https://www.pccomponentes.com/tarjetas-graficas/asus',
	    	'https://www.pccomponentes.com/tarjetas-graficas/asus#relevance-1',
	    	'https://www.pccomponentes.com/tarjetas-graficas/asus#relevance-2',
	    	'https://www.pccomponentes.com/tarjetas-graficas/asus#relevance-3',
    	),
    	'gigabyte'=>array(
	    	'https://www.pccomponentes.com/tarjetas-graficas/gigabyte',
	    	'https://www.pccomponentes.com/tarjetas-graficas/gigabyte#relevance-1',
	    	'https://www.pccomponentes.com/tarjetas-graficas/gigabyte#relevance-2',
	    	'https://www.pccomponentes.com/tarjetas-graficas/gigabyte#relevance-3',
    	),
    	'evga'=>array(
	    	'https://www.pccomponentes.com/tarjetas-graficas/evga',
	    	'https://www.pccomponentes.com/tarjetas-graficas/evga#relevance-1',
	    	'https://www.pccomponentes.com/tarjetas-graficas/evga#relevance-2',
    	),
    	'msi'=>array(
	    	'https://www.pccomponentes.com/tarjetas-graficas/msi',
	    	'https://www.pccomponentes.com/tarjetas-graficas/msi#relevance-1',
	    	'https://www.pccomponentes.com/tarjetas-graficas/msi#relevance-2',
    	),
    	'pny'=>array(
	    	'https://www.pccomponentes.com/tarjetas-graficas/pny',
	    	
    	),
    	'sapphire'=>array(
	    	'https://www.pccomponentes.com/tarjetas-graficas/sapphire',
	    	'https://www.pccomponentes.com/tarjetas-graficas/sapphire#relevance-1',
	    	
    	),
    	'xfx'=>array(
	    	'https://www.pccomponentes.com/tarjetas-graficas/xfx',
    	),
    );
	function saveProductsPCC(){
		$contenido=array(
			'nvidia'=>array(
	  
	    	),
	    	'amd'=>array(
		    	
	    	),
	    	'asus'=>array(
		    	
		    ),
	    	'gigabyte'=>array(
		    	
	    	),
	    	'evga'=>array(

	    	),
	    	'msi'=>array(
		    	
	    	),
	    	'pny'=>array(
		    	
	    	),
	    	'sapphire'=>array(
		    	
	    	),
	    	'xfx'=>array(
		    	
	    	),
	    );
		foreach ($this->urlGraficas as $marca => $value) {
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
		$marca = array('amd','nvidia','asus','gigabyte','evga','msi','pny','sapphire','xfx');

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
					array_push($productos, array('FK_GRF_PK_PROD'=>6,'GRF_img'=>$imagenProducto,'GRF_nombre'=>$nombreProducto,'GRF_precio'=>$precioProducto,'GRF_marca'=>$val));	
				}
				$j++;
			
			}
			// echo "<pre>";
			// print_r($productos);
			return $productos;
		}
	}
}
?>