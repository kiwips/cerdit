<?php 
class user extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_USR(){
            $this->db->select('PK_USR');
            $query = $this->db->get('user');
            return $query->result_array();
        }

        public function get_USR_email(){
            $this->db->select('USR_email');
            $query = $this->db->get('user');
            return $query->result_array();
        }

        public function get_USR_nick(){
            $this->db->select('USR_nick');
            $query = $this->db->get('user');    
            return $query->result_array();
    }

        public function get_USR_passwd(){
            $this->db->select('USR_passwd');
            $query = $this->db->get('user');
            return $query->result_array();
        }

        public function get_USR_permiso(){
            $this->db->select('USR_permiso');
            $query = $this->db->get('user');
            return $query->result_array();
        }
}
?>