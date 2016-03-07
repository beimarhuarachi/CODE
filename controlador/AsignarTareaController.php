<?php
	require '../modelo/Asignacion.php';


	$idtipo = $_POST['idtipo'];
	$descripcion = $_POST['descripcion'];
	$fecha = $_POST['fechalimite'];
	$arbol = $_POST['arbol'];


	$asignacion = new Asignacion($idtipo, $descripcion, $fecha, $arbol);

	$asignacion->agregarTarea();

	header('Location: ../vista/asignacion_tareas.php');



