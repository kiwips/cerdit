<?php     
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {


    function __construct(){
        parent::__construct();
        $this->load->model("productos");
    }

<<<<<<< HEAD
    function index(){   
        $data['primera'] = true;
=======
    function index(){
        $data['productos'] = $this->productos->get_PROD_NOM();     
        print_r($data['productos']);
        die;  
>>>>>>> master
        $data['main_content'] = 'index_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function pantallaRegistro(){
        $data['main_content'] = 'registro_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function registroNuevoUsuario(){
        if($this->input->post()){
            $data = $this->input->post();
            $this->load->model("User");
            if ($this->User->setNewUser($data)){
                    $this->crearSesion($data);
                    $this->index();
            }else{
                $this->pantallaRegistro();
            }
        }else{
            redirect('/');
        }
    }


    function crearSesion($usuarioRegistrado){
        $userdata = array(
           'nick' => $usuarioRegistrado['nickR'],
           'email' => $usuarioRegistrado['emailR'],
           'permiso' => 'User',
           'logueado' => TRUE
           );
        $this->session->set_userdata($userdata);  
    }


/*
    function generaPass(){
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena=strlen($cadena);
        $pass = "";
        $longitudPass = 8;

        for($i=1 ; $i<=$longitudPass ; $i++){
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }

        return $pass;
    }*/

/*    function enviarMail($data,$password){

        $config['protocol'] = 'smtp';

        $config["smtp_host"] = 'smtp.gmail.com';

        $config["smtp_user"] = 'comparadorpc@gmail.com';

        $config["smtp_pass"] = 'Folloapelo69';    

        $config["smtp_port"] = '587';
        
        $config['charset'] = 'utf-8';

        $config['wordwrap'] = TRUE;

        $config['validate'] = TRUE;

        $this->email->initialize($config);
        $this->email->from('comparadorpc@gmail.com', 'Administrador');
        $this->email->to($data['emailR']);
        $this->email->subject('CULO COMPARADOR :)');
        $this->email->message('<h3>Hola'.$data['nickR'].'</h3>, <br> <p>Gracias por registrarte en nuestra web aqui tienes tu contraseña que podras canviar en cualquier momento. <br>'.$password);

        if($this->email->send()){
           return true;
        }else{
            return false;
        }
    }*/

}
?>