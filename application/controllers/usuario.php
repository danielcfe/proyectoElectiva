<?php
class usuario extends CI_Controller {
		
		function index()
		{


		//	$datos_plantilla["partial"] = "mi_form";
		//	$datos_plantilla["dato2"] = "Otro dato simple tipo cadena";
		//	$datos_plantilla["form"] = $this->load->view('mi_form', 'dsad', true);
		//	$datos_plantilla["dato4"] = $this->load->view('vista_lateral', $datos_para_vista_lateral, true);
		//	$this->load->view('welcome_message', $datos_plantilla);
			$this->list_user();
		}

		function nuevo()
		{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cedula', 'Cedula', 'required');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');


	//	var_dump($this->input->get());

			if ($this->form_validation->run() == FALSE)
			{
				$datos_plantilla["partial"] = "mi_form";
				$datos_plantilla["menu"] = "_menu_user";
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
			$this->form_validation->set_rules('cedula', 'Cedula', 'required');
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('edad', 'edad', 'required');
			$this->form_validation->set_rules('pass', 'pass', 'required');

		if ($this->form_validation->run() == FALSE){
				$datos_plantilla["partial"] = "mi_form";
				$datos_plantilla["menu"] = "_menu_user";
				$this->load->view('welcome_message', $datos_plantilla);
			}else{
				$this->load->model('pasajero');
				$obj = new Pasajero();			
				$obj->setCedula($this->input->post('cedula'));
				$obj->setNombre($this->input->post('nombre'));
				$obj->setEmail($this->input->post('email'));
				$obj->setEdad($this->input->post('edad'));
				$obj->setPass($this->input->post('pass'));				
				$obj->save();
				$datos_plantilla["partial"] = "form_success";
				$this->load->view('welcome_message', $datos_plantilla);
			}


		}

		function editar($id=null)
		{
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->model('pasajero');
			$obj = new Pasajero();

			if(is_null($id)){								
				$this->form_validation->set_rules('nombre', 'Nombre', 'required');
				$this->form_validation->set_rules('email', 'email', 'required');
				$this->form_validation->set_rules('edad', 'edad', 'required');
				$this->form_validation->set_rules('pass', 'pass', 'required');
				if ($this->form_validation->run() == FALSE){
					$datos_plantilla["partial"] = "mi_form";
					$datos_plantilla["menu"] = "_menu_user";
					$this->load->view('welcome_message', $datos_plantilla);
				}else{
					$obj->setCedula($this->input->post('cedula'));
					$obj->setNombre($this->input->post('nombre'));
					$obj->setEmail($this->input->post('email'));
					$obj->setEdad($this->input->post('edad'));
					$obj->setPass($this->input->post('pass'));	
					$obj->update();		
					$datos_plantilla["menu"] = "_menu_user";	
					$datos_plantilla["partial"] = "form_success";			
				}							
			}else{
				$datos_plantilla["usuario"] = $obj->load($id);
				$datos_plantilla["menu"] = "_menu_user";
				$datos_plantilla["partial"] = "_edit_user";
						
			}
			$this->load->view('welcome_message', $datos_plantilla);	
		}

		function eliminar($id)
		{
			$this->load->helper('url');
			$this->load->model('pasajero');
			$obj = new Pasajero();

			$obj->setCedula($id);			
			$obj->delete();

			$datos_plantilla["partial"] = "form_success.php";
			$datos_plantilla["menu"] = "_menu_user";
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
			$datos_plantilla["menu"] = "_menu_user";
			$this->load->view('welcome_message', $datos_plantilla);
		}

		function list_user($id_user= null){
			$this->load->helper('url');
			$this->load->model('pasajero');
			$obj = new Pasajero();			
			$datos_plantilla['usuarios'] = $obj->list_user();
			$datos_plantilla["partial"] = "_list_user";
			$datos_plantilla["menu"] = "_menu_user";
		/*	$this->load->view('welcome_message', $datos_plantilla);*/
			var_dump($this->session->userdata('email'));
		}

		function logeo(){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('pasajero');
			$obj = new Pasajero();
			$obj->setEmail($this->input->post('email'));
			$obj->setPass($this->input->post('pass'));

			$this->form_validation->set_rules('email', 'email_usuario', 'required');
			/*$this->form_validation->set_rules('pass', 'pass_usuario', 'required');*/
			$datos_plantilla['user'] = $obj->login();

			
			if (empty($datos_plantilla['user'])) {
				$email = null;
			}else{
			$email = $datos_plantilla['user'][0]['email'];}
			
			$this->session->set_userdata($datos_plantilla['user'][0]);
			/*var_dump($this->session->userdata('session_id'));*/

			if ($email == null)
            {
              //echo "Disculpe pero El email o la contraseña son erroneas";
              $datos_plantilla['error'] = 'Disculpe pero el email o la contraseña con incorrectas';
              $datos_plantilla["partial"] = "form_success"; 
              $datos_plantilla["menu"] = "_menu_user";
              $datos_plantilla["logeo"] = "_login";
			  $this->load->view('welcome_message', $datos_plantilla);   
            }
            else
            {
              $datos_plantilla["partial"] = "form_success";
              $datos_plantilla["menu"] = "_menu_user";
              $datos_plantilla["logeo"] = "_login_open";
			  $this->load->view('welcome_message', $datos_plantilla);             	
            } 

			/*	if ($this->form_validation->run() == FALSE){
					$datos_plantilla["partial"] = "form_success";
					$this->load->view('welcome_message', $datos_plantilla);
				}else{
					return true;
				}
			*/
		}
}
?>