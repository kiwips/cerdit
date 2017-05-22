<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class meterProductos extends CI_Controller {

	public function index() {
		// if ($this->session->userdata('permiso')=='Admin'){
			$this->load->model('pcbGraficas');
			// $this->load->model('pccDiscosDuros');
			// $this->load->model('pccFuentes');
			// $this->load->model('pccGraficas');
			// $this->load->model('pccMemoriaRam');
			// $this->load->model('pccMonitores');
			// $this->load->model('pccPlacasBase');
			// $this->load->model('pccProcesadores');
			// $this->load->model('pccRatones');
			// $this->load->model('pccRefrigeracion');
			// $this->load->model('pccSistemasOperativos');
			// $this->load->model('pccTeclados');
			// $this->load->model('pccTorres');
			// $this->load->model('insertProducto');
			$productos = array(
				'tarjeta_grafica'=>$this->pcbGraficas->saveProductsPCB(),
				// 'disco_duro' => $this->pccDiscosDuros->saveProductsPCC(),
				// 'fuente_alimentacion' => $this->pccFuentes->saveProductsPCC(),
				// 'tarjeta_grafica' => $this->pccGraficas->saveProductsPCC(),
				// 'memoria_ram' => $this->pccMemoriaRam->saveProductsPCC(),
				// 'monitor' => $this->pccMonitores->saveProductsPCC(),
				// 'placa_base' => $this->pccPlacasBase->saveProductsPCC(),
				// 'micro' => $this->pccProcesadores->saveProductsPCC(),
				// 'raton' => $this->pccRatones->saveProductsPCC(),
				// 'refrigeracion' => $this->pccRefrigeracion->saveProductsPCC(),
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
