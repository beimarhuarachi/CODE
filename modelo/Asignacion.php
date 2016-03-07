<?php
require 'BDConeccion.php';

 /**
 *  Asigna tareas a los estudiantes
 */
 class Asignacion {

 	private $coneccion;

 	private $idtipo;
 	private $descripcion;
 	private $fecha;
 	private $arbol;
 	
 	function __construct($idtipo, $descripcion, $fecha, $arbol) {
 		$this->idtipo = $idtipo;
 		$this->descripcion = $descripcion;
 		$this->fecha = $fecha;
 		$this->arbol = $arbol;
 	}

 	public function agregarTarea() {
 		$this->coneccion = new BDConeccion();

 		$this->coneccion->conectar();

 		$texto = 'INSERT INTO ejercicio (Arbol, Descripcion, IdTipo, FechaLimite) VALUES ("'.$this->arbol.'","'.$this->descripcion.'",'.$this->idtipo.',"'.$this->fecha.'")';

 		$resultado = $this->coneccion->consulta('INSERT INTO ejercicio (Arbol, Descripcion, IdTipo, FechaLimite) VALUES ("'.$this->arbol.'","'.$this->descripcion.'",'.$this->idtipo.',"'.$this->fecha.'")');
 	}

 	public function listaTareas() {
 		$this->coneccion = new BDConeccion();

 		$this->coneccion->conectar();

 		$resultado = $this->coneccion->consulta("select * from ejercicio");

 		//$this->coneccion->disconnect();

 		return $resultado;
 	}
 }