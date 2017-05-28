<?php     
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {


    function __construct(){
        parent::__construct();
        $this->load->model("User");        
    }

    function index(){
        if ($this->session->userdata('logueado')){    
            $data['allUser'] = $this->User->get_USR_all_where($this->session->userdata('nick'));            
            $data['main_content'] = 'contacto_View'; 
            $this->parser->parse('includes/template',$data);
        }else{
            redirect('/');
        }
    }  
}
?>