<?php
session_start();
include "conexion.php";
$arbol=$_POST['descripcion'];
$fechalimite=$_POST['fechalimite'];
$recorridodfs=$_POST['recorridodfs'];
$recorridobfs=$_POST['recorridobfs'];
$tabla = 'ejercicio';
$_GRABAR_SQL = "INSERT INTO $tabla (id,descripcion,arbol,rec_dfs,rec_bfs) 
			VALUES ('','$fechalimite','$arbol','$recorridodfs','$recorridobfs')"; 
mysql_query($_GRABAR_SQL);
echo '<script>alert("Nueva tarea creada");</script>';
echo '<script> window.location="docente.php"; </script>';
?>