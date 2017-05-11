<?php 
class pcc extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    
	function saveProductsNoConcat(){
		$url1 = 'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-1';
		$url2 = 'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-2';
		$url3 = 'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-3';
		$url4 = 'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-4';
		$url5 = 'https://www.pccomponentes.com/tarjetas-graficas-nvidia#relevance-5';
		$nombre = "data-name";
		$precio = "data-price";
		$imagen = "src";
		// $url=$url.$url1.$url2.$url3-$url4;
		// $contenido = file_get_contents($url);
		$contenido = file_get_contents($url1);
		$contenido .= file_get_contents($url2);
		$contenido .= file_get_contents($url3);
		$contenido .= file_get_contents($url4);
		$contenido .= file_get_contents($url5);
		// $graficasCulomot=saveProductsConcat($contenido,"","precio_entero","precio_decimal");
		$productos = array();
		$j=0;
		$a=0;
		$anterior=0;
		while(true){
			if ($a<$anterior) {
				break;
			}
			$anterior=$a;
			$a = strpos($contenido, $nombre,$a);
			$aux=0;
			$aux2=0;
			$aux3=false;
			$contInicio=0;
			$contFin=0;
			$nombreProducto="";
			end($productos);
			$key=key($productos);
			while (true) {
				$b=$contenido[$a+$aux];
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
		 		@$nombreProducto.= $contenido[$i];
		 	}
			
		/*=================PRICING=====================*/

			$a = strpos($contenido, $precio,$a);
			$aux=0;
			$aux2=0;
			$aux3=false;
			$contInicio=0;
			$contFin=0;
			$precioProducto="";
			while (true) {
				$b=$contenido[$a+$aux];
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
		 		@$precioProducto.= $contenido[$i];
		 	}
			if ($nombreProducto == @$productos[$key]['producto']) {
			 		$j++;
					continue;
			}

			/*=================IMAGES=====================*/

			$a = strpos($contenido, $imagen,$a);
			$aux=0;
			$aux2=0;
			$aux3=false;
			$contInicio=0;
			$contFin=0;
			$imagenProducto="";
			while (true) {
				$b=$contenido[$a+$aux];
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
		 		@$imagenProducto.= $contenido[$i];
		 	}
			if ($nombreProducto == @$productos[$key]['imagen']) {
			 		$j++;
					continue;
			}else{
				array_push($productos, array('imagen'=>$imagenProducto,'producto'=>$nombreProducto,'precio'=>$precioProducto));	
			}
			$j++;
		
		}
		echo "<pre>";
		print_r($productos);
		echo "<pre>";
	}

		// foreach ($productos as $key => $value) {
		// 	array_push($productos, array(''))
		// }
}
	// function saveProductsConcat($contenido,$nombre,$precio1,$precio2){
	// 	$productos = array();
	// 	$j=0;
	// 	$a=0;
	// 	$anterior=0;
	// 	while(true){
	// 		if ($a<$anterior) {
	// 			break;
	// 		}
	// 		$anterior=$a;
	// 		$a = strpos($contenido, $nombre,$a);
	// 		$aux=0;
	// 		$aux2=0;
	// 		$aux3=false;
	// 		$contInicio=0;
	// 		$contFin=0;
	// 		$nombreProducto="";
	// 		end($productos);
	// 		$key=key($productos);
	// 		while (true) {
	// 			$b=$contenido[$a+$aux];
	// 			if ($b=='"'&&!$aux2) {
	// 				$aux2++;
	// 				$aux3=true;
	// 				$contInicio=$aux+1;
	// 			}else if ($b=='"'&&$aux2) {
	// 				$contFin=$aux;
	// 				break;
	// 			}$aux++;
	// 		}
	// 		for ($i=$a+$contInicio; $i <$a+$contFin; $i++) { 
	// 	 		@$nombreProducto.= $contenido[$i];
	// 	 	}
			
	// 	=================PRICING=====================

	// 		$a = strpos($contenido, $precio1,$a);
	// 		$aux=0;
	// 		$aux2=0;
	// 		$aux3=false;
	// 		$contInicio=0;
	// 		$contFin=0;
	// 		$precioProducto="";
	// 		while (true) {
	// 			$b=$contenido[$a+$aux];
	// 			if ($b=='"'&&!$aux2) {
	// 				$aux2++;
	// 				$aux3=true;
	// 				$contInicio=$aux+1;
	// 			}else if ($b=='"'&&$aux2) {
	// 				$contFin=$aux;
	// 				break;
	// 			}$aux++;
	// 		}
	// 		for ($i=$a+$contInicio; $i <$a+$contFin; $i++) { 
	// 	 		@$precioProducto.= $contenido[$i];
	// 	 	}
	// 		if ($nombreProducto == @$productos[$key]['producto']) {
	// 		 		$j++;
	// 				continue;
	// 		}else{
	// 			array_push($productos, array('precio'=>$precioProducto,'producto'=>$nombreProducto));	
	// 		}
	// 		$j++;
	// 	}
	// 	return $productos;
	// }

	// echo "<pre>";
	// print_r($graficasPccomponentes);
	// echo $contenido;
?>