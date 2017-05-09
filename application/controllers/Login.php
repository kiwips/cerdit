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
                $this->session = $this->crearSesion($data['nickL']);
                redirect('/');
                }
            }

            function crearSesion($nick){
                return $this->session->set_userdata('user',$nick); #En la sesion pondremos el NICK
            }

            function cerrarSesion(){
                $this->session->sess_destroy();
                redirect('/');
            }

    }
?>