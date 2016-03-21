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
               <li ><a href="listaTareas.php">Tarea</a></li>
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
         <h1 class="text-center">Correo</h1>   
          
         <?php
         include 'conexion.php';
         $lista_msj;
         if($_SESSION['rol']==2){
         $id_user = mysql_query("SELECT id FROM Usuario WHERE nombre='$usuario'");
         $id_user = mysql_result($id_user, 0);
         $lista_msj = mysql_query("SELECT id_estudiante, id_profesor, mensaje, fecha FROM conversacion WHERE id_estudiante='$id_user'");
         }
         else{
         $lista_msj = mysql_query("SELECT id, id_estudiante, id_profesor, mensaje, fecha FROM conversacion ORDER BY fecha DESC");
         }
         if(mysql_num_rows($lista_msj) > 0){
         while ($fila = mysql_fetch_assoc($lista_msj)){
         $id_user1= $fila['id_profesor'];
         $id_user2= $fila['id_estudiante'];
         $user1 = mysql_query("SELECT nombre FROM usuario WHERE id='$id_user1'");
         $user2 = mysql_query("SELECT nombre FROM usuario WHERE id='$id_user2'");
         $user1 = mysql_result($user1, 0);
         $user2 = mysql_result($user2, 0);
         $mensaje = $fila['mensaje'];
         $fecha = $fila['fecha'];
         $fecha_actual = date('Y-m-d');
         echo '<div class="row mensaje">
            <div class="col-sm-4">
               <h4>Docente: '.$user1.'</h4>
            </div>
            <div class="col-sm-4">
               <h4>Estudiante: '.$user2.'</h4>
            </div>
            <div class="col-sm-4">
               <h4>Fecha: '.$fecha.'</h4>
            </div>
            <div class="row">
               <p class="texto-mensaje">'.$mensaje.'</p>
            </div>
            <div class="row">
               <p class="texto-mensaje"><a href="mensaje.php?id_estudiante='.$id_user2.'&id_profesor='.$id_user1.'&fechaActual='.$fecha_actual.'&estudiante='.$user2.'&profesor='.$user1.'">Responder</a></p>
            </div>
         </div>
         ';
         }
         }
         else{
         echo '<h4 class="text-center">No tienes ningun mensaje nuevo</h4>';
         }
         ?>
         
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