<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class noTocar extends CI_Controller {
        
        function __construct(){
            parent::__construct();
        }

        function index(){      

            $this->load->model("pccRatones");
            $this->pccRatones->saveProductsPCC();

            $this->load->model("pccTeclados");
            $this->pccTeclados->saveProductsPCC();
        }
   
    }
?>