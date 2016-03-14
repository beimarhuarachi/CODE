<?php
session_start();
if(isset($_SESSION['user'])){//existe usuario logeado
$usuario = $_SESSION['user'];
}
else{
echo '<script>alert("Necesita iniciar sesion para acceder a esta pagina.");</script>';
echo '<script>window.location="index.php";</script>';
}
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
					<li><a href="index.php">Inicio</a></li>
					<li ><a href="docente.php">Panel</a></li>
					<li class="active"><a href="editor.php">Editor</a></li>
					<li ><a href="correo.php">Correo</a></li>
					<li ><a href="calificar.php">Calificar</a></li>
					<li ><a href="plusTarea.php">+Tarea</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a  data-toggle="collapse" data-target="#collap_user" href="#">Usuario:
					<?php echo ''.$usuario.''?></a></li>
					<li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-xs-8">
							<input type="number" value="0" id="nodoPadre">
						</div>
						<div class="col-xs-4">
							
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<button type="button" class="btn btn-default btn-md" onclick="crearNodo()">
					<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Añadir Nodo
					</button>
				</div>
				<div class="col-sm-4">
					<form action="plusTarea.php" method="POST" role="form">										
						<input class="hidden" type="text" id="arbol" name="arbol">											
						<input class="hidden" type="text" id="dfs" name="dfs">
						<input class="hidden" type="text" id="bfs" name="bfs">
						<button type="submit" class="btn btn-default btn-md" onclick="generar()">
					</form>
					
					<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Generar Tarea
					</button>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="text-center">
				<canvas id="myCanvas" width="732" height="500" style="border:1px solid #d3d3d3;">
				Your browser does not support the HTML5 canvas tag.</canvas>
			</div>
		</div>
		<div class="container">
			<div class="form-group">
				<label>Consola:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="consola">
					<span class="input-group-btn">
						<button onkeypress="keyAddNodo(event)" onclick="addArbol()" type="button" class="btn btn-success btn-md">
						<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
						</button>
					</span>
				</div>
			</div>
		</div><br>
		<footer class="footer">
			<div class="container">
				<p class="text-muted">® CODE Cursos Online Docente Estudiantil</p>
			</div>
		</footer>
		<script src="js/events.js?update=12102006"></script>
		<script src="js/jquery-2.2.1.min.js"></script>
		<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	</body>
</html>