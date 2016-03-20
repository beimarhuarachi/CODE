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

 	public function listarCalificaciones($idTarea) {
 		$this->coneccion = new BDConeccion();
 		$this->coneccion->conectar();
 		$resultado = $this->coneccion->consulta("select * from calificacion where id_ejercicio = ".$idTarea);
 		//$this->coneccion->disconnect();
 		return $resultado;
 	}

 	public function listarSoluciones($idTarea) {
 		$this->coneccion = new BDConeccion();
 		$this->coneccion->conectar();
 		$resultado = $this->coneccion->consulta("select * from solucion where id_tarea = ".$idTarea);
 		//$this->coneccion->disconnect();
 		return $resultado;
 	}

 	public function obtenerTarea($idTarea) {
 		$this->coneccion = new BDConeccion();

 		$this->coneccion->conectar();

 		$resultado = $this->coneccion->consulta("select * from ejercicio where id = ".$idTarea);

 		//$this->coneccion->disconnect();

 		return $resultado;
 	}

 	public function obtenerSolucion($id_solucion) {
 		$this->coneccion = new BDConeccion();

 		$this->coneccion->conectar();

 		$resultado = $this->coneccion->consulta("select * from solucion where id = ".$id_solucion);

 		//$this->coneccion->disconnect();

 		return $resultado;
 	}
}