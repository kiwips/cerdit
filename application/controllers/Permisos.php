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
            $this->load->view("volverView");
        }
        public function cambiaPermiso(){
            if ($this->session->userdata['permiso']=='Admin') {
                if ($_POST) {
                    $this->load->model("User");
                    $data=$this->input->post();
                    $this->User->set_USR_permiso($data);
                    $permisos=$this->User->get_USR_nick_permiso();
                    $done=array('done'=>'Usuario '.$data["user"].' con permiso '.$data["permiso"]);
                    $this->parser->parse('doneView',$done);
                    $this->parser->parse('permisoView',$permisos);
                    $this->load->view("volverView");
                }else{
                    $this->index();
                }
            }else{
                $error=array('error'=>'No tienes permisos para acceder a esta página');
                $this->parser->parse("errorView",$error);
                $this->load->view("volverView");
            }            
        }
    }
?>