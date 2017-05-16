<?php 
class pccDiscosDuros extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlDiscosDuros=array(
    	'asus'=>array(
	    	'https://www.pccomponentes.com/discos-duros/asus',	    	
    	),
    	'avexir'=>array(
	    	'https://www.pccomponentes.com/discos-duros/avexir',	    	
    	),
    	'corsair'=>array(
	    	'https://www.pccomponentes.com/discos-duros/corsair',
		),	    	
    	'crucial'=>array(
	    	'https://www.pccomponentes.com/discos-duros/crucial',
    	),
    	'g-skill'=>array(
	    	'https://www.pccomponentes.com/discos-duros/g-skill',
	    	
    	),
    	'intel'=>array(
	    	'https://www.pccomponentes.com/discos-duros/intel',
	    	
    	),
    	'kingston'=>array(
	    	'https://www.pccomponentes.com/discos-duros/kingston',
	    	'https://www.pccomponentes.com/discos-duros/kingston#relevance-1',
	    	
    	),
    	'samsung'=>array(
	    	'https://www.pccomponentes.com/discos-duros/samsung',
	    	'https://www.pccomponentes.com/discos-duros/samsung#relevance-1',
    	),
    	'sandisk'=>array(
	    	'https://www.pccomponentes.com/discos-duros/sandisk',
    	),
    	'seagate'=>array(
    		'https://www.pccomponentes.com/discos-duros/seagate',
	    	'https://www.pccomponentes.com/discos-duros/seagate#relevance-1',
    	),
    	'toshiba'=>array(
	    	'https://www.pccomponentes.com/discos-duros/toshiba',
	    	'https://www.pccomponentes.com/discos-duros/toshiba#relevance-1'
    	),
    	'transcend'=>array(
    		'https://www.pccomponentes.com/discos-duros/toshiba',
	    	'https://www.pccomponentes.com/discos-duros/toshiba#relevance-1',
    	),
    	'western-digital'=>array(
	    	'https://www.pccomponentes.com/discos-duros/western-digital',
	    	'https://www.pccomponentes.com/discos-duros/western-digital#relevance-1',
	    	'https://www.pccomponentes.com/discos-duros/western-digital#relevance-2',
	    	'https://www.pccomponentes.com/discos-duros/western-digital#relevance-3',
	    	'https://www.pccomponentes.com/discos-duros/western-digital#relevance-4',
    	),
    );
	function saveProductsPCC(){
		$contenido=array(
			'asus'=>array(),
	    	'avexir'=>array(),
	    	'corsair'=>array(),
	    	'crucial'=>array(),
	    	'g-skill'=>array(),
	    	'intel'=>array(),
	    	'kingston'=>array(),
	    	'samsung'=>array(),
	    	'seagate'=>array(),
	    	'sandisk'=>array(),
	    	'toshiba'=>array(),
	    	'transcend'=>array(),
	    	'western-digital'=>array(),
	    );
		foreach ($this->urlGraficas as $marca => $value) {
			foreach ($value as $key1 => $url) {
				if ($marca=='asus') {
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='avexir') {
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='corsair'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='crucial'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='g-skill'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='intel'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='kingston'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='samsung'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='seagate'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='sandisk'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='toshiba'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='transcend'){
					array_push($contenido[$marca], file_get_contents($url));
				}else if ($marca=='western-digital'){
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
		$marca = array('asus','avexir','corsair','crucial','g-skill','intel','kingston','samsung','seagate','sandisk','toshiba','transcend','western-digital');

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
					array_push($productos, array('FK_GRF_PK_PROD'=>6,'GRF_img'=>$imagenProducto,'GRF_nombre'=>$nombreProducto,'GRF_precio'=>$precioProducto,'GRF_marca'=>$val));	
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