<?php     
defined('BASEPATH') OR exit('No direct script access allowed');
<<<<<<< HEAD

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){            
        $data['main_content'] = 'index_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function loguearse(){
        $data = $this->input->post();
        $this->load->model("User");
        $correctPass = $this->User->get_USR_pass_where($data);
        if ($correctPass) {
            $usuarioRegistrado = $this->User->get_USR_all_where($data['nickL']);
            $this->crearSesion($usuarioRegistrado);
            if($data['recordarL']){
                setcookie('recordar', $usuario['nickL']);
            }
            redirect('/');
        }else{
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
      $userdata = array(
         'logueado' => FALSE
         );
      $this->session->sess_destroy();
      setcookie('recordar', $usuario['nickL']);
      redirect('/');
  }
    
=======

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
        $this->session->sess_destroy();
        redirect('/');
    }

>>>>>>> e5a4066d15600e254e8292bb873eb0b30bbb480b
}
?>