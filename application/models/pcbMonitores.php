<?php 
class pcbMonitores extends CI_Model{
	function __construct(){
		parent::__construct();
	}  
	private $urlMonitores=array(
		'lg'=>array(
			'http://www.pcbox.com/categorias/monitores/m/lg?nodo=121/',
			'http://www.pcbox.com/categorias/monitores/p/2/m/lg?nodo=121/',
		),
		'asus'=>array(
			'http://www.pcbox.com/categorias/monitores/m/asus?nodo=121/',
		),
		'samsung'=>array(
			'http://www.pcbox.com/categorias/monitores/m/samsung?nodo=121/',
		),
		'acer'=>array(
			'http://www.pcbox.com/categorias/monitores/m/acer?nodo=121/',
		),
		'aoc'=>array(
			'http://www.pcbox.com/categorias/monitores/m/aoc?nodo=121/',
		),
		
		'benq'=>array(
			'http://www.pcbox.com/categorias/monitores/m/benq?nodo=121/',
		),
		// 'hannsg'=>array(
		// 	'http://www.pcbox.com/categorias/monitores/m/hannsg?nodo=121/',
		// ),
		// 'hewlett-packard'=>array(
		// 	'http://www.pcbox.com/categorias/monitores/m/hewlett-packard?nodo=121/',
		// ),
		'lenovo'=>array(
			'http://www.pcbox.com/categorias/monitores/m/lenovo?nodo=121/',
		),
		'philips'=>array(
			'http://www.pcbox.com/categorias/monitores/m/philips?nodo=121/',
		),    	       	
		);
		function price(){
			return rand(99,459);
		}
	function saveProductsPCB(){
		$contenido=array(			
			'asus'=>array(),
			'samsung'=>array(),
			'acer'=>array(),
			'aoc'=>array(),
			'lg'=>array(),
			'benq'=>array(),
			// 'hannsg'=>array(),
			// 'hewlett-packard'=>array(),
			'lenovo'=>array(),
			'philips'=>array(),    	
			);
		foreach ($this->urlMonitores as $marca => $value) {
			foreach ($value as $key1 => $url) {
				array_push($contenido[$marca], file_get_contents($url));
			}
		}
		$nombre = 'itemprop="name" title';
		$precio = 'itemprop="price" content';

		$productos = array();
		$j=0;
		$a=0;
		$anterior=0;
		$marca = array('asus','samsung','lg','acer','aoc','benq','lenovo','philips');

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
					$precioProducto=$this->price();
					if ($precioProducto==' alt=' || $nombreProducto=='//fonts.googleapis.com/css?family=Handlee') {
						continue;
					}
				array_push($productos, array('FK_MON_PK_PROD'=>5,'MON_nombre'=>$nombreProducto,'MON_precio'=>$precioProducto,'MON_marca'=>$val,'FK_MON_PK_TIE'=>2));

				}
			}
			$j++;
			echo "string";
		}
		echo "<pre>";
		print_r($productos);
		echo "</pre>";
		return $productos;
	}
}
// array_push($productos, array('FK_MON_PK_PROD'=>5,'MON_nombre'=>$nombreProducto,'MON_precio'=>$precioProducto,'MON_marca'=>$val,'FK_MON_PK_TIE'=>2));
?>