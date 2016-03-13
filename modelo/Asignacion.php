<?php
require 'BDConeccion.php';

 /**
 *  Asigna tareas a los estudiantes
 */
 class Asignacion {

 	private $coneccion;

 	private $tipoEjercicio;
 	private $descripcion;
 	private $fecha;
 	private $recorridoBFS;
 	private $recorridoDFS;
 	
 	function __construct($tipoEjercicio, $descripcion, $fecha, $recorridoBFS, $recorridoDFS) {
 		$this->tipoEjercicio = $tipoEjercicio;
 		$this->descripcion = $descripcion;
 		$this->fecha = $fecha;
 		$this->recorridoBFS = $recorridoBFS;
 		$this->recorridoDFS = $recorridoDFS;
 	}

 	public function agregarTarea() {
 		$this->coneccion = new BDConeccion();

 		$this->coneccion->conectar();

 		//$texto = 'INSERT INTO ejercicio (descripcion, recorridoBFS, recorridoDFS, tipoEjercicio) VALUES ("'.$this->arbol.'","'.$this->descripcion.'",'.$this->idtipo.',"'.$this->fecha.'")';

 		$resultado = $this->coneccion->consulta('INSERT INTO ejercicio (descripcion, recorridoBFS, recorridoDFS, tipoEjercicio) VALUES ("'.$this->descripcion.'","'.$this->recorridoBFS.'","'.$this->recorridoDFS.'",'.$this->tipoEjercicio.')');
 	}

 	public function listaTareas() {
 		$this->coneccion = new BDConeccion();

 		$this->coneccion->conectar();

 		$resultado = $this->coneccion->consulta("select * from ejercicio");

 		//$this->coneccion->disconnect();

 		return $resultado;
 	}
 }