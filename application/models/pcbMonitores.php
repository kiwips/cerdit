<?php 
class pcbMonitores extends CI_Model{
	function __construct(){
		parent::__construct();
	}  
	private $urlMonitores=array(
		'acer'=>array(
			'https://www.pccomponentes.com/monitor-acer',
			'https://www.pccomponentes.com/monitor-acer#relevance-1',
			),

		'aoc'=>array(
			'https://www.pccomponentes.com/monitor-aoc',
			'https://www.pccomponentes.com/monitor-aoc#relevance-1',
			),

		'asus'=>array(
			'https://www.pccomponentes.com/monitor-asus',
			'https://www.pccomponentes.com/monitor-asus#relevance-1',
			'https://www.pccomponentes.com/monitor-asus#relevance-2',   	
			),

		'benq'=>array(
			'https://www.pccomponentes.com/monitor-benq',
			'https://www.pccomponentes.com/monitor-benq#relevance-1',
			'https://www.pccomponentes.com/monitor-benq#relevance-2',	    	
			),    

		'dell'=>array(
			'https://www.pccomponentes.com/monitor-dell',	    	
			),	

		'hannspree'=>array(
			'https://www.pccomponentes.com/monitores-pc/hannspree',	    	
			),

		'hp'=>array(
			'https://www.pccomponentes.com/monitores-pc/hp',	    	
			),

		'lenovo'=>array(
			'https://www.pccomponentes.com/monitores-pc/lenovo',	    	
			),

		'lg'=>array(
			'https://www.pccomponentes.com/monitores-pc/lenovo',
			'https://www.pccomponentes.com/monitor-lg#relevance-1',	    	
			), 

		'philips'=>array(
			'https://www.pccomponentes.com/monitor-philips',
			'https://www.pccomponentes.com/monitor-philips#relevance-1',	    	
			),

		'samsung'=>array(
			'https://www.pccomponentes.com/monitores-pc/samsung',	    	
			),

		'viewsonic'=>array(
			'https://www.pccomponentes.com/monitores-pc/viewsonic',	    	
			)     	       	
		);
	function saveProductsPCB(){
		$contenido=array(			
			'acer'=>array(),
			'aoc'=>array(),
			'asus'=>array(),
			'benq'=>array(),
			'dell'=>array(),
			'hannspree'=>array(),
			'hp'=>array(),
			'lenovo'=>array(),
			'lg'=>array(),
			'philips'=>array(),
			'samsung'=>array(),
			'viewsonic'=>array(),	    	
			);
		foreach ($this->urlMonitores as $marca => $value) {
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
		$marca = array('acer', 'aoc', 'asus', 'benq', 'dell', 'hannspree', 'hp', 'lenovo', 'lg', 'philips', 'samsung', 'viewsonic');

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
					array_push($productos, array('FK_MON_PK_PROD'=>5,'MON_nombre'=>$nombreProducto,'MON_precio'=>$precioProducto,'MON_marca'=>$val,'FK_MON_PK_TIE'=>2));	
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