<?php 
class compararGraficas extends CI_Model{
    function __construct(){
        parent::__construct();
    }  

        public function get_PK_DD(){
            $this->db->select('PK_DD');
            $query = $this->db->get('disco_duros');
            return $query->result_array();
        }
    public function getTarjetasGraficas(){
        $graficasAMD = $this->db->query("select PK_GRF, GRF_nombre,GRF_marca from tarjeta_grafica where  GRF_marca LIKE '%amd%'")->result_array();
        $graficasPCCAMD = $this->db->query("select PK_GRF, GRF_nombre,GRF_marca from tarjeta_grafica where FK_GRF_PK_TIE=1 and GRF_nombre LIKE '%580%' and GRF_nombre LIKE '%8GB%' and (GRF_marca LIKE '%amd%')")->result_array();
        $graficasPCBAMD = $this->db->query("select PK_GRF, GRF_nombre,GRF_marca from tarjeta_grafica where FK_GRF_PK_TIE=2 and GRF_nombre LIKE '%580%' and GRF_nombre LIKE '%8GB%' and (GRF_marca LIKE '%amd%')")->result_array();
        // $graficasPCCNVIDIA = $this->db->query("select PK_GRF, GRF_nombre,GRF_marca from tarjeta_grafica where FK_GRF_PK_TIE=1 and GRF_nombre LIKE '%750%' and GRF_nombre LIKE '%4GB%' and (GRF_marca LIKE '%asus%' or GRF_marca LIKE '%nvidia%')")->result_array();
        // $graficasPCBNVIDIA = $this->db->query("select PK_GRF, GRF_nombre,GRF_marca from tarjeta_grafica where FK_GRF_PK_TIE=2 and GRF_nombre LIKE '%750%' and GRF_nombre LIKE '%4GB%' and (GRF_marca LIKE '%asus%' or GRF_marca LIKE '%nvidia%')")->result_array();
        echo "<pre>";
        print_r($graficasPCCAMD);
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
  