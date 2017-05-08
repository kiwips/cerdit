<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Registro extends CI_Controller {
        public function __construct(){
            parent::__construct();
        }
        public function index(){            
            $data['main_content'] = 'registroView'; 
            $this->parser->parse('includes/template',$data);
            $data['main_content'] = 'volverView';
            $this->parser->parse('includes/template',$data);
        }  
        public function registrarse(){
            echo "string";
        }
    }
?>