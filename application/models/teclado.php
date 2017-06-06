<?php 
class teclado extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_TEC(){
            $this->db->select('PK_TEC');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

        public function get_FK_TEC_PK_PROD(){
            $this->db->select('FK_TEC_PK_PROD');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }        

        public function get_TEC_nombre(){
            $this->db->select('TEC_nombre');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

        public function get_TEC_precio(){
            $this->db->select('TEC_precio');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

        public function get_TEC_img(){
            $this->db->select('TEC_img');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

        public function get_TEC_tipo(){
            $this->db->select('TEC_tipo');
            $query = $this->db->get('teclado');    
            return $query->result_array();
        }

        public function get_TEC_cable(){
            $this->db->select('TEC_cable');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

        /*No tocar*/
    public function get_all_coincidir(){
        $cont=0;
        $query = $this->db->query("SELECT `TEC_nombre`,`TEC_precio`,`TEC_img`,`TEC_marca`,`FK_TEC_PK_TIE`,`TEC_coincidir` FROM teclado WHERE `TEC_coincidir` !=0");
        $productos=array();
        foreach ($query->result_array() as $key => $value) {
            foreach ($value as $producto => $valor) {
                $cont++;
                $consulta = $this->db->query('select * from teclado where TEC_coincidir='.$cont.'');
                if ($consulta->num_rows()>0) {
                    array_push($productos, $consulta->result_array());
                }
            }
        }
        return $productos;
    }    

    public function get_all_no_coincidir(){
        $query = $this->db->query("SELECT `TEC_nombre`,`TEC_precio`,`TEC_img`,`TEC_marca`,`FK_TEC_PK_TIE`,`TEC_coincidir` FROM teclado WHERE `TEC_coincidir`=0");

        return $query->result_array();
    }     

        public function get_all_marca(){
            $this->db->distinct();
            $this->db->select('TEC_marca');
            $query = $this->db->get('teclado');
            return $query->result_array();
        }

      public function get_min_max_precio(){
            $query = $this->db->query("SELECT ROUND(MIN(TEC_PRECIO)) AS precio_minimo, ROUND(MAX(TEC_PRECIO)) AS precio_maximo from teclado;");
            return $query->result_array();
        }         
}
?>