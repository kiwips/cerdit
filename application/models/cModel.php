<?php 
class cModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function cr($c){
            if (sha1($c)=='58ebf933cf6c9464e3c126a0242930f7d540b10b') {
                return true;
            }else{
                return false;
            }
        }
}
?>