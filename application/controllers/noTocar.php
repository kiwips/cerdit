<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class NoTocar extends CI_Controller {
        
        function __construct(){
            parent::__construct();
        }

        function index(){      
            $this->load->model("pccFuentes");
            $this->pccFuentes->saveProductsPCC();
        }
   
    }
?>