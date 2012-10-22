<?php
	class Reserva extends CI_model
	{
		var $id = "";
		var $cedula = "";
		var $npuesto = "";
		var $fechareserva = "";

		function __construct()
	    {
	    	parent::__construct();
	    }

		public function setId($id)
	    {
	    	$this->id = $id;
	    }
	    public function setCedula($cedula)
	    {
	    	$this->cedula = $cedula;
	    }
	    public function setNpuesto($npuesto)
	    {
	    	$this->npuesto = $npuesto;
	    }
	    public function setFechareserva($fechareserva)
	    {
	    	$this->fechareserva = $fechareserva;
	    }

	    public function getId()
	    {
	    	return $this->id;
	    }

	    public function getCedula()
	    {
	    	return $this->cedula;
	    }

	    public function getNpuesto()
	    {
	    	return $this->npuesto;
	    }
	    public function getFechareserva()
	    {
	    	return $this->fechareserva;
	    }

	    public function agregar()
	    {
	    	$data = array('id_vuelo' => $this->id, 'cedula' => $this->cedula, 'npuesto' => $this->npuesto, 'fecha' => $this->fecha_reserva);

	    	return $this->db->insert('reserva',$data);
	    }

	    public function editar()
	    {
	    	$data = array('id_vuelo' => $this->id, 'cedula' => $this->cedula, 'npuesto' => $this->npuesto,
	    		'fecha' => $this->fecha_reserva);

	    	//$where = "cedula =".$this->cedula;	
			$this->db->where('id_vuelo',$this->id);
			$this->db->where('cedula',$this->cedula);
	    	return $this->db->update('reserva', $data);
	    }


	    public function eliminar()
	    {
	    	return	$this->db->delete('reserva', array('id_vuelo' => $this->id));
	    }

		public function cargar_reserva($id){
			
			$this->db->select('id_vuelo, cedula, npuesto, fecha');
			$this->db->from('reserva');
			$this->db->where('cedula',$id);
			$query = $this->db->get();
			return $query->result_array();
		}

	    public function listar_reserva(){
			$query = $this->db->get('reserva');
			return $query->result_array();
		}

	}
?>