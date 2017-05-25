<?php 
class compararDiscosDuros extends CI_Model{
    function __construct(){
        parent::__construct();
    }  
    
    public function getDiscosDuros(){
        $grafica=array(
            'GRF_nombre'=>'1050',
            'GRF_marca'=>'gigabyte',
        );
        $this->db->like($grafica);
        $this->db->like('GRF_nombre','2GB');
        // $this->db->like('GRF_nombre','D5');
        $query=$this->db->get('tarjeta_grafica')->result_array();
        echo "<pre>";
        print_r($query);
        $this->db->where('PK_GRF',$query[0]['PK_GRF']);
        // $this->db->where('PK_GRF',$query[1]['PK_GRF']);
        $data=array('GRF_coincidir'=>1);
        $this->db->update('tarjeta_grafica',$data);

        // echo $this->db->last_query();

    }
}
?>