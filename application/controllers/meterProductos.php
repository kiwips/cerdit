<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class meterProductos extends CI_Controller {

	public function index() {
		set_time_limit(90);
		// if ($this->session->userdata('permiso')=='Admin'){
			// $this->load->model('pccDiscosDuros');
			// $this->load->model('pcbDiscosDuros');
			// $this->load->model('pccGraficas');
			// $this->load->model('pcbGraficas');
			// $this->load->model('pccMemoriaRam');
			// $this->load->model('pcbMemoriaRam');
			// $this->load->model('pccMonitores');
			// $this->load->model('pcbMonitores');
			// $this->load->model('pccFuentes');
			// $this->load->model('pcbFuentes');
			// $this->load->model('pccPlacasBase');
			// $this->load->model('pcbPlacasBase');
			// $this->load->model('pccProcesadores');
			// $this->load->model('pcbProcesadores');
			// $this->load->model('pccRatones');
			// $this->load->model('pcbRatones');
			// $this->load->model('pccTorres');
			// $this->load->model('pcbTorres');
			// $this->load->model('pccRefrigeracion');
			// $this->load->model('pcbRefrigeracion');
			// $this->load->model('pcbMemoriaRam');
			// $this->load->model('pccTeclados');
			$this->load->model('pcbTeclados');

			// $this->load->model('pccSistemasOperativos');
			// $this->load->model('pcbSistemasOperativos');
			$this->load->model('insertProducto');
			$productos = array(
				// 'disco_duro' => $this->pccDiscosDuros->saveProductsPCC(),
				// 'disco_duro_pcb' => $this->pcbDiscosDuros->saveProductsPCB(),
				// 'tarjeta_grafica' => $this->pccGraficas->saveProductsPCC(),
				// 'tarjeta_grafica_pcb'=>$this->pcbGraficas->saveProductsPCB(),
				// 'memoria_ram' => $this->pccMemoriaRam->saveProductsPCC(),
				// 'memoria_ram_pcb' => $this->pcbMemoriaRam->saveProductsPCB(),
				// 'monitor' => $this->pccMonitores->saveProductsPCC(),
				// 'monitor_pcb' => $this->pcbMonitores->saveProductsPCB(),
				// 'fuente_alimentacion' => $this->pccFuentes->saveProductsPCC(),
				// 'fuente_alimentacion_pcb' => $this->pcbFuentes->saveProductsPCB(),
				// 'placa_base' => $this->pccPlacasBase->saveProductsPCC(),
				// 'placa_base_pcb' => $this->pcbPlacasBase->saveProductsPCB(),
				// 'micro' => $this->pccProcesadores->saveProductsPCC(),
				// 'micro_pcb' => $this->pcbProcesadores->saveProductsPCB(),
				// 'raton' => $this->pccRatones->saveProductsPCC(),
				// 'raton_pcb' => $this->pcbRatones->saveProductsPCB(),
				// 'torre' => $this->pccTorres->saveProductsPCC(),
				// 'torre_pcb'=>$this->pcbTorres->saveProductsPCB(),
				// 'refrigeracion' => $this->pccRefrigeracion->saveProductsPCC(),
				// 'refrigeracion_pcb' => $this->pcbRefrigeracion->saveProductsPCB(),
				// 'teclado' => $this->pccTeclados->saveProductsPCC(),
				'teclado_pcb' => $this->pcbTeclados->saveProductsPCB(),
				// 'sistema_operativo' => $this->pccSistemasOperativos->saveProductsPCC(),
				// 'sistema_operativo_pcb' => $this->pcbSistemasOperativos->saveProductsPCB(),
				);
			foreach ($productos as $key => $value) {
				$this->insertProducto->insertarProductos($value,$key);
			}

		// }else{
			// redirect('/');
		// }
	}
}
?>
