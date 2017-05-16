<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){            
        $this->load->model("User");
        $data['user'] = $this->User->get_USR_nick_permiso($this->session->userdata('nick'));
        $data['permisoCorrecto'] = '';
        $data['main_content'] = 'permiso_View'; 
        $this->parser->parse('includes/template',$data);
    }

    function cambiaPermiso(){
        if ($this->input->post()) {
            $this->load->model("User");
            $data = $this->input->post();
            $this->User->set_USR_permiso($data);
            $data['permisoCorrecto'] = 'El permiso del usuario <b>'.$data['nickP'].'</b> se ha cambiado correctamente.';
            $permisoCorrecto = $data['permisoCorrecto'];
<<<<<<< HEAD
            $data['user'] = $this->User->get_USR_nick_permiso();
=======
            $data['user'] = $this->User->get_USR_nick_permiso($this->session->userdata('nick'));
>>>>>>> master
            $data['main_content'] = 'permiso_View'; 
            $data['nickUsuario'] = $this->session->userdata('nick');
            $this->parser->parse('includes/template',$data);
        }else{
            $this->index();
        }            
    }
<<<<<<< HEAD
=======

>>>>>>> master
    
}
?>

