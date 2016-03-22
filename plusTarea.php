<?php
session_start();
if(isset($_SESSION['user'])){//existe usuario logeado
$usuario = $_SESSION['user'];
}
else{
echo '<script>alert("Necesita iniciar sesion para acceder a esta pagina.");</script>';
echo '<script>window.location="index.php";</script>';
}
$arbol = $_POST['arbol'];
$dfs = $_POST['dfs'];
$bfs = $_POST['bfs'];
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
					<li ><a href="calificar.php">Calificar</a></li>
					<li class="active"><a href="plusTarea.php">+Tarea</a></li>
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
				<div>
					<div>
						<h3 >Nueva tarea</h3>
					</div>
					<div >
						<form action="crearTarea.php" method="POST" role="form">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Informacion Arbol</label>
									<textarea name="descripcion" id="input" name="arbol" class="form-control" rows="3" required="required" ><?php echo $arbol;  ?></textarea>
								</div>
								
								<div class="form-group">
									<label for="">Fecha limite</label>
									<input type="date" class="form-control" name="fechalimite" placeholder="Input field">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Recorrido DFS</label>
									<input type="text" class="form-control"  name="recorridodfs" placeholder="Input field" value="<?php echo $dfs;  ?>">
								</div>
								<div class="form-group">
									<label for="">Recorrido BFS</label>
									<input type="text" class="form-control"  name="recorridobfs" placeholder="Input field" value="<?php echo $bfs;  ?>">
								</div>
								<!--
								<div class="form-group">
										<label for="">Tipo</label>
										<select name="" id="input" class="form-control" required="required">
												<option value="">primero</option>
												<option value="">primero</option>
												<option value="">primero</option>
										</select>
								</div>
								-->
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</form>
					</div>
				</div>
			</div>			
			<div class="row">
				<h3>Lista de tareas</h3>
				<div class="list-group">
					<button type="button" class="list-group-item">tarea prueba 1</button>
					<button type="button" class="list-group-item">tarea prueba 2</button>
					<button type="button" class="list-group-item">tarea prueba 3</button>
				</div>
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