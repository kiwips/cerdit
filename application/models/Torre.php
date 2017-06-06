<?php 
class Torre extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_TOR(){
            $this->db->select('PK_TOR');
            $query = $this->db->get('torre');
            return $query->result_array();
        }

        public function get_FK_TOR_PK_PROD(){
            $this->db->select('PK_TOR');
            $query = $this->db->get('torre');
            return $query->result_array();
        }

        public function get_TOR_nombre(){
            $this->db->select('TOR_nombre');
            $query = $this->db->get('torre');
            return $query->result_array();
        }

        public function get_TOR_precio(){
            $this->db->select('TOR_precio');
            $query = $this->db->get('torre');    
            return $query->result_array();
        }

        public function get_TOR_img(){
            $this->db->select('TOR_img');
            $query = $this->db->get('torre');
            return $query->result_array();
        }   
        
        public function get_TOR_tamano_x(){
            $this->db->select('TOR_tamano_x');
            $query = $this->db->get('torre');
            return $query->result_array();
        }     

        public function get_TOR_tamano_y(){
            $this->db->select('TOR_tamano_y');
            $query = $this->db->get('torre');
            return $query->result_array();
        } 

        public function get_TOR_tamano_z(){
            $this->db->select('TOR_tamano_z');
            $query = $this->db->get('torre');
            return $query->result_array();
        }  

        /*No tocar*/
   public function get_all_coincidir(){
        $cont=0;
        $query = $this->db->query("SELECT `TOR_nombre`,`TOR_precio`,`TOR_img`,`TOR_marca`,`FK_TOR_PK_TIE`,`TOR_coincidir` FROM torre WHERE `TOR_coincidir` !=0");
        $productos=array();
        foreach ($query->result_array() as $key => $value) {
            foreach ($value as $producto => $valor) {
                $cont++;
                $consulta = $this->db->query('select * from torre where TOR_coincidir='.$cont.'');
                if ($consulta->num_rows()>0) {
                    # code...
                    array_push($productos, $consulta->result_array());
                }
            }
        }
        return $productos;
    }     

    public function get_all_no_coincidir(){
        $query = $this->db->query("SELECT `TOR_nombre`,`TOR_precio`,`TOR_img`,`TOR_marca`,`FK_TOR_PK_TIE`,`TOR_coincidir` FROM torre WHERE `TOR_coincidir`=0");

        return $query->result_array();
    }    

        public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('TOR_marca');
            $query = $this->db->get('torre');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(TOR_PRECIO)) AS precio_minimo, ROUND(MAX(TOR_PRECIO)) AS precio_maximo from torre;");
            return $query->result_array();
        }                
}
?>