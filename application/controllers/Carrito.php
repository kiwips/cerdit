<?php     
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('pc');
        $this->load->model('User');
    }

    function index(){  
      $nombre = $this->input->get('nombre');
      $precio = $this->input->get('precio');
      $tienda = $this->input->get('tienda');
      $componente = $this->input->get('componente');    
      $idUser = $this->User->get_PK_USR_where_Nick($this->session->userdata('nick'));
      $idUser = $idUser[0]['PK_USR'];
      $this->pc->set_FK_PK_USR($idUser,$nombre,$precio,$tienda);
      $componente = str_replace(" P","P", $componente);
      $componente = str_replace(" T","T", $componente);
      $componente = str_replace(" D","D", $componente);
      $componente = str_replace(" R","R", $componente);
      $componente = str_replace(" M","M", $componente);
      $componente = str_replace(" F","F", $componente);
      $componente = str_replace(" S","S", $componente);
      redirect('http://dreampc.hopto.org/componente?n='.$componente);
    }

    function cargarCarrito(){
      $idUser = $this->User->get_PK_USR_where_Nick($this->session->userdata('nick'));
      $idUser = $idUser[0]['PK_USR'];
      $data['todoCarrito'] = $this->pc->get_all_PC($idUser);
      $data['main_content'] = 'carrito_View'; 
      $this->parser->parse('includes/template',$data);
    }

    function borrarProducto(){
      $idLineaPC = $this->input->get('pk');
      $this->pc->del_liniaPC($idLineaPC);
      redirect('http://dreampc.hopto.org/carrito');
    }
}
?>