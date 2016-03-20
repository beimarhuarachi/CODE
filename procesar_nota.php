<?php
require_once 'conexion.php';

$id_cal = $_POST['id_cal'];
	$nota = $_POST['nota'];

$sql = "update calificacion set nota = '".$nota."' where id=".$id_cal;

mysql_query($sql);

header('Location: calificar.php');