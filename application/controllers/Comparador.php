<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Comparador extends CI_Controller {
        
        function __construct(){
            parent::__construct();
        }

        function index(){      
            $data['titulo'] = 'DreamPc';
            $data['main_content'] = 'index_View'; 
            $this->parser->parse('includes/template',$data);
        }

        function sacarProductosComparables(){
            $data = $this->input->post();
            $componente = $data['componente'];
           $this->load->model($componente);
           print_r($componente);
           die;
        }
        
    }
?>