<?php 
class compararDiscosDuros extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getDiscosDuros(){
        $discosDurosSeagatePCC= $this->db->query("select PK_DD, DD_nombre,DD_marca from disco_duro where  DD_marca LIKE '%seagate%' and FK_DD_PK_TIE=1")->result_array();
        $discosDurosSeagatePCB= $this->db->query("select PK_DD, DD_nombre,DD_marca from disco_duro where  DD_marca LIKE '%seagate%' and FK_DD_PK_TIE=2")->result_array();
        $discosDurosToshibaPCC= $this->db->query("select PK_DD, DD_nombre,DD_marca from disco_duro where  DD_marca LIKE '%toshiba%' and FK_DD_PK_TIE=1")->result_array();
        $discosDurosToshibaPCB= $this->db->query("select PK_DD, DD_nombre,DD_marca from disco_duro where  DD_marca LIKE '%toshiba%' and FK_DD_PK_TIE=2")->result_array();
        $discosWDPCC= $this->db->query("select PK_DD, DD_nombre,DD_marca from disco_duro where  DD_marca LIKE '%western_digital%' and FK_DD_PK_TIE=1")->result_array();
        $discosWDPCB= $this->db->query("select PK_DD, DD_nombre,DD_marca from disco_duro where  DD_marca LIKE '%western_digital%' and FK_DD_PK_TIE=2")->result_array();





        echo "<pre>";
        print_r($discosHPPCC);
    }
    public function setTarjetasGraficas(){
        $grafica=array(
            'GRF_nombre'=>'1050',
            'GRF_marca'=>'gigabyte',
        );
        $this->db->like($grafica);
        $this->db->like('GRF_nombre','2GB');
                $this->db->where('PK_GRF',$query[0]['PK_GRF']);
        // $this->db->where('PK_GRF',$query[1]['PK_GRF']);
        $data=array('GRF_coincidir'=>1);
        $this->db->update('tarjeta_grafica',$data);
    }
}
?>
  