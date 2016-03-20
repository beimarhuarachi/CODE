<?php 
require 'BDConeccion.php';

/**
* 	
*/
class Calificacion
{
	
	function __construct() {
		
	}

	public function listaTareas() {
 		$this->coneccion = new BDConeccion();

 		$this->coneccion->conectar();

 		$resultado = $this->coneccion->consulta("select * from ejercicio");

 		//$this->coneccion->disconnect();

 		return $resultado;
 	}
}