<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Permisos extends CI_Controller {
        function __construct(){
            parent::__construct();
        }
        function index(){            
            // $data['main_content'] = 'permisoView'; 
            // $this->parser->parse('includes/template',$data);
            $this->load->model("User");
            $permisos=$this->User->get_USR_nick_permiso();
            $this->parser->parse('permisoView',$permisos);
        }
        public function cambiaPermiso(){
            $this->load->model("User");
            $data=$this->input->post();
            $this->User->set_USR_permiso($data);
            $permisos=$this->User->get_USR_nick_permiso();
            $done=array('done'=>'Usuario '.$data["user"].' con permiso '.$data["permiso"]);
            $this->parser->parse('doneView',$done);
            $this->parser->parse('permisoView',$permisos);
        }
    }
?>