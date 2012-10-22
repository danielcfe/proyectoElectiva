<?php
	class Vuelo extends CI_Model
	{
		var $id = "";
		var $origen = "";
		var $destino = "";
		var $NPasajeros = "";
		var $fechaSalida = "";
		var $fechaLlegada = "";
		var $Estado = "";

	    function __construct()
	    {
	    	parent::__construct();
	    }

	    public function setId($id)
	    {
	    	$this->id = $id;
	    }
	    public function setOrigen($origen)
	    {
	    	$this->origen = $origen;
	    }
	    public function setDestino($destino)
	    {
	    	$this->destino = $destino;
	    }
	    public function setNPasajeros($nPasajeros)
	    {
	    	$this->nPasajeros = $nPasajeros;
	    }
	    public function setFechasalida($fechaSalida)
	    {
	    	$this->fechaSalida = $fechaSalida;
	    }
	    public function setFechaLlegada($fechaLlegada)
	    {
	    	$this->fechaLlegada = $fechaLlegada;
	    }
	    public function setEstado($Estado)
	    {
	    	$this->Estado = $Estado;
	    }

	    public function getId()
	    {
	    	return $this->id;
	    }

	    public function getOrigen()
	    {
	    	return $this->origen;
	    }

	    public function getDestino()
	    {
	    	return $this->destino;
	    }
	    public function getNPasajeros()
	    {
	    	return $this->nPasajeros;
	    }
	    public function getFechaSalida()
	    {
	    	return $this->fechaSalida;
	    }
	    public function getFechaLlegada()
	    {
	    	return $this->fechaLlegada;
	    }	  
	    public function getEstado(){
	    	return $this->Estado;
	    }

/*
	function loginUser($user, $pass){
		global $_CONFIG;
		$return = false;
		$conect = bd();
		$query = "SELECT id ,empresa as nombre,activo as status,codigo as 'codigoempresa',id_album_gen as 'catPrin', galeria_acept as polities FROM ".$_CONFIG['bd']['bdnombre3'].".clientes where login = ? AND password = ? ";
		$stmt = $conect->prepare($query);
		$stmt->bind_param('ss',$user,$pass);
		$row = array();
		if ($stmt->execute()){
			$result = $stmt->get_result();
			 while ($row = $result->fetch_array(MYSQLI_ASSOC)){
			 	$return = true;
		 		foreach ($row as $field => $value)
		 		{
			 		$this->$field = $row[$field];
		 		}
			 }
			 $this->loadSession(); 
		}
		$stmt->close();
		$conect->close();
		return $return;
	}
*/

		public function load($id){
			$this->db->select('id_vuelo,origen,destino,npasajeros,fecha_salida,fecha_llegada');
			$this->db->from('vuelo');
			$this->db->where('id_vuelo',$id);
			$query = $this->db->get();
			return $query->result_array();
		}

	    public function save()
	    {
	    	$data = array('id_vuelo' => $this->id, 'origen' => $this->origen, 'destino' => $this->destino,
	    		'npasajeros' => $this->nPasajeros, 'fecha_salida' => $this->fechaSalida,
	    		'fecha_llegada' => $this->fechaLlegada,	'estado' => $this->Estado);

	    	$this->db->insert('vuelo',$data);
	    }

	    public function update()
	    {

	    	$data = array('id_vuelo' => $this->id, 'origen' => $this->origen, 'destino' => $this->destino,
	    		'npasajeros' => $this->nPasajeros, 'fecha_salida' => $this->fechaSalida,
	    		'fecha_llegada' => $this->fechaLlegada,'estado' => $this->Estado);

	    	$where = "id_vuelo =".$this->id;	

	    	$this->db->update('vuelo', $data, $where);
	    }


	    public function delete()
	    {

	    	$this->db->delete('vuelo', array('id_vuelo' => $this->id));
	    }

	    public function list_vuelo(){
			$query = $this->db->get('vuelo');
			return $query->result_array();
		}

	}
?>