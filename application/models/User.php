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
                "USR_password"=> sha1($data["passwdL"]),
                "USR_nick"=> $data["nickL"]
                )
            );
            if ($query->num_rows()>0) {
                return true;
            }
            return false;
        }

        public function set_USR_permiso($data){
            $this->db->set('USR_permiso', $data['permiso']);
            $this->db->where('USR_nick', $data['nickP']);
            $this->db->update('user');
        }

        public function get_USR_permiso(){
            $this->db->select('USR_permiso');
            $query = $this->db->get('user');
            return $query->result_array();
        }

        public function get_USR_all_where($nick){
            $this->db->select('USR_nick, USR_email, USR_permiso,USR_password');
            $query = $this->db->get_where('user',array("USR_nick"=>$nick));
            return $query->result_array();
        }

         public function get_USR_nick_permiso($nick){
            $this->db->select('USR_nick,USR_permiso');
            $this->db->where_not_in('USR_nick',$nick);
            $query = $this->db->get('user');
            return $query->result_array();
        }

        public function setNewUser($data){
            $data1=array(
                'USR_email'=> $data['emailR'] ,
                'USR_nick'=> $data['nickR'] ,
                'USR_password'=> sha1($data['passwdR']),
                'USR_permiso'=> 'User'
            );
            $email_exists = $this->get_USR_email_exists(array('USR_email'=>$data['emailR']));
            $usr_exists = $this->get_USR_nick_exists(array('USR_nick'=>$data['nickR']));
            if (!$usr_exists && !$email_exists) {
                $this->db->insert('user', $data1); 
                return true;
            }
            return false;
            
        }

        public function get_USR_email_exists($data){
            $this->db->select('USR_email');
            $query = $this->db->get_where('user',$data);
            if ($query->num_rows()>0) {
                return true;
            }return false;
        }

        public function get_USR_nick_exists($data){
            $this->db->select('USR_nick');
            $query = $this->db->get_where('user',$data);    
            if ($query->num_rows()>0) {
                return true;
            }return false;
        }

        public function set_UPDATE_User($user,$data){
            $this->db->set('USR_password',sha1($data['passwdP']));
            $this->db->where('USR_nick', $user);
            $this->db->update('user');
        }

     public function get_PK_USR_where_Nick($nick){
            $this->db->select('PK_USR');
            $query = $this->db->get_where('user',array("USR_nick"=>$nick));
            return $query->result_array();
        }
}
?>