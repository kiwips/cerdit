<?php     
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class Comparador extends CI_Controller {
=======
        function index(){      
          // $this->load->model('compararTorres');
          // $this->compararTorres->getTorres();
          // die;
            $data['todoComponente'] = "";
            $data['precioFiltrado'] = "";
            $data['marcaFiltrado'] = "";
            $data['productos'] = $this->productos->get_PROD_NOM();              
            $data['main_content'] = 'index_View'; 
            $this->parser->parse('includes/template',$data);
        }
>>>>>>> kevin

  function __construct(){
    parent::__construct();
  }

  function index(){
    $this->load->model('productos');
    $data['primera'] = true;
    $data['todoComponente'] = " ";
    $data['precioFiltrado'] = " ";
    $data['marcaFiltrado'] = " ";
    $data['productos'] = $this->productos->get_PROD_NOM();              
    $data['main_content'] = 'index_View'; 
    $this->parser->parse('includes/template',$data);
  }

  function sacarProductosComparables(){            
    $data = $this->input->get();
    $componente = $data['n'];
    $componente = str_replace(" ","_",$componente);
    $this->load->model($componente);
    $data['todoComponenteCoincide'] = $this->$componente->get_all_coincidir();    
    $data['todoComponenteNoCoincide'] = $this->$componente->get_all_no_coincidir();              
    $cont=0;
    foreach ($data['todoComponenteCoincide'] as $key => $value) {
     foreach ($value as $key1 => $value1) {
      $replace = array(
        'MIC_' =>  '',
        'PLB_' => '',
        'RAT_' => '',
        'DD_' => '',
        'FUE_' => '',
        'RAM_' => '',
        'MON_' => '',
        'REF_' => '',
        'SO_' => '',
        'GRF_' => '',
        'TEC_' => '',
        'TOR_' => '',
        );
      $aux = strtr($key1,$replace);
      $data['todoComponenteCoincide'][$cont][$aux] = $data['todoComponenteCoincide'][$cont][$key1];
      unset($data['todoComponenteCoincide'][$cont][$key1]);

    }
    $cont++;
  }
  


  $cont = 0;
  foreach ($data['todoComponenteNoCoincide'] as $key => $value) {
   foreach ($value as $key1 => $value1) {
    $replace = array(
      'MIC_' =>  '',
      'PLB_' => '',
      'RAT_' => '',
      'DD_' => '',
      'FUE_' => '',
      'RAM_' => '',
      'MON_' => '',
      'REF_' => '',
      'SO_' => '',
      'GRF_' => '',
      'TEC_' => '',
      'TOR_' => '',
      );
    $aux = strtr($key1,$replace);
    $data['todoComponenteNoCoincide'][$cont][$aux] = $data['todoComponenteNoCoincide'][$cont][$key1];
    unset($data['todoComponenteNoCoincide'][$cont][$key1]);

  }
  $cont++;
}

$cont=0;
$data['marcaFiltrado'] = $this->$componente->get_all_marca(); 
foreach ($data['marcaFiltrado']  as $key => $value) {
 foreach ($value as $key1 => $value1) {
  $replace = array(
    'MIC_' =>  '',
    'PLB_' => '',
    'RAT_' => '',
    'DD_' => '',
    'FUE_' => '',
    'RAM_' => '',
    'MON_' => '',
    'REF_' => '',
    'SO_' => '',
    'GRF_' => '',
    'TEC_' => '',
    'TOR_' => '',
    );
  $aux = strtr($key1,$replace);
  $data['marcaFiltrado'] [$cont][$aux] = $data['marcaFiltrado'] [$cont][$key1];
  unset($data['marcaFiltrado'] [$cont][$key1]);

}
$cont++;
}
$data['precioFiltrado'] = $this->$componente->get_min_max_precio();
$this->load->model("productos");
$data['productos'] = $this->productos->get_PROD_NOM();
$data['primera'] = false;
$data['main_content'] = 'index_View'; 
$this->parser->parse('includes/template',$data);
}
}
?>