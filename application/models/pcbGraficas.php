<?php 
class pcbGraficas extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    private $cont=0;
    private $urlGraficas=array(
    	'nvidia'=>array(
	    	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express?nodo=112',
	    	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express/p/2?nodo=112',
	    	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express/p/3?nodo=112',
	    	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express/p/4?nodo=112',
	    	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express/p/5?nodo=112',
	    	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express/p/6?nodo=112',
	    	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express/p/7?nodo=112',
    	),
    	// 'amd'=>array(

	    // 	'http://www.pcbox.com/categorias/tarjetas-graficas-amd-pci-express?nodo=113',
	    // 	'http://www.pcbox.com/categorias/tarjetas-graficas-amd-pci-express/p/2?nodo=113',
	    // 	'http://www.pcbox.com/categorias/tarjetas-graficas-amd-pci-express/p/3?nodo=113',
    	// ),'asus'=>array(
	    // 	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express?nodo=112/m/asus',
	    // 	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express/p/2/m/asus',
	    // 	'http://www.pcbox.com/categorias/tarjetas-graficas-nvidia-pci-express/p/3/m/asus',
    	// ),
    	// 'gigabyte'=>array(
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/gigabyte',
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/gigabyte#relevance-1',
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/gigabyte#relevance-2',
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/gigabyte#relevance-3',
    	// ),
    	// 'evga'=>array(
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/evga',
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/evga#relevance-1',
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/evga#relevance-2',
    	// ),
    	// 'msi'=>array(
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/msi',
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/msi#relevance-1',
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/msi#relevance-2',
    	// ),
    	// 'pny'=>array(
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/pny',
	    	
    	// ),
    	// 'sapphire'=>array(
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/sapphire',
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/sapphire#relevance-1',
	    	
    	// ),
    	// 'xfx'=>array(
	    // 	'https://www.pccomponentes.com/tarjetas-graficas/xfx',
    	// ),
    );
	function saveProductsPCB(){
		$contenido=array(
			'nvidia'=>array(
	  
	    	),
	    	// 'amd'=>array(
		    	
	    	// ),
	    	// 'asus'=>array(
		    	
		    // ),
	    	// 'gigabyte'=>array(
		    	
	    	// ),
	    	// 'evga'=>array(

	    	// ),
	    	// 'msi'=>array(
		    	
	    	// ),
	    	// 'pny'=>array(
		    	
	    	// ),
	    	// 'sapphire'=>array(
		    	
	    	// ),
	    	// 'xfx'=>array(
		    	
	    	// ),
	    );
		foreach ($this->urlGraficas as $marca => $value) {
			foreach ($value as $key1 => $url) {
				array_push($contenido[$marca], file_get_contents($url));
			}
		}
		$nombre = 'itemprop="name" title';
		$precio = 'content';
		
		$productos = array();
		$j=0;
		$a=0;
		$anterior=0;
		$marca = array('nvidia');

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
					
					if ($b=="'"&&!$aux2) {
						$aux2++;
						$aux3=true;
						$contInicio=$aux+1;
					}else if ($b=="'"&&$aux2) {
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
					array_push($productos, array('FK_GRF_PK_PROD'=>6,'GRF_nombre'=>$nombreProducto,'GRF_precio'=>$precioProducto,'GRF_marca'=>$val,'FK_GRF_PK_TIE'=>2));	
				}
				$j++;
			
			}
			
		}
			echo "<pre>";
			print_r($productos);
			// return $productos;
	}
}
?>