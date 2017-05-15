<?php     
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {


    function __construct(){
        parent::__construct();
    }

    function index(){            
        $data['main_content'] = 'perfil_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function cargarPerfil(){
        $this->load->model("User");        
        $data['allUser'] = $this->User->get_USR_all_where($this->session->userdata('nick'));
        $data['main_content'] = 'perfil_View'; 
        $this->parser->parse('includes/template',$data);
    }
}
?>