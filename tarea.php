<?php
session_start();
if(isset($_SESSION['user'])){//existe usuario logeado
$usuario = $_SESSION['user'];
}
else{
echo '<script>alert("Necesita iniciar sesion para acceder a esta pagina.");</script>';
echo '<script>window.location="index.php";</script>';
}

require_once 'conexion.php';
$cadenaArbol = $_GET['arbol'];
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CODE</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/styles.css?update=12102006">
		
	</head>
	<body>
		<nav role="navigation" class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">CODE</a>
			</div>
			<!-- Collection of nav links and other content for toggling -->
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li ><a href="index.php">Inicio</a></li>               
					<li class="active"><a href="estudiante.php">Panel</a></li>
					<li ><a href="listaTareas.php">Tarea</a></li>
					<li ><a href="correo.php">Correo</a></li>
					<li ><a href="practicar.php">Practicar</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a  data-toggle="collapse" data-target="#collap_user" href="#">Usuario:
					<?php echo ''.$usuario.''?></a></li>
					<li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-7">
					<canvas id="myCanvas" width="732" height="500" style="border:1px solid #d3d3d3;">
					Your browser does not support the HTML5 canvas tag.</canvas>
				</div>
				<div class="col-sm-5">
					<form action="enviarTarea.php" method="POST" role="form">
						<div class="form-group">
							<?php echo '<input name="arbol" type="text" style="display:none" class="form-control" id="consola" value="'.$cadenaArbol.'">' ?>
							<label>Respuesta DFS:</label>
							<input name="dfs" type="text" class="form-control" id="consola">
							<label>Respuesta BFS:</label>
							<input name="bfs" type="text" class="form-control" id="consola">
						</div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<p class="text-muted">® CODE Cursos Online Docente Estudiantil</p>
			</div>
		</footer>
		<script src="js/events.js?update=12102006"></script>
		<script type="text/javascript">
			addArbol();
		</script>
		<script src="js/jquery-2.2.1.min.js"></script>
		<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	</body>
</html>