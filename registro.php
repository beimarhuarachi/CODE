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
$id_user = mysql_query("SELECT id FROM usuario WHERE nombre='$nombre'");
$id_user = mysql_result($id_user, 0);
$fecha_actual = date('Y-m-d');
$tabla = 'conversacion';
$_GRABAR_SQL = "INSERT INTO $tabla (id,id_estudiante,id_profesor,mensaje,fecha) 
			VALUES ('','$id_user','1','Bienvenido querido.. alumno por este medio podras escribirme todas las dudas que tengas.','$fecha_actual')"; 
mysql_query($_GRABAR_SQL);
echo '<script> window.location="index.php"; </script>';
?>