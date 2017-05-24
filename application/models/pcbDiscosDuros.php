<?php 
class pcbDiscosDuros extends CI_Model{
	function __construct(){
		parent::__construct();
	}  
	private $urlDiscosDuros=array(
	
		'seagate'=>array(
			'http://www.pcbox.com/categorias/discos-duros-sata3/m/seagate?nodo=107/',	    	
			),
		'toshiba'=>array(
			'http://www.pcbox.com/categorias/discos-duros-sata3/m/toshiba?nodo=107/',
			),	    	
		'western-digital'=>array(
			'http://www.pcbox.com/categorias/discos-duros-sata3/m/western-digital?nodo=107/',
			'http://www.pcbox.com/categorias/discos-duros-sata3/p/2/m/western-digital?nodo=107/',
			'http://www.pcbox.com/categorias/discos-ssd-sata/m/western-digital?nodo=388/',
			),
		'hewlett-packard'=>array(
			'http://www.pcbox.com/categorias/discos-duros-sata3/m/hewlett-packard?nodo=107/',

			),
		'intenso'=>array(
			'http://www.pcbox.com/categorias/discos-duros-sata3/m/intenso?nodo=107/',
			'http://www.pcbox.com/categorias/discos-ssd-sata/m/intenso?nodo=388/',

			),
		'kingston'=>array(
			'http://www.pcbox.com/categorias/discos-ssd-sata/m/kingston?nodo=388/',
			'http://www.pcbox.com/categorias/discos-ssd-sata/p/2/m/kingston?nodo=388/',
			),
		'samsung'=>array(
			'http://www.pcbox.com/categorias/discos-ssd-sata/m/samsung?nodo=388/',
			),
		'sandisk'=>array(
			'http://www.pcbox.com/categorias/discos-ssd-sata/m/sandisk?nodo=388/',
			),
		'crucial'=>array(
			'http://www.pcbox.com/categorias/discos-ssd-sata/m/crucial?nodo=388/',
			),
		'intel'=>array(
			'http://www.pcbox.com/categorias/discos-ssd-sata/m/intel?nodo=388/',
			),
		'ocz'=>array(
			'http://www.pcbox.com/categorias/discos-ssd-sata/m/ocz?nodo=388/',
			),
		'patriot'=>array(
			'http://www.pcbox.com/categorias/discos-ssd-sata/m/patriot?nodo=388/',
			),
		);
	function price(){
		return rand(40,200);
	}
	function saveProductsPCB(){
		$contenido=array(
			'seagate'=>array(),
			'toshiba'=>array(),
			'western-digital'=>array(),
			'hewlett-packard'=>array(),
			'intenso'=>array(),
			'kingston'=>array(),
			'samsung'=>array(),
			'sandisk'=>array(),
			'crucial'=>array(),
			'intel'=>array(),
			'ocz'=>array(),
			'patriot'=>array(),

			);
		foreach ($this->urlDiscosDuros as $marca => $value) {
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
		$marca = array('seagate','toshiba','western-digital','hewlett-packard','intenso','kingston','samsung','sandisk','crucial','intel','ocz','patriot');

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
				array_push($productos, array('FK_DD_PK_PROD'=>3,'DD_nombre'=>$nombreProducto,'DD_precio'=>$precioProducto,'DD_marca'=>$val,'FK_DD_PK_TIE'=>2));	

				}
			}
			$j++;
			
		}

			// return $productos;
			// $this->cont++;

	// echo "<pre>";
	// print_r($productos);
	// echo "<pre>";
	return $productos;
}
}
?>