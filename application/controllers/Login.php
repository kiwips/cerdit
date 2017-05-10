<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {

        function __construct(){
            parent::__construct();
        }

        function index(){            
                $data['main_content'] = 'index_View'; 
                $this->parser->parse('includes/template',$data);
        }

        public function loguearse(){
            $data = $this->input->post();
            $this->load->model("User");
            $correctPass = $this->User->get_USR_pass_where($data);
            if ($correctPass) {
                $usuarioRegistrado = $this->User->get_USR_all_where($data['nickL']);
                $this->crearSesion($usuarioRegistrado);
                redirect('/');
                }
            }

            function crearSesion($usuarioRegistrado){
                array_push($this->session, $usuarioRegistrado);
            }

            function cerrarSesion(){
                $this->session->sess_destroy();
                redirect('/');
            }
    }
?>