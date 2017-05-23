<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class meterProductos extends CI_Controller {

	public function index() {
		// if ($this->session->userdata('permiso')=='Admin'){
<<<<<<< HEAD
			//$this->load->model('pcbGraficas');
			//$this->load->model('pcbDiscosDuros');
			// $this->load->model('pcbFuentes');
			 $this->load->model('pcbMemoriaRam');
=======
			// $this->load->model('pcbGraficas');
			$this->load->model('pcbTorres');
			// $this->load->model('pccDiscosDuros');
			// $this->load->model('pccFuentes');
			// $this->load->model('pccGraficas');
			// $this->load->model('pccMemoriaRam');
>>>>>>> 2f72348f216fd4506628ad92412338abba04ed78
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
<<<<<<< HEAD
				//'tarjeta_grafica'=>$this->pcbGraficas->saveProductsPCB(),
				// 'disco_duro' => $this->pcbDiscosDuros->saveProductsPCB(),
				// 'fuente_alimentacion' => $this->pcbFuentes->saveProductsPCB(),
				 'memoria_ram' => $this->pcbMemoriaRam->saveProductsPCB(),
=======
				// 'tarjeta_grafica'=>$this->pcbGraficas->saveProductsPCB(),
				'torre'=>$this->pcbTorres->saveProductsPCB(),
				// 'disco_duro' => $this->pccDiscosDuros->saveProductsPCC(),
				// 'fuente_alimentacion' => $this->pccFuentes->saveProductsPCC(),
				// 'tarjeta_grafica' => $this->pccGraficas->saveProductsPCC(),
				// 'memoria_ram' => $this->pccMemoriaRam->saveProductsPCC(),
>>>>>>> 2f72348f216fd4506628ad92412338abba04ed78
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
