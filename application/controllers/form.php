<?php
class Form extends CI_Controller {
		
		function index()
		{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('cedula', 'Cedula_medico', 'required');
		$this->form_validation->set_rules('nombre', 'Nombre_medico', 'required');
		$this->form_validation->set_rules('email', 'Codigo_medico', 'required');

			if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('mi_form');
			}
			else
			{
			$this->editar();	
			$this->load->view('tekora');
			}
		}

		function agregar()
		{
			$this->load->helper('url');
			$this->load->model('modelo');
			$obj = new Modelo();

			$obj->setCedula($this->input->post('cedula'));
			$obj->setNombre($this->input->post('nombre'));
			$obj->setCodigo($this->input->post('codigo_medico'));

			$obj->agregar();

			$this->load->view('mi_form');
		}

		function editar()
		{
			$this->load->helper('url');
			$this->load->model('modelo');
			$obj = new Modelo();

			$obj->setCedula($this->input->post('cedula'));
			$obj->setNombre($this->input->post('nombre'));
			$obj->setCodigo($this->input->post('codigo_medico'));

			$obj->editar();

			$this->load->view('mi_form');
		}

		function eliminar()
		{
			$this->load->helper('url');
			$this->load->model('modelo');
			$obj = new Modelo();

			$obj->setCedula($this->input->post('cedula'));
			
			$obj->eliminar();

			$this->load->view('mi_form');
		}
}
?>