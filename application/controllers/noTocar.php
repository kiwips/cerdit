<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class noTocar extends CI_Controller {
        
        function __construct(){
            parent::__construct();
        }

        function index(){      
<<<<<<< HEAD

            $this->load->model("pccRatones");
            $this->pccRatones->saveProductsPCC();


=======
            $this->load->model("pccTeclados");
            $this->pccTeclados->saveProductsPCC();
>>>>>>> e9ac50ac427a726f4b48f964bd83fc02f6e090ad
        }
   
    }
?>