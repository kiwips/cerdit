<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class meterProductos extends CI_Controller {

	public function index()
	{
		$this->load->model('pcc');
		$listaProductos = $this->pcc->saveProductsPCC();
		$this->load->model('insertProducto');
		$this->insertProducto->insertProductos($listaProductos,'tarjeta_grafica');
		$done = array('done'=>'Se han insertado todos los items');
		$this->parser->parse('doneView',$done);
	}
}
?>
