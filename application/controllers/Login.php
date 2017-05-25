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
        if ($this->User->get_USR_pass_where($data)) {
            $this->crearSesion($this->User->get_USR_all_where($data['nickL']));
            if(isset($data['recordarL'])){
              $usuarioRegistrado = array(
                  'Nick' => $data['nickL'],
                  'Password' => $data['passwdL']
                );
                setcookie('recordar', serialize($usuarioRegistrado),time()+3600*24*365);
            }
            setcookie('errorLogin','',time()-3600);
            delete_cookie('errorLogin');
        }else{
            setcookie('errorLogin','Error en la autenticaçion',time()+3600);
            redirect('/');
        }
            $this->load->model("productos");
<<<<<<< HEAD
            $data['productos'] = $this->productos->get_PROD_NOM();  
            $data['primera'] = true;                   
=======
            $data['productos'] = $this->productos->get_PROD_NOM();                 
>>>>>>> master
            $data['main_content'] = 'index_View'; 
            $this->parser->parse('includes/template',$data);
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
      redirect('/');
  }
    

}
?>