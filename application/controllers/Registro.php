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

        public function enviar(){
          $config = array(
             'protocol' => 'smtp',
             'smtp_host' => 'smtp.googlemail.com',
             'smtp_user' => 'correo@gmail.com', //Su Correo de Gmail Aqui
             'smtp_pass' => 'password', // Su Password de Gmail aqui
             'smtp_port' => '465',
             'smtp_crypto' => 'ssl',
             'mailtype' => 'html',
             'wordwrap' => TRUE,
             'charset' => 'utf-8'
             );
             $this->load->library('email', $config);
             $this->email->set_newline("\r\n");
             $this->email->from('correo@example.com');
             $this->email->subject('Asunto del correo');
             $this->email->message('Hola desde correo');
             $this->email->to('destinatario@example.com');
             if($this->email->send(FALSE)){
                 echo "enviado<br/>";
                 echo $this->email->print_debugger(array('headers'));
             }else {
                 echo "fallo <br/>";
                 echo "error: ".$this->email->print_debugger(array('headers'));
             }
        }
        
    }
?>