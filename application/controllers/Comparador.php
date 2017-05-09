<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Comparador extends CI_Controller {
        function __construct(){
            parent::__construct();
        }
        function index(){      
            $data['main_content'] = 'index_View'; 
            $this->parser->parse('includes/template',$data);
        }

        function registroNuevoUsuario(){
/*            $nickNU = $this->form_validation->set_rules('nickR', 'Nick','required|min_length[5]|max_length[12]|is_unique[users.username]', array(
                                                    'is_unique'     => 'El nick ya existe.'
                                                    ));

            $emailNU = $this->form_validation->set_rules('emailR','Email', 'required|valid_email|is_unique[users.email]' );

            $passwdNU = $this->input->post('passwdR'); 

            if ($nickNU) {
                echo 'nick unico';
            };
*//*            echo $emailNU;
            echo $passwdNU;*/
        }  
    }
?>