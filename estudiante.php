<?php
session_start();
if(isset($_SESSION['user'])){//existe usuario logeado
$usuario = $_SESSION['user'];
}
else{
echo '<script>alert("Necesita iniciar sesion para acceder a esta pagina.");</script>';
echo '<script>window.location="index.php";</script>';
}
if($_SESSION['rol']==1){
   echo '<script>alert("No tiene los privilegios para acceder a esta pagina.");</script>';
   echo '<script>window.location="index.php";</script>';
}
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CODE</title>
      <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
      <link href="css/styles.css?update=12102006" rel="stylesheet" media="screen">
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
      <div class="container">
         <h1 class="text-center">Panel Estudiante</h1>
         <div class="row text-center">
            <div class="col-sm-4 tarea panel-box">
               <h2>TAREA</h2>
               <a href="listaTareas.php"><span class="big-icon glyphicon glyphicon-list-alt" aria-hidden="true"></span></a>
               <p>En esta seccion podras realizar las tareas que te asigna el docente.</p>
            </div>
            <div class="col-sm-4 correo panel-box">
               <h2>CORREO</h2>
               <a href="correo.php"><span class="big-icon glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
               <p>En esta seccion podras mandar y recibir mensajes del docente.</p>
            </div>
            <div class="col-sm-4 practicar panel-box">
               <h2>PRACTICAR</h2>
               <a href="practicar.php"><span class="big-icon glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
               <p>En esta seccion podras practicar con arboles generados por la aplicacion.</p>
            </div>
         </div>
      </div>
      <footer class="footer">
         <div class="container">
            <p class="text-muted">® CODE Cursos Online Docente Estudiantil</p>
         </div>
      </footer>
      <script src="js/jquery-2.2.1.min.js"></script>
      <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
   </body>
</html>