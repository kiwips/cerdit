<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {

        #Definir siempre el constructor
        function __construct(){
            parent::__construct();
        }

        #Primera función de todas
        function index(){            
                $data['main_content'] = 'primera'; 
                $this->parser->parse('includes/template',$data);
        }  
    }
    ?>