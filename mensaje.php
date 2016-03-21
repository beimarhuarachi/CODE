<?php
session_start();
if(isset($_SESSION['user']) && isset($_GET['estudiante'])){//existe usuario logeado
$usuario = $_SESSION['user'];
}
else{
echo '<script>alert("Necesita iniciar sesion para acceder a esta pagina.");</script>';
echo '<script>window.location="index.php";</script>';
}
$id_estudiante = $_GET["id_estudiante"];
$id_profesor = $_GET["id_profesor"];
$estudiante = $_GET["estudiante"];
$profesor = $_GET["profesor"]; // este es el id, se necesita el nombre deacuerdo al id
$fecha = $_GET["fechaActual"];
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
               <?php if($_SESSION['rol']==2){?>
               <li ><a href="estudiante.php">Panel</a></li>
               <li ><a href="tarea.php">Tarea</a></li>
               <li class="active"><a href="correo.php">Correo</a></li>
               <li ><a href="practicar.php">Practicar</a></li>
               <?php }
               else{?>
               <li ><a href="docente.php">Panel</a></li>
               <li ><a href="editor.php">Editor</a></li>
               <li class="active"><a href="correo.php">Correo</a></li>
               <li ><a href="calificar.php">Calificar</a></li>
               <li ><a href="plusTarea.php">+Tarea</a></li>
               <?php }?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a  data-toggle="collapse" data-target="#collap_user" href="#">Usuario:
               <?php echo $usuario?></a></li>
               <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
            </ul>
         </div>
      </nav>
      <div class="container">
         <h3>Responder:</h3>
         <form class="form-horizontal" role="form" method="post" action="enviar_mensaje.php">
            <div class="form-group">
               <label for="name" class="col-sm-2 control-label">Profesor</label>
               <label for="name"  class="col-sm-2 control-label"><?php echo $profesor; ?></label>
               <input class="hidden" type="text" name="destinatario" value="<?php echo $id_profesor;?>" >
            </div>
            <div class="form-group">
               <label for="name" class="col-sm-2 control-label">Estudiante</label>
               <label for="name"  class="col-sm-2 control-label"><?php echo $estudiante; ?></label>
               <input class="hidden" type="text" name="remitente" value="<?php echo $id_estudiante;?>" >
            </div>
            
            <div class="form-group hidden">
               <label for="">Fecha limite</label>
               <input type="date" class="form-control" value="<?php echo $fecha; ?>" name="fecha" placeholder="Input field">
            </div>
            <div class="form-group">
               <label for="message" class="col-sm-2 control-label">Mensaje</label>
               <div class="col-sm-10">
                  <textarea class="form-control" rows="4" name="mensaje"></textarea>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-10 col-sm-offset-2">
                  <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-10 col-sm-offset-2">
                  <! Will be used to display an alert to the user>
               </div>
            </div>
         </form>
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