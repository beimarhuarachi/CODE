<?php
session_start();
include "conexion.php";
$remitente=$_POST['remitente'];
$destinatario=$_POST['destinatario'];
$fecha=$_POST['fecha'];
$mensaje=$_POST['mensaje'];
$tabla = 'conversacion';
$_GRABAR_SQL = "INSERT INTO $tabla (id,id_estudiante,id_profesor,mensaje,fecha) 
			VALUES ('','$remitente','$destinatario','$mensaje','$fecha')"; 
mysql_query($_GRABAR_SQL);
echo '<script>alert("Mensaje enviado");</script>';
echo '<script> window.location="correo.php"; </script>';
?>