
<?php
class pcbSistemasOperativos extends CI_Model{
	function __construct(){
		parent::__construct();
	}  
	private $urlSistemasOperativos=array(
		'windows'=>array(
			'http://www.pcbox.com/categorias/sistemas-operativos?nodo=404/',
		),

	);
	function price(){
		return rand(50,140);
	}
   
	function saveProductsPCB(){
		$contenido=array(
			'windows'=>array(),

			);
		foreach ($this->urlSistemasOperativos as $marca => $value) {
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
					$precioProducto=$this->price();
					if ($precioProducto==' alt=' || $nombreProducto=='//fonts.googleapis.com/css?family=Handlee') {
						continue;
					}
					array_push($productos, array('FK_SO_PK_PROD'=>12,'SO_nombre'=>$nombreProducto,'SO_precio'=>$precioProducto,'SO_marca'=>$val,'FK_SO_PK_TIE'=>2));
				}
			}
			$j++;

		}
		// echo "<pre>";
		// print_r($productos);
		// echo "<pre>";
		return $productos;
				
	}
	
}
?>