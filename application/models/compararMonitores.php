<?php 
class compararMonitores extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

    public function getMonitores(){
        $monitoresLgPCC= $this->db->query("select PK_MON, MON_nombre,MON_marca,MON_precio from monitor where  MON_marca LIKE '%lg%' and FK_MON_PK_TIE=1")->result_array();
        $monitoresLgPCB= $this->db->query("select PK_MON, MON_nombre,MON_marca from monitor where  MON_marca LIKE '%lg%' and FK_MON_PK_TIE=2")->result_array();

        $monitoresAsusPCC= $this->db->query("select PK_MON, MON_nombre,MON_marca,MON_precio from monitor where  MON_marca LIKE '%asus%' and FK_MON_PK_TIE=1")->result_array();
        $monitoresAsusPCB= $this->db->query("select PK_MON, MON_nombre,MON_marca from monitor where  MON_marca LIKE '%asus%' and FK_MON_PK_TIE=2")->result_array();
        
        $monitoresSamsungPCC= $this->db->query("select PK_MON, MON_nombre,MON_marca,MON_precio from monitor where  MON_marca LIKE '%samsung%' and FK_MON_PK_TIE=1")->result_array();
        $monitoresSamsungPCB= $this->db->query("select PK_MON, MON_nombre,MON_marca from monitor where  MON_marca LIKE '%samsung%' and FK_MON_PK_TIE=2")->result_array();

        $monitoresAcerPCC= $this->db->query("select PK_MON, MON_nombre,MON_marca,MON_precio from monitor where  MON_marca LIKE '%acer%' and FK_MON_PK_TIE=1")->result_array();
        $monitoresAcerPCB= $this->db->query("select PK_MON, MON_nombre,MON_marca from monitor where  MON_marca LIKE '%acer%' and FK_MON_PK_TIE=2")->result_array();
        echo "<pre>";
        print_r($monitoresAcerPCB);
    }
   
}
?>
  