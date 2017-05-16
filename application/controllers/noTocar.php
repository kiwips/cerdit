<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
<<<<<<< HEAD
    class NoTocar extends CI_Controller {
=======
    class noTocar extends CI_Controller {
>>>>>>> master
        
        function __construct(){
            parent::__construct();
        }

        function index(){      
<<<<<<< HEAD
            $this->load->model("pccMonitores");
            $this->pccMonitores->saveProductsPCC();
=======
<<<<<<< HEAD
            $this->load->model("pccMonitores");
            $this->pccMonitores->saveProductsPCC();
=======
<<<<<<< HEAD
            $this->load->model("pccFuentes");
            $this->pccFuentes->saveProductsPCC();
=======
            $this->load->model("pccPlacasBase");
            $this->pccPlacasBase->saveProductsPCC();
>>>>>>> 70fff66eead81515a16ee2b04eddcf8b1cb7543d
>>>>>>> 1334369612263be9dfc8b0624402462172c93e5f
>>>>>>> master
        }
   
    }
?>