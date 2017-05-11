<?php     
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){            
        $data['main_content'] = 'index_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function pantallaRegistro(){
        $data['main_content'] = 'registro_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function registroNuevoUsuario(){
        $data = $this->input->post();
        $nickR = UCFirst($this->input->post('nickR'));
        $emailR = $this->input->post('emailR'); 
        $passwordR = $this->input->post('passwdR');            
    }      
     
}
?>