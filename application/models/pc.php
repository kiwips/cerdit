<?php 
class pc extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_PC(){
            $this->db->select('PK_PC');
            $query = $this->db->get('pc');
            return $query->result_array();
        }

        public function get_PC_FK_PK_USR(){
            $this->db->select('FK_PK_USR');
            $query = $this->db->get('pc');
            return $query->result_array();
        }

        public function get_PC_precio(){
            $this->db->select('PC_precio');
            $query = $this->db->get('pc');    
            return $query->result_array();
    }
        public function get_PC_tienda(){
            $this->db->select('PC_tienda');
            $query = $this->db->get('pc');    
            return $query->result_array();
    }
        public function get_PC_nombre(){
            $this->db->select('PC_nombre');
            $query = $this->db->get('pc');    
            return $query->result_array();
    }

    public function set_FK_PK_USR($idUser,$nombre,$precio,$tienda){
        $this->db->insert('pc',array('FK_PK_USR' => $idUser,'PC_nombre' => $nombre, 'PC_tienda' => $tienda, 'PC_precio' => $precio));
    }

    public function get_all_PC($idUser){
        $this->db->select('PK_PC,PC_nombre,PC_precio,PC_tienda');
        $query = $this->db->get_where('pc',array("FK_PK_USR"=>$idUser));
        return $query->result_array();
    }

    public function del_liniaPC($idLineaPC){
        $this->db->delete('pc', array('PK_PC' => $idLineaPC));    
    }
}
?>