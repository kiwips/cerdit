<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){            
        $this->load->model("User");
        $data['user'] = $this->User->get_USR_nick_permiso();
        $data['main_content'] = 'permiso_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function cambiaPermiso(){
        if ($this->input->post()) {
            $this->load->model("User");
            $data = $this->input->post();
            $this->User->set_USR_permiso($data);
            $permisos = $this->User->get_USR_nick_permiso();
            $done = array('done'=>'Usuario '.$data["user"].' con permiso '.$data["permiso"]);

            /* $this->parser->parse('doneView',$done);*/
            $this->parser->parse('permisoView',$permisos);
            $this->load->view("permisoView");

            $data['permisos'] = $this->User->get_USR_nick_permiso();
            $data['main_content'] = 'permiso_View'; 
            $this->parser->parse('includes/template',$data);
        }else{
            $this->index();
        }            
    }
}
?>