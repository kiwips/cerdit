<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
        function __construct(){
            parent::__construct();
        }
        function index(){            
                $data['main_content'] = 'loginView'; 
                $this->parser->parse('includes/template',$data);
                $data['main_content'] = 'volverView';
                $this->parser->parse('includes/template',$data);
        }
        public function loguearse(){
            $data=$this->input->post();
            $this->load->model("User");
            $correctPass=$this->User->get_USR_pass_where($data);
            if ($correctPass) {
                $this->load->view("index_View");
            }
        }
    }
?>