<?php     
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {


    function __construct(){
        parent::__construct();
        $this->load->model("User");        
    }

    function index(){            
        $data['titulo'] = 'Mi Perfil';
        $data['main_content'] = 'perfil_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function cargarPerfil(){
        $data['titulo'] = 'Mi Perfil';
        $data['allUser'] = $this->User->get_USR_all_where($this->session->userdata('nick'));
        $data['main_content'] = 'perfil_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function canviarPerfil(){
        $data = $this->input->post();
        $user = $this->User->get_USR_all_where($this->session->userdata('nick'));
        $userUpdate = $this->User->set_UPDATE_User($user[0]['USR_nick'],$data);
        redirect('/');
    }
}
?>