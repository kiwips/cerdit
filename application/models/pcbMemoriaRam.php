<?php 
class pcbMemoriaRam extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlRam = array(
    	'kingston'=>array(
    		'http://www.pcbox.com/categorias/memorias-ddr-4/m/kingston?nodo=384/',
    		'http://www.pcbox.com/categorias/memorias-ddr-3/m/kingston?nodo=124/',
    		'http://www.pcbox.com/categorias/memorias-ddr-2/m/kingston?nodo=123/',
    	),
    	'hyperx'=>array(
    		'http://www.pcbox.com/categorias/memorias-ddr-4/m/hyperx?nodo=384/',
    		'http://www.pcbox.com/categorias/memorias-ddr-3/m/hyperx?nodo=124/',

    	),
    	'crucial'=>array(
    		'http://www.pcbox.com/categorias/memorias-ddr-4/m/crucial?nodo=384/',
    		'http://www.pcbox.com/categorias/memorias-ddr-3/m/crucial?nodo=124/',
    		'http://www.pcbox.com/categorias/memorias-ddr-2/m/crucial?nodo=123/',
    		'http://www.pcbox.com/categorias/memorias-ddr/m/crucial?nodo=122/',
    	),
    	'lexar'=>array(
    		'http://www.pcbox.com/categorias/memorias-ddr-4/m/lexar?nodo=384/',
    	),
    	'patriot'=>array(
    		'http://www.pcbox.com/categorias/memorias-ddr-4/m/patriot?nodo=384/',
    		'http://www.pcbox.com/categorias/memorias-ddr-3/m/patriot?nodo=124/',
    	),
    	'samsung'=>array(
    		'http://www.pcbox.com/categorias/memorias-ddr-4/m/samsung?nodo=384/',
    		'http://www.pcbox.com/categorias/memorias-ddr-3?nodo=124',
    	),

    	'adata'=>array(
    		'http://www.pcbox.com/categorias/memorias-ddr-3/m/adata?nodo=124/',
	),

    	'corsair'=>array(
    		'http://www.pcbox.com/categorias/memorias-ddr-3/m/corsair?nodo=124/',
    	),

    	'csx'=>array(
    		'http://www.pcbox.com/categorias/memorias-ddr-3/m/csx?nodo=124/',
    		'http://www.pcbox.com/categorias/memorias-ddr-2/m/csx?nodo=123/',
    	),

    	'integral'=>array(
		'http://www.pcbox.com/categorias/memorias-ddr-2/m/integral?nodo=123/',
		'http://www.pcbox.com/categorias/memorias-ddr/m/integral?nodo=122/',
    	)
    );
    function price(){
		return rand(50,250);
	}
	function saveProductsPCB(){
		$contenido=array(
		'kingston'=>array(),
		'hyperx'=>array(),
		'crucial'=>array(),
		'lexar'=>array(),
		'patriot'=>array(),			
	    	'samsung'=>array(),
	    	'adata'=>array(),
	    	'corsair'=>array(),
	    	'csx'=>array(),
	    	'integral'=>array(),
	    );
		foreach ($this->urlRam as $marca => $value) {
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
		$marca = array('kingston', 'hyperx', 'crucial', 'lexar', 'patriot','samsung','adata','corsair','csx','integral');

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
					$precioProducto=$this->precio();
					if ($precioProducto==' alt=' || $nombreProducto=='//fonts.googleapis.com/css?family=Handlee') {
						continue;
					}
					array_push($productos, array('FK_RAM_PK_PROD'=>5,'RAM_nombre'=>$nombreProducto,'RAM_precio'=>$precioProducto,'RAM_marca'=>$val,'FK_RAM_PK_TIE'=>2));	
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