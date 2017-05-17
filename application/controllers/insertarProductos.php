<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class insertarProductos extends CI_Controller {
        function __construct(){
            parent::__construct();
        }
        function index(){      
<<<<<<< HEAD:application/controllers/noTocar.php

            $this->load->model("pccFuentes");
            $this->pccFuentes->saveProductsPCC();
=======
            $this->load->model("pccRatones");
            $this->pccRatones->saveProductsPCC();
>>>>>>> kevin:application/controllers/insertarProductos.php
        }
    }
?>