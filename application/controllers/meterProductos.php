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
			 $this->load->model('pcbRefrigeracion');
			// $this->load->model('pccSistemasOperativos');
			// $this->load->model('pccTeclados');
			// $this->load->model('pccTorres');
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
				'refrigeracion' => $this->pcbRefrigeracion->saveProductsPCB(),
				// 'sistema_operativo' => $this->pccSistemasOperativos->saveProductsPCC(),
				// 'teclado' => $this->pccTeclados->saveProductsPCC(),
				// 'torre' => $this->pccTorres->saveProductsPCC(),
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
