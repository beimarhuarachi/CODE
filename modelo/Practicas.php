<?php 
require 'BDConeccion.php';

/**
* 	
*/
class Tareas
{
	
	function __construct() {
		
	}

	public function listaTareas($usuario) {
 		$this->coneccion = new BDConeccion();

 		$this->coneccion->conectar();
 		$resultado = $this->coneccion->consulta("SELECT * FROM practica");
 		//$this->coneccion->disconnect();
 		return $resultado;
 	}
 	/*
 	public function presentarSolucion($usuario, $arbol, $dfs, $bfs) {
 		$this->coneccion = new BDConeccion();
 		$this->coneccion->conectar();
 		$idUsuario = $this->coneccion->consulta("SELECT id from usuario where nombre = '".$usuario."'");
 		while ($ids = mysql_fetch_array($idUsuario)) {
			$id = $ids['id'];
		}
		$idTarea = $this->coneccion->consulta("SELECT id from ejercicio where arbol = '".$arbol."'");
 		while ($ids = mysql_fetch_array($idTarea)) {
			$idT = $ids['id'];
		}
		$query = "INSERT INTO `solucion`(`id_tarea`, `id_usuario`, `rec_dfs`, `rec_bfs`) VALUES (".$idT.",".$id.",'".$dfs."','".$bfs."')";
		//echo $query;
 		$resultado = $this->coneccion->consulta($query);
 		$query = "SELECT `id` FROM `solucion` WHERE id_usuario = ".$id." AND id_tarea = '".$idT."'";
 		$resultado = $this->coneccion->consulta($query);
 		while ($ids = mysql_fetch_array($resultado)) {
			$idSolucion = $ids['id'];
		}
 		$this->agregarRegistroNota($id, null, $idT, $idSolucion);
 	}*/
}


