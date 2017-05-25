<?php 
class pcbTorres extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    private $urlTorres=array(
<<<<<<< HEAD
     	'nox'=>array(
     		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/nox?nodo=80/',
     		'http://www.pcbox.com/categorias/cajas-atx/m/nox?nodo=79/',
     		'http://www.pcbox.com/categorias/cajas-micro-atx/m/nox?nodo=81/',
     	),
	   	'hiditec'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/hiditec?nodo=80/',
	   	),
	   	'aerocool'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/aerocool?nodo=80/',
	   		'http://www.pcbox.com/categorias/cajas-atx/m/aerocool?nodo=79/',
	   	),
	   	'coolbox'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/coolbox?nodo=80/',
	   		'http://www.pcbox.com/categorias/cajas-atx/m/coolbox?nodo=79/',
	   	),
	   	'bitfenix'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/bitfenix?nodo=80/',
	   	),
	   	'cooler-master'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/cooler-master?nodo=80/',
	   		'http://www.pcbox.com/categorias/cajas-atx/m/cooler-master?nodo=79/',
	   		'http://www.pcbox.com/categorias/cajas-micro-atx/m/cooler-master?nodo=81/',
	   	),
	   	'corsair'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/corsair?nodo=80/',
	   		'http://www.pcbox.com/categorias/cajas-micro-atx/m/corsair?nodo=81/',
	   	),
	   	'innobo'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/innobo?nodo=80/',
	   		'http://www.pcbox.com/categorias/cajas-atx/m/innobo?nodo=79/',
	   	),
	   	'mars-gaming'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/mars-gaming?nodo=80/',
	   	),
	   	'nzxt'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/nzxt?nodo=80/',
	   		'http://www.pcbox.com/categorias/cajas-atx/m/nzxt?nodo=79/',
	   	),
	   	'tacens'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/tacens?nodo=80/',
	   		'http://www.pcbox.com/categorias/cajas-micro-atx/m/tacens?nodo=81/',
	   	),
	   	'zalman'=>array(
	   		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/zalman?nodo=80/',
	   	),
=======
<<<<<<< HEAD
    	'aerocool'=>array(
	    	'http://www.pcbox.com/categorias/cajas-atx/m/aerocool?nodo=79/',
    	),

  //   	'antec'=>array(
  //   		'https://www.pccomponentes.com/torres-atx/antec',
  //   	),

  //   	'b-move'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/b-move',
  //   	),

  //   	'bitfenix'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/bitfenix',
  //   	),    

  //   	'bultaco'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/bultaco',
  //   	),	

  //   	'cooler-master'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/cooler-master',
	 //    	'https://www.pccomponentes.com/torres-atx/cooler-master#relevance-1',
  //   	),

  //   	'corsair'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/corsair',
	 //    	'https://www.pccomponentes.com/torres-atx/corsair#relevance-1',
  //   	),

  //   	'enermax'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/enermax',
  //   	),

  //   	'fractal'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/fractal',
	 //    	'https://www.pccomponentes.com/torres-atx/fractal#relevance-1',
  //   	), 

  //   	'l-link'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/l-link',
  //   	),    	

  //   	'lian-li'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/lian-li',
  //   	),

  //   	'nfortec'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/nfortec',
  //   	), 

  //   	'nox'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/nox',
	 //    	'https://www.pccomponentes.com/torres-atx/nox#relevance-1',
  //   	),

  //   	'nzxt'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/nzxt',
	 //    	'https://www.pccomponentes.com/torres-atx/nzxt#relevance-1',
  //   	),    

  //   	'owlotech'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/owlotech',
  //   	),	

  //   	'phanteks'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/phanteks',
	 //    	'https://www.pccomponentes.com/torres-atx/phanteks#relevance-1',
	 //    	'https://www.pccomponentes.com/torres-atx/phanteks#relevance-2',
  //   	),

		// 'silverstone'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/silverstone',
  //   	),

  //   	'tacens'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/tacens',
  //   	),

  //   	'thermaltake'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/thermaltake',
	 //    	'https://www.pccomponentes.com/torres-atx/thermaltake#relevance-1',
  //   	),

  //   	'tooq'=>array(
	 //    	'https://www.pccomponentes.com/torres-atx/tooq',
  //   	),   	      	
=======
	      	'nox'=>array(
	      		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/nox?nodo=80/',
	      		'http://www.pcbox.com/categorias/cajas-atx/m/nox?nodo=79/',
	      		'http://www.pcbox.com/categorias/cajas-micro-atx/m/nox?nodo=81/',
	      	),
	    	'hiditec'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/hiditec?nodo=80/',
	    	),
	    	'aerocool'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/aerocool?nodo=80/',
	    		'http://www.pcbox.com/categorias/cajas-atx/m/aerocool?nodo=79/',
	    	),
	    	'coolbox'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/coolbox?nodo=80/',
	    		'http://www.pcbox.com/categorias/cajas-atx/m/coolbox?nodo=79/',
	    	),
	    	'bitfenix'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/bitfenix?nodo=80/',
	    	),
	    	'cooler-master'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/cooler-master?nodo=80/',
	    		'http://www.pcbox.com/categorias/cajas-atx/m/cooler-master?nodo=79/',
	    		'http://www.pcbox.com/categorias/cajas-micro-atx/m/cooler-master?nodo=81/',
	    	),
	    	'corsair'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/corsair?nodo=80/',
	    		'http://www.pcbox.com/categorias/cajas-micro-atx/m/corsair?nodo=81/',
	    	),
	    	'innobo'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/innobo?nodo=80/',
	    		'http://www.pcbox.com/categorias/cajas-atx/m/innobo?nodo=79/',
	    	),
	    	'mars-gaming'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/mars-gaming?nodo=80/',
	    	),
	    	'nzxt'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/nzxt?nodo=80/',
	    		'http://www.pcbox.com/categorias/cajas-atx/m/nzxt?nodo=79/',
	    	),
	    	'tacens'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/tacens?nodo=80/',
	    		'http://www.pcbox.com/categorias/cajas-micro-atx/m/tacens?nodo=81/',
	    	),
	    	'zalman'=>array(
	    		'http://www.pcbox.com/categorias/cajas-gaming-y-modding/m/zalman?nodo=80/',
	    	),
>>>>>>> jaime
>>>>>>> master
    );
    function price(){
    	return rand(20,100);
    }
	function saveProductsPCB(){
		$contenido=array(			
<<<<<<< HEAD
	   	'nox'=>array(),
	   	'hiditec'=>array(),
	   	'aerocool'=>array(),
	   	'coolbox'=>array(),
	   	'bitfenix'=>array(),
	   	'cooler-master'=>array(),
	   	'corsair'=>array(),
	   	'innobo'=>array(),
	   	'mars-gaming'=>array(),
	   	'nzxt'=>array(),
	   	'tacens'=>array(),
	   	'zalman'=>array(),
	   );
=======
	    	'nox'=>array(),
	    	'hiditec'=>array(),
	    	'aerocool'=>array(),
<<<<<<< HEAD
	    	// 'antec'=>array(),
	    	// 'b-move'=>array(),
	    	// 'bitfenix'=>array(),
	    	// 'bultaco'=>array(),
	    	// 'cooler-master'=>array(),
	    	// 'corsair'=>array(),
	    	// 'enermax'=>array(),
	    	// 'fractal'=>array(),
	    	// 'l-link'=>array(),
	    	// 'lian-li'=>array(),
	    	// 'nfortec'=>array(),
	    	// 'nox'=>array(),
	    	// 'nzxt'=>array(),
	    	// 'owlotech'=>array(),
	    	// 'phanteks'=>array(),
	    	// 'silverstone'=>array(),
	    	// 'tacens'=>array(),
	    	// 'thermaltake'=>array(),
	    	// 'tooq'=>array(),
=======
	    	'coolbox'=>array(),
	    	'bitfenix'=>array(),
	    	'cooler-master'=>array(),
	    	'corsair'=>array(),
	    	'innobo'=>array(),
	    	'mars-gaming'=>array(),
	    	'nzxt'=>array(),
	    	'tacens'=>array(),
	    	'zalman'=>array(),
>>>>>>> jaime
	    );
>>>>>>> master
		foreach ($this->urlTorres as $marca => $value) {
			foreach ($value as $key1 => $url) {
				array_push($contenido[$marca], file_get_contents($url));
			}
		}
		$nombre = 'itemprop="name" title';
<<<<<<< HEAD
		$precio = 'content';
=======
<<<<<<< HEAD
		$precio = "content";
=======
		$precio = 'content';
>>>>>>> jaime
>>>>>>> master
		
		$productos = array();
		$j=0;
		$a=0;
		$anterior=0;
<<<<<<< HEAD
		$marca = array('nox', 'hiditec', 'aerocool', 'coolbox', 'bitfenix', 'cooler-master', 'corsair', 'innobo', 'mars-gaming', 'nzxt', 'tacens', 'zalman');
=======
<<<<<<< HEAD
		$marca = array('aerocool');
=======
		$marca = array('nox', 'hiditec', 'aerocool', 'coolbox', 'bitfenix', 'cooler-master', 'corsair', 'innobo', 'mars-gaming', 'nzxt', 'tacens', 'zalman');
>>>>>>> jaime
>>>>>>> master
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
					array_push($productos, array('FK_TOR_PK_PROD'=>7,'TOR_nombre'=>$nombreProducto,'TOR_precio'=>$precioProducto,'TOR_marca'=>$val,'FK_TOR_PK_TIE'=>2));	
				}
			}
				$j++;
			
			}
<<<<<<< HEAD
=======
<<<<<<< HEAD
		}
=======
>>>>>>> jaime
>>>>>>> master
			echo "<pre>";
			print_r($productos);
			echo "</pre>";
			return $productos;
	}
}
?>