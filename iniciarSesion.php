<?php
session_start();
include 'conexion.php';
if(isset($_POST['user'])) {
   $usuario = $_POST['user'];
   $pw = $_POST['passwd'];
   $log = mysql_query("SELECT * FROM Usuario WHERE nombre='$usuario' and ci='$pw'");
   if(mysql_num_rows($log)==0){
	   	echo '<script> alert("Usuario o contraseña incorrecto...");</script>';
	   	session_destroy();
   		echo '<script> window.location="index.php"; </script>';
   	}
   	else{
   		$_SESSION['user'] = $usuario;   		
   		$row = mysql_fetch_array($log);   		
   		$rol = $row['rol'];   		
   		switch ($rol) {   				    
		    case 1:
		    	$_SESSION['rol'] = 1;
		        echo '<script> alert("Usted es Docente");</script>';
		        echo '<script> window.location="docente.php"; </script>';
		        break;
		    case 2:
		    	$_SESSION['rol'] = 2;
		        echo '<script> alert("Usted es Estudiante");</script>';
		        echo '<script> window.location="estudiante.php"; </script>';
		        break;
		    break;
		}   		
   	}
	}
?>