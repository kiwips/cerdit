<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Comparador extends CI_Controller {
        
        function __construct(){
            parent::__construct();
            $this->load->model("productos");
        }

        function index(){      
            $data['todoComponente'] = "";
            $data['precioFiltrado'] = "";
            $data['marcaFiltrado'] = "";
            $data['productos'] = $this->productos->get_PROD_NOM();              
            $data['main_content'] = 'index_View'; 
            $this->parser->parse('includes/template',$data);
        }

        function sacarProductosComparables(){
<<<<<<< HEAD
            $data = $this->input->get();
            $componente = $data['n'];
            $componente = str_replace(" ","_",$componente);
           $this->load->model($componente);
           $data['todoComponente'] = $this->$componente->get_all();           
           $cont=0;
           foreach ($data['todoComponente'] as $key => $value) {
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
                   $data['todoComponente'][$cont][$aux] = $data['todoComponente'][$cont][$key1];
                   unset($data['todoComponente'][$cont][$key1]);
                   
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
            $data['productos'] = $this->productos->get_PROD_NOM();
            $data['main_content'] = 'index_View'; 
            $this->parser->parse('includes/template',$data);

=======
            $data = $this->input->post();
            $componente = $data['componente'];
           $this->load->model($componente);
>>>>>>> 928e163406a279236b221c2635c457228bb71723
        }
        
    }
?>