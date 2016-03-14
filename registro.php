<?php
session_start();
include "conexion.php";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$ci=$_POST['ci'];
$rol=2;
$tabla = 'usuario';
$_GRABAR_SQL = "INSERT INTO $tabla (id,nombre,apellido,ci,rol) VALUES ('','$nombre','$apellido','$ci','$rol')"; 
mysql_query($_GRABAR_SQL);
echo '<script> window.location="index.php"; </script>';
?>