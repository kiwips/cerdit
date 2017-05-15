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
        $userdata = array(
           'nick' => $usuarioRegistrado[0]['USR_nick'],
           'email' => $usuarioRegistrado[0]['USR_email'],
           'permiso' => $usuarioRegistrado[0]['USR_permiso'],
           'logueado' => TRUE
           );
        $this->session->set_userdata($userdata);  
    }

    function cerrarSesion(){
<<<<<<< HEAD
        $this->session->sess_destroy();
        redirect('/');
    }
=======
      $userdata = array(
         'logueado' => FALSE
         );
      $this->session->sess_destroy();
      setcookie('recordar', $usuario['nickL']);
      redirect('/');
  }
    

}
?>
>>>>>>> a46004c48157c61fbfaf455c5bb7b0169cbf8ba8
