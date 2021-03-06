<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        if ($this->session->userdata('permiso')=='Admin'){
            $data['titulo'] = 'Permisos';            
            $this->load->model("User");
            $data['user'] = $this->User->get_USR_nick_permiso($this->session->userdata('nick'));
            $data['permisoCorrecto'] = '';
            $data['main_content'] = 'permiso_View'; 
            $this->parser->parse('includes/template',$data);
        }else{
            redirect('/');
        }
    }

    function cambiaPermiso(){
        if ($this->session->userdata('permiso')=='Admin') {
            if ($this->input->post()) {
                $this->load->model("User");
                $data = $this->input->post();
                $this->User->set_USR_permiso($data);
                $data['permisoCorrecto'] = 'El permiso del usuario <b>'.$data['nickP'].'</b> se ha cambiado correctamente.';
                $data['user'] = $this->User->get_USR_nick_permiso($this->session->userdata('nick'));
                $data['main_content'] = 'permiso_View'; 
                $data['nickUsuario'] = $this->session->userdata('nick');
                $data['titulo'] = 'Permisos';
                $this->parser->parse('includes/template',$data);
            }else{
                $this->index();
            }
        }else{
           redirect('/');
       }
   }

}
?>

