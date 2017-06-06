<?php 
class pcbRefrigeracion extends CI_Model{
	function __construct(){
		parent::__construct();
	}  
	private $urlRefrigeracion=array(
			'nox'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/nox?nodo=202/',
				'http://www.pcbox.com/categorias/refrigeracion-liquida/m/nox?nodo=203/',
			),
			'arctic'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/arctic?nodo=202/',
			),
			'netway'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/netway?nodo=202/',
				'http://www.pcbox.com/categorias/refrigeracion-liquida/m/netway?nodo=203/',
			),
			'cooler-master'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/cooler-master?nodo=202/',
				'http://www.pcbox.com/categorias/refrigeracion-liquida/m/cooler-master?nodo=203/',
			),
			'mars-gaming'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/mars-gaming?nodo=202/',
			),
			'coolbox'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/coolbox?nodo=202/',
				'http://www.pcbox.com/categorias/refrigeracion-liquida/m/coolbox?nodo=203/',
			),
			'zalman'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/zalman?nodo=202/',
			),
			'noctua'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/noctua?nodo=202/',
			),
			'scythe'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/scythe?nodo=202/',
			),
			'tacens'=>array(
				'http://www.pcbox.com/categorias/refrigeradores-multiprocesadores/m/tacens?nodo=202/',
			),
			'corsair'=>array(
				'http://www.pcbox.com/categorias/refrigeracion-liquida/m/corsair?nodo=203/',
			),
			'nzxt'=>array(
				'http://www.pcbox.com/categorias/refrigeracion-liquida/m/nzxt?nodo=203/',
			),

		);
	function saveProductsPCB(){
		$contenido=array(			
			'nox'=>array(),
			'arctic'=>array(),
			'netway'=>array(),
			'cooler-master'=>array(),
			'mars-gaming'=>array(),
			'coolbox'=>array(),
			'zalman'=>array(),
			'noctua'=>array(),
			'scythe'=>array(),
			'tacens'=>array(),
			'corsair'=>array(),
			'nzxt'=>array(),
			);
		foreach ($this->urlRefrigeracion as $marca => $value) {
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
		$marca = array('nox', 'arctic', 'netway', 'cooler-master', 'mars-gaming', 'coolbox', 'zalman', 'noctua', 'scythe', 'tacens','corsair','nzxt');

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
					@$precioProducto.= $contenido[$val][0][$i];
				}
				if ($nombreProducto == @$productos[$key]['producto']) {
					$j++;
					continue;
				}else{
					if ($precioProducto==' alt=' || $nombreProducto=='//fonts.googleapis.com/css?family=Handlee') {
						continue;
					}
					array_push($productos, array('FK_REF_PK_PROD'=>7,'REF_nombre'=>$nombreProducto,'REF_precio'=>$precioProducto,'REF_marca'=>$val,'FK_REF_PK_TIE'=>2));	
				}
			}
			$j++;
			
		}

		echo "<pre>";
		print_r($productos);
		echo "</pre>";
		return $productos;
	}
}
?>