<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class meterProductos extends CI_Controller {

	public function index() {
		set_time_limit(90);
		// if ($this->session->userdata('permiso')=='Admin'){
			// $this->load->model('pcbGraficas');
			//$this->load->model('pcbDiscosDuros');
<<<<<<< HEAD
			$this->load->model('pcbFuentes');
			 // $this->load->model('pcbMemoriaRam');
=======
			// $this->load->model('pcbFuentes');
<<<<<<< HEAD
			 $this->load->model('pcbMemoriaRam');
=======
>>>>>>> 6f4a4e7d9dea0dba6c6d699c9604c44ed5979a8e
			// $this->load->model('pcbGraficas');
			// $this->load->model('pcbTorres');
			// $this->load->model('pccDiscosDuros');
			// $this->load->model('pccFuentes');
			// $this->load->model('pccGraficas');
			// $this->load->model('pccMemoriaRam');
			// $this->load->model('pccMonitores');
			// $this->load->model('pccPlacasBase');
			// $this->load->model('pccProcesadores');
			// $this->load->model('pccRatones');
			// $this->load->model('pccRefrigeracion');
=======
			// $this->load->model('pcbMemoriaRam');
			 //$this->load->model('pcbMonitores');
			 //$this->load->model('pcbPlacasBase');
			//$this->load->model('pcbProcesadores');
			 //$this->load->model('pcbRatones');
<<<<<<< HEAD
			 $this->load->model('pcbRefrigeracion');
>>>>>>> jaime
			// $this->load->model('pccSistemasOperativos');
			// $this->load->model('pccTeclados');
			// $this->load->model('pccTorres');
=======
			 //$this->load->model('pcbRefrigeracion');
			//$this->load->model('pcbSistemasOperativos');
			//$this->load->model('pcbTeclados');
			$this->load->model('pcbTorres');
>>>>>>> jaime
			// $this->load->model('insertProducto');
			$productos = array(
				// 'tarjeta_grafica'=>$this->pcbGraficas->saveProductsPCB(),
				// 'disco_duro' => $this->pcbDiscosDuros->saveProductsPCB(),
<<<<<<< HEAD
				'fuente_alimentacion' => $this->pcbFuentes->saveProductsPCB(),
				 // 'memoria_ram' => $this->pcbMemoriaRam->saveProductsPCB(),
=======
				// 'fuente_alimentacion' => $this->pcbFuentes->saveProductsPCB(),
<<<<<<< HEAD
				 'memoria_ram' => $this->pcbMemoriaRam->saveProductsPCB(),
=======
>>>>>>> 6f4a4e7d9dea0dba6c6d699c9604c44ed5979a8e
				// 'tarjeta_grafica'=>$this->pcbGraficas->saveProductsPCB(),
				// 'torre'=>$this->pcbTorres->saveProductsPCB(),
				// 'disco_duro' => $this->pccDiscosDuros->saveProductsPCC(),
				// 'fuente_alimentacion' => $this->pccFuentes->saveProductsPCC(),
				// 'tarjeta_grafica' => $this->pccGraficas->saveProductsPCC(),
				// 'memoria_ram' => $this->pccMemoriaRam->saveProductsPCC(),
				// 'monitor' => $this->pccMonitores->saveProductsPCC(),
				// 'placa_base' => $this->pccPlacasBase->saveProductsPCC(),
				// 'micro' => $this->pccProcesadores->saveProductsPCC(),
				// 'raton' => $this->pccRatones->saveProductsPCC(),
				// 'refrigeracion' => $this->pccRefrigeracion->saveProductsPCC(),
=======
				// 'memoria_ram' => $this->pcbMemoriaRam->saveProductsPCB(),
				// 'monitor' => $this->pcbMonitores->saveProductsPCB(),
				// 'placa_base' => $this->pcbPlacasBase->saveProductsPCB(),
				// 'micro' => $this->pcbProcesadores->saveProductsPCB(),
				//'raton' => $this->pcbRatones->saveProductsPCB(),
<<<<<<< HEAD
				'refrigeracion' => $this->pcbRefrigeracion->saveProductsPCB(),
>>>>>>> jaime
				// 'sistema_operativo' => $this->pccSistemasOperativos->saveProductsPCC(),
				// 'teclado' => $this->pccTeclados->saveProductsPCC(),
				// 'torre' => $this->pccTorres->saveProductsPCC(),
=======
				//'refrigeracion' => $this->pcbRefrigeracion->saveProductsPCB(),
				//'sistema_operativo' => $this->pcbSistemasOperativos->saveProductsPCB(),
				 //'teclado' => $this->pcbTeclados->saveProductsPCB(),
				 'torre' => $this->pcbTorres->saveProductsPCB(),
>>>>>>> jaime
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
