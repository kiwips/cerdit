<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Comparador extends CI_Controller {
        function __construct(){
            parent::__construct();
        }
        function index(){      
            $data['main_content'] = 'index'; 
            $this->parser->parse('includes/template',$data);
        }  
    }
?>