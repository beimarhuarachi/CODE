<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CODE</title>

        <!-- ESTILOS DE BOOTSTRAP -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
        <link href="../css/stylesmenu.css" rel="stylesheet">

    </head>
    <body>
        <?php require_once 'inc/menu_navegacion.php'; ?>

        <div class="container">
                
              <div class="row">
                <div class="page-header">
                  <h1>CODE<small>  Asignar tarea</small></h1>
              </div>

              </div>
                
              <div class="row">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h3 class="panel-title">Nueva tarea</h3>
                      </div>
                      <div class="panel-body">
                          <form action="../controlador/asignarTareaController.php" method="POST" role="form">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Descripcion</label>
                                      <textarea name="descripcion" id="input" class="form-control" rows="3" required="required"></textarea>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="">Fecha limite</label>
                                      <input type="date" class="form-control" id="" name="fechalimite" placeholder="Input field">
                                  </div>


                              </div>  
                                
                              <div class="col-md-6">

                                  <div class="form-group">
                                      <label for="">Recorrido DFS</label>
                                      <input type="text" class="form-control"  name="recorridodfs" id="" placeholder="Input field">
                                  </div>

                                  <div class="form-group">
                                      <label for="">Recorrido BFS</label>
                                      <input type="text" class="form-control"  name="recorridobfs" id="" placeholder="Input field">
                                  </div>

                                  <div class="form-group">
                                      <label for="">Tipo</label>
                                      <!-- <select name="" id="input" class="form-control" required="required">
                                          <option value="">primero</option>
                                          <option value="">primero</option>
                                          <option value="">primero</option>
                                      </select> -->
                                        
                                      <select name="tipoEjercicio" id="idtipo" class="form-control">
                                            <?php
                                                require '../modelo/Tipo.php';

                                                $asignacion = new Tipo();

                                                $tipos = $asignacion->listaTipos();                                
                                                
                                            ?>

                                            

                                            <?php

                                                while ( $tipo = mysql_fetch_array($tipos)){

                                                      echo "<option value='".$tipo['tipoEjercicioID']."'> ". $tipo['tipo']."</option>";

                                                }

                                            ?></select>
                                  </div>

                                  
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

        <!-- INCLUCION DE BOOTSTRAP (REQUIERE DE JQUERY) -->
        <script src="../js/jquery-2.2.1.min.js"></script>
        <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>