<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class noTocar extends CI_Controller {
        
        function __construct(){
            parent::__construct();
        }

        function index(){      
<<<<<<< HEAD
            $this->load->model("pccFuentes");
            $this->pccFuentes->saveProductsPCC();
=======
            $this->load->model("pccPlacasBase");
            $this->pccPlacasBase->saveProductsPCC();
>>>>>>> 70fff66eead81515a16ee2b04eddcf8b1cb7543d
        }
   
    }
?>