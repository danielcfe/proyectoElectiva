<?php
	class Modelo extends CI_Model
	{
		var $cedula = "";
		var $nombre = "";
		var $codigo = "";

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


	    public function setCodigo($codigo)
	    {
	    	$this->codigo = $codigo;
	    }

	    public function getCedula()
	    {
	    	return $this->cedula;
	    }

	    public function getNombre()
	    {
	    	return $this->nombre;
	    }

	    public function getCodigo()
	    {
	    	return $this->codigo;
	    }

	    public function agregar ()
	    {
	    	$data = array('cedula' => $this->cedula, 'nombre' => $this->nombre, 'cod_medico' => $this->codigo);

	    	$this->db->insert('medico',$data);
	    }

	    public function editar ()
	    {
	    	$data = array('cedula' => $this->cedula, 'nombre' => $this->nombre, 'cod_medico' => $this->codigo);

	    	$where = "cedula =".$this->cedula;	

	    	$this->db->update('medico', $data, $where);
	    }


	    public function eliminar ()
	    {
	    	$this->db->delete('medico', array('cedula' => $this->cedula));
	    }

	}
?>