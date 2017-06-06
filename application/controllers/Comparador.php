<?php     
defined('BASEPATH') OR exit('No direct script access allowed');

class Comparador extends CI_Controller {


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
    array_push($data, $componente);
    $cont=0;
    $cont1=0;
    $auxTienda=0;
    // echo "<pre>";
    // print_r($data['todoComponenteCoincide']);
    // die;
    foreach ($data['todoComponenteCoincide'] as $key => $value) {
      $cont1=0;
     foreach ($value as $key1 => $value1) {
      foreach ($value1 as $key2 => $value2) {
        // if ($value2==1) {
        //  continue;
        // }
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
        $aux = strtr($key2,$replace);
        if ($auxTienda==0) {
          $data['todoComponenteCoincide'][$cont]['PCC'][$aux] = $data['todoComponenteCoincide'][$cont][$cont1][$key2];
         
        }elseif ($auxTienda==1) {
          $data['todoComponenteCoincide'][$cont]['PCB'][$aux] = $data['todoComponenteCoincide'][$cont][$cont1][$key2];
        }        
        unset($data['todoComponenteCoincide'][$cont][$cont1][$key2]);
      }
      if ($auxTienda==0) {
       $auxTienda=1;
      }else {
        $auxTienda=0;
      }
        $cont1++;
    }
    $cont++;
  }
  // echo "<pre>";
  // print_r($data['todoComponenteCoincide']); 
  // die; 
  $cont = 0;
  foreach ($data['todoComponenteNoCoincide'] as $key => $value) {
   foreach ($value as $key1 => $value1) {
    if ($value1==1) {
      continue;
    }
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