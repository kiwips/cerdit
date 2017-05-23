<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class meterProductos extends CI_Controller {

	public function index() {
		// if ($this->session->userdata('permiso')=='Admin'){
			//$this->load->model('pcbGraficas');
			//$this->load->model('pcbDiscosDuros');
			// $this->load->model('pcbFuentes');
			// $this->load->model('pcbMemoriaRam');
			 //$this->load->model('pcbMonitores');
			 //$this->load->model('pcbPlacasBase');
			//$this->load->model('pcbProcesadores');
			 //$this->load->model('pcbRatones');
			 //$this->load->model('pcbRefrigeracion');
			//$this->load->model('pcbSistemasOperativos');
			//$this->load->model('pcbTeclados');
			$this->load->model('pcbTorres');
			// $this->load->model('insertProducto');
			$productos = array(
				//'tarjeta_grafica'=>$this->pcbGraficas->saveProductsPCB(),
				// 'disco_duro' => $this->pcbDiscosDuros->saveProductsPCB(),
				// 'fuente_alimentacion' => $this->pcbFuentes->saveProductsPCB(),
				// 'memoria_ram' => $this->pcbMemoriaRam->saveProductsPCB(),
				// 'monitor' => $this->pcbMonitores->saveProductsPCB(),
				// 'placa_base' => $this->pcbPlacasBase->saveProductsPCB(),
				// 'micro' => $this->pcbProcesadores->saveProductsPCB(),
				//'raton' => $this->pcbRatones->saveProductsPCB(),
				//'refrigeracion' => $this->pcbRefrigeracion->saveProductsPCB(),
				//'sistema_operativo' => $this->pcbSistemasOperativos->saveProductsPCB(),
				 //'teclado' => $this->pcbTeclados->saveProductsPCB(),
				 'torre' => $this->pcbTorres->saveProductsPCB(),
				);
			// foreach ($productos as $key => $value) {
			// 	$this->insertProducto->insertarProductos($value,$key);
			// }

		// }else{
			// redirect('/');
		// }
	}
}
?>
