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
        public function get_USR_pass_where($data){

            $query=$this->db->get_where("user",array(
                "USR_password"=>sha1($data["passwdL"]),
                "USR_nick"=>$data["nickL"]
                )
            );
            if ($query->num_rows()>0) {
                return true;
            }
            return false;
        }
        public function set_USR_permiso($data){
            $this->db->set('USR_permiso', $data['permiso']);
            $this->db->where('USR_nick', $data['user']);
            $this->db->update('user');
        }
        public function get_USR_permiso(){
            $this->db->select('USR_permiso');
            $query = $this->db->get('user');
            return $query->result_array();
        }

        public function get_USR_all_where($nick){
            $this->db->select('USR_nick, USR_email, USR_permiso');
            $query = $this->db->get_where('user',array("USR_nick"=>$nick));
            return $query->result_array();
        }

        public function get_USR_nick_permiso(){
            $this->db->select('USR_nick,USR_permiso');
            $query=array(
                'user'=>$this->db->get('user')->result_array(),
                );
            return $query;
        }
}
?>