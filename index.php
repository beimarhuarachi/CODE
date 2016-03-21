<?php
session_start();
$invitado = true; // es invitado
$usuario;
if(isset($_SESSION['user'])){//existe usuario logeado
$invitado = false;  // no es invitado;
$usuario = $_SESSION['user'];
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
      <link href="css/styles.css" rel="stylesheet" media="screen">
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
               <li class="active"><a href="#">Inicio</a></li>
               <?php 
               if(!$invitado){
               if($_SESSION['rol']==2){?>
               <li ><a href="estudiante.php">Panel</a></li>
               <li ><a href="tarea.php">Tarea</a></li>
               <li ><a href="correo.php">Correo</a></li>
               <li ><a href="practicar.php">Practicar</a></li>
               <?php }
               else{?>
               <li ><a href="docente.php">Panel</a></li>
               <li ><a href="editor.php">Editor</a></li>
               <li ><a href="correo.php">Correo</a></li>
               <li ><a href="calificar.php">Calificar</a></li>
               <li ><a href="plusTarea.php">+Tarea</a></li>
               <?php }}?>
            </ul>
            <?php
            if($invitado){ ?>
            <ul class="nav navbar-nav navbar-right">
               <li><a  data-toggle="modal" data-target="#iniSesion" href="#">Iniciar Sesion</a></li>
               <li><a data-toggle="modal" data-target="#registro" href="#">Registro</a></li>
            </ul>
            <?php
            }else{
            echo '
            <ul class="nav navbar-nav navbar-right">
               <li><a  data-toggle="collapse" data-target="#collap_user" href="#">Usuario: '.$usuario.'</a></li>
               <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
            </ul>';
            }
            ?>
         </div>
      </nav>
      <!-- Modal -->
      <div class="modal fade" id="iniSesion" tabindex="-1" role="dialog" aria-labelledby="sesion">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form class="form-signin" method="POST" action="iniciarSesion.php">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="sesion">Iniciar Sesion</h4>
                  </div>
                  <div class="modal-body">
                     <label for="inputEmail" class="sr-only">Usuario</label>
                     <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Usuario" required autofocus>
                     <br><label for="inputPassword" class="sr-only">Contraseña</label>
                     <input type="password" id="inputPassword" name="passwd" class="form-control" placeholder="Contraseña" required>
                     <div class="checkbox">
                        <label>
                           <input type="checkbox" value="remember-me"> recordarme
                        </label>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                     <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="registro">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form class="form-register" method="POST" action="registro.php">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Registro</h4>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <label for="usr">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" id="usr" placeholder="Tu nombre">
                     </div>                     
                     <div class="form-group">
                        <label >Apellido(s):</label>
                        <input type="text" name="apellido" class="form-control" placeholder="Tu apellido">
                     </div>
                     <div class="form-group">
                        <label >Numero CI:</label>
                        <input type="text" name="ci" class="form-control" placeholder="Tu cº CI">
                     </div>                    
                     <div align="center">
                        <button type="submit" class="btn btn-success">Registrar</button>
                     </div>
                  </div>                  
               </form>
            </div>
         </div>
      </div>
      <div class="container">
      	<div class="row">
      		<div class="col-sm-6">
      			<br><br><br>
      			<img src="img/trees.svg">
      		</div>
      		<div class="col-sm-6">
      			<br><br><br>
      			<h1>CODE Trees</h1>
               <p>Es una aplicacion diseñada para complementar la formacion basica sobre estructuras de datos de tipo arbol, con un minino de conocimientos podras visualizar el comportamiento de estas estructuras de datos, aprender sobre los recorridos basicos sobre arboles y practicar.<br>Registrate y comienza a aprender</p>
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