<?php
class vuelos extends CI_Controller {
		
		function index()
		{
			$this->list_vuelo();
		}

		function nuevo()
		{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('origen', 'Origen', 'required');
		$this->form_validation->set_rules('destino', 'Destino', 'required');
		$this->form_validation->set_rules('npasajeros', 'Nº de Pasajeros', 'required');
		$this->form_validation->set_rules('fechasalida', 'Cedula', 'required');
		$this->form_validation->set_rules('fechallegada', 'Nombre', 'required');

	//	var_dump($this->input->get());

			if ($this->form_validation->run() == FALSE)
			{
				$datos_plantilla["partial"] = "form_vuelos";
				$datos_plantilla["menu"] = "_menu_vuelo";
				$this->load->view('welcome_message', $datos_plantilla);
			}
			else
			{
				$this->agregar();
			}
		}		

		function agregar()
		{
			$this->load->helper(array('form', 'url'));
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('origen', 'Origen', 'required|alpha');
			$this->form_validation->set_rules('destino', 'Destino', 'required|alpha');
			$this->form_validation->set_rules('npasajeros', 'Nº de Pasajeros', 'required|numeric');
			$this->form_validation->set_rules('fechasalida', 'Fecha y Hora de Salida', 'required');
			$this->form_validation->set_rules('fechallegada', 'Fecha y Hora de Llegada', 'required');

		if ($this->form_validation->run() == FALSE){
				$datos_plantilla["partial"] = "form_vuelos";
				$datos_plantilla["menu"] = "_menu_vuelo";
				$this->load->view('welcome_message', $datos_plantilla);
			}else{
				$this->load->model('vuelo');
				$obj = new Vuelo();			
				$obj->setOrigen($this->input->post('origen'));
				$obj->setDestino($this->input->post('destino'));
				$obj->setNPasajeros($this->input->post('npasajeros'));
				$obj->setFechaSalida($this->input->post('fechasalida'));
				$obj->setFechaLlegada($this->input->post('fechallegada'));
				$obj->setEstado(1);			
				$obj->save();
				$datos_plantilla["partial"] = "form_success";
				$datos_plantilla["menu"] = "_menu_vuelo";
				$this->load->view('welcome_message', $datos_plantilla);
			}
		}

		function editar($id=null)
		{
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->model('vuelo');
			$obj = new Vuelo();
			
			if(is_null($id)){								
				$this->form_validation->set_rules('origen', 'Origen', 'required|alpha');
				$this->form_validation->set_rules('destino', 'Destino', 'required|alpha');
				$this->form_validation->set_rules('npasajeros', 'Nº de Pasajeros', 'required|numeric');
				$this->form_validation->set_rules('fechasalida', 'Fecha y Hora de Salida', 'required');
				$this->form_validation->set_rules('fechallegada', 'Fecha y Hora de Llegada', 'required');
				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["partial"] = "_edit_vuelo";
					$datos_plantilla["menu"] = "_menu_vuelo";
					$this->load->view('welcome_message', $datos_plantilla);
				}else{
					$obj->setId($this->input->post('id'));
					$obj->setOrigen($this->input->post('origen'));
					$obj->setDestino($this->input->post('destino'));
					$obj->setNPasajeros($this->input->post('npasajeros'));
					$obj->setFechaSalida($this->input->post('fechasalida'));
					$obj->setFechaLlegada($this->input->post('fechallegada'));
					$obj->setEstado(1);			
					$obj->update();			
					$datos_plantilla["menu"] = "_menu_vuelo";
					$datos_plantilla["partial"] = "form_success";			
				}							
			}else{
				$datos_plantilla["vuelo"] = $obj->load($id);
				$datos_plantilla["menu"] = "_menu_vuelo";
				$datos_plantilla["partial"] = "_edit_vuelo";
						
			}
			$this->load->view('welcome_message', $datos_plantilla);	
		}

		function eliminar($id)
		{
			$this->load->helper('url');
			$this->load->model('vuelo');
			$obj = new Vuelo();

			$obj->setCedula($id);			
			$obj->delete();

			$datos_plantilla["partial"] = "form_success.php";
			$datos_plantilla["menu"] = "_menu_vuelo";
			$this->load->view('welcome_message', $datos_plantilla);
		}

		function get($id){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->model('pasajero');
			$obj = new Pasajero();
			$datos_plantilla["usuario"] = $obj->load($id);
			$datos_plantilla["partial"] = "_view_user";
			$datos_plantilla["menu"] = "_menu_vuelo";
			$this->load->view('welcome_message', $datos_plantilla);
		}

		function list_vuelo($id_vuelo = null){
			$this->load->helper('url');
			$this->load->model('vuelo');
			$obj = new Vuelo();			
			$datos_plantilla['vuelo'] = $obj->list_vuelo();
			$datos_plantilla["partial"] = "_list_vuelo";
			$datos_plantilla["menu"] = "_menu_vuelo";
			$this->load->view('welcome_message', $datos_plantilla);
			 
		}
}
?>