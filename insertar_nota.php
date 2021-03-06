<?php
session_start();
if(isset($_SESSION['user'])){//existe usuario logeado
$usuario = $_SESSION['user'];
}
else{
echo '<script>alert("Necesita iniciar sesion para acceder a esta pagina.");</script>';
echo '<script>window.location="index.php";</script>';
}

$id;
if(isset($_GET["id"]) && isset($_GET["id"])) {
        $id_solucion = $_GET["id"];
        $id_tarea = $_GET["id_tarea"];
        $id_cal = $_GET["id_cal"];
 }


require 'modelo/Calificacion.php';

$calificacion = new Calificacion();

// $tarea = $calificacion->obtenerTarea($id_tarea);
// $solucion = $calificacion->obtenerSolucion($id_solucion);

$tarea = mysql_fetch_array($calificacion->obtenerTarea($id_tarea));
$solucion = mysql_fetch_array($calificacion->obtenerSolucion($id_solucion));

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
					<li ><a href="editor.php">Editor</a></li>
					<li ><a href="correo.php">Correo</a></li>
					<li class="active"><a href="calificar.php">Calificar</a></li>
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
			<div class="row">
				<div class="col-md-12">
					<h3>Respuesta Estudiante</h3>
					<h5>Recorrido DFS : <?php echo $solucion['rec_dfs'];?></h5> 
					<h5>Recorrido BFS : <?php echo $solucion['rec_bfs'];?></h5>
					
				</div>
				<div class="col-md-12">
					<h3>Respuesta Correcta</h3>
					<h5>Recorrido DFS : <?php echo $tarea['rec_dfs'];?></h5> 
					<h5>Recorrido BFS : <?php echo $tarea['rec_bfs'];?></h5> 
					
				</div>


				<div class="col-md-12">
					<h3>Insertar nota</h3>
					<form action="procesar_nota.php" method="POST" role="form">
						<input type="hidden" name="id_cal" class="form-control" value='<?php echo $id_cal;?>'>
						<div class="form-group">
							<label for="">Nota</label>
							<input type="number" max="10" min="0" class="form-control" name="nota" required>
						</div>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</form>
					
				</div>
			</div>

			<div class="row">
				
                                            
			</div>
		</div>
		
		
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

