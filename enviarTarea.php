<?php
session_start();
if(isset($_SESSION['user'])){//existe usuario logeado
	$usuario = $_SESSION['user'];
}
require 'modelo/Tareas.php';
$arbol=$_POST['arbol'];
$dfs=$_POST['dfs'];
$bfs=$_POST['bfs'];
$tarea1 = new Tareas();
$tareas = $tarea1->presentarSolucion($usuario, $arbol, $dfs, $bfs);
echo '<script>alert("tarea enviada con exito");</script>';
echo '<script> window.location="listaTareas.php"; </script>';
?>