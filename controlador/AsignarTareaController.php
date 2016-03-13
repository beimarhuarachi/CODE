<?php
	require '../modelo/Asignacion.php';


	$tipoEjercicio = $_POST['tipoEjercicio'];
	$descripcion = $_POST['descripcion'];

	$fecha = $_POST['fechalimite'];

	$recorridobfs = $_POST['recorridobfs'];
	$recorridodfs = $_POST['recorridodfs'];

	$asignacion = new Asignacion($tipoEjercicio, $descripcion, $fecha, $recorridobfs, $recorridodfs);
// 
	// echo $recorridodfs;
	// echo $recorridobfs;

	$asignacion->agregarTarea();

	header('Location: ../vista/asignacion_tareas.php');



