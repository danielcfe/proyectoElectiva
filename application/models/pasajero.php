<?php
	class Pasajero extends CI_Model
	{
		var $email = "";
		var $pass = "";
		var $cedula = "";
		var $nombre = "";
		var $edad = "";
		var $date = "";

	    function __construct()
	    {
	    	parent::__construct();
	    }

	    public function setCedula($cedula)
	    {
	    	$this->cedula = $cedula;
	    }


	    public function setNombre($nombre)
	    {
	    	$this->nombre = $nombre;
	    }


	    public function setEdad($edad)
	    {
	    	$this->edad = $edad;
	    }

	    public function setEmail($email)
	    {
	    	$this->email = $email;
	    }	    


	    public function setPass($pass)
	    {
	    	$this->pass = $pass;
	    }	



	    public function getCedula()
	    {
	    	return $this->cedula;
	    }

	    public function getNombre()
	    {
	    	return $this->nombre;
	    }

	    public function getEdad()
	    {
	    	return $this->edad;
	    }

	    public function getEmail()
	    {
	    	return $this->email;
	    }	    

	    public function getPass()
	    {
	    	return $this->pass;
	    }	 

	    public function save()
	    {
	    	$data = array('cedula' => $this->cedula, 'nombre' => $this->nombre, 'edad' => $this->edad,
	    		'email' => $this->email, 'pass' => $this->pass);

	    	return $this->db->insert('pasajero',$data);
	    }

	    public function update()
	    {
	    	$data = array('cedula' => $this->cedula, 'nombre' => $this->nombre, 'edad' => $this->edad,
	    		'email' => $this->email, 'pass' => $this->pass);

	    	//$where = "cedula =".$this->cedula;	
			$this->db->where('cedula',$this->cedula);
	    	return $this->db->update('pasajero', $data);
	    }


	    public function delete()
	    {
	    	return	$this->db->delete('pasajero', array('cedula' => $this->cedula));
	    }

		public function load($id){
			
			$this->db->select('cedula, email, nombre, edad, pass');
			$this->db->from('pasajero');
			$this->db->where('cedula',$id);
			$query = $this->db->get();
			return $query->result_array();
		}

	    public function list_user(){
			$query = $this->db->get('pasajero');
			return $query->result_array();
		}

		public function login(){
			$this->db->select('email,pass');
			$this->db->from('pasajero');
			$this->db->where('email', $this->email);
			$this->db->where('pass', $this->pass);
			$query = $this->db->get();
			return $query->result_array();
		}

	}
?>