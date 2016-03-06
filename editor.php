<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CODE</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="panel text-center">
					<button type="button" class="btn btn-default btn-md">
					<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Añadir
					</button><button type="button" class="btn btn-default btn-md">
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span> Bajar
					</button><button type="button" class="disabled btn btn-default btn-md">
					<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> Subir
					</button>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="contruir">
							<div class="col-sm-8">
								<div class="form-group">
									<label>Consola:</label>
									<div class="input-group">
										<input type="text" class="form-control" id="consola">
										<span class="input-group-btn">
											<button onkeypress="keyAddNodo(event)" onclick="addNodo()" type="button" class="btn btn-success btn-md">
											<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class="col-sm-4 btn-consola">
								<button onclick="delNodo()" type="button" class="btn btn-danger  btn-md">
								<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
								</button>
								<a class="btn btn-default  btn-md" href="#relacion" aria-controls="relacion" role="tab" data-toggle="tab">Relacion</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="relacion">
							<div class="col-sm-3">
								<div class="form-group">
									<label for="sel1">Nivel A-B:</label>
									<select class="form-control" id="nivelAB">
										<option selected>1-2</option>
										<option>2-3</option>
										<option>3-4</option>
										<option>4-5</option>
										<option>5-6</option>
										<option>6-7</option>
										<option>7-8</option>
										<option>8-9</option>
										<option>9-10</option>
									</select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>NodoA:</label>
									<input type="number" name="quantity" min="1" max="10" class="form-control" id="nodoA" value="1">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>NodoB:</label>
									<input type="number" name="quantity" min="1" max="10" class="form-control" id="nodoB" value="1">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="btn-consola">
									<button onkeypress="keyAddNodo(event)" onclick="addRelation()" type="button" class="btn btn-success btn-md">
									<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
									</button>
									<a class="btn btn-default  btn-md" href="#contruir" aria-controls="construir" role="tab" data-toggle="tab">Construir</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/events.js"></script>
	<script src="js/jquery-2.2.1.min.js"></script>
	<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>