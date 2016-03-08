<?php 
require 'BDConeccion.php';

/**
* 	
*/
class Tipo
{
	
	function __construct() {
		
	}

	public function listaTipos() {
 		$this->coneccion = new BDConeccion();

 		$this->coneccion->conectar();

 		$resultado = $this->coneccion->consulta("select * from tipoejercicio");

 		//$this->coneccion->disconnect();

 		return $resultado;
 	}
}