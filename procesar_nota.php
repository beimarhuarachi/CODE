<?php
require_once 'conexion.php';

$id_cal = $_POST['id_cal'];
	$nota = $_POST['nota'];

//echo $id_cal;
$sql = "update calificacion set nota = '".$nota."' where id=".$id_cal;

mysql_query($sql);
echo "<script> alert('kjfklasjkldfj');</script>";
header('Location: calificar.php');