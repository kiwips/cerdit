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
            $this->load->model("User");
            if ($this->User->setNewUser($data)) {
                $done=array(
                    'done'=>'Usuario creado con exito');
                $this->parser->parse('doneView',$done);
                $this->index();
            }else{
                $error=array(
                    'error'=>'El email o usuario especificado ya existe');
                $this->parser->parse('errorView',$error);
                $this->pantallaRegistro();
            }
        }
            
}
?>