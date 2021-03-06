
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Acciones</a>
    </div>
    <button class="btn btn-danger navbar-btn" onclick="location.href='index.php'">Volver</button> 
  </div>
  </nav>
<body>

	<div class="container">
		<h2></h2>

	<form action="proceso.php" method="post">
    <div class="form-group">
     
	<div class="form-group">
		<label for="tipo">Tipo:</label>
	  		<select type="text" name="tipo" class="form-control">
			<option value="Accion de mejora">Accion de mejora</option> 
			<option value="Observacion">Observacion</option> 
			<option value="Oportunidad de mejora">Oportunidad de mejora</option>
			<option value="No conformidad">No conformidad</option> 
			</select>
    </div>
	
    <div class="form-group">
		<label for="origen">Origen:</label>
			<select type="text" name="origen" class="form-control">
			<option value="Auditoria interna">Auditoria interna</option> 
			<option value="Desvio">Desvio</option> 
			<option value="Propuesta">Propuesta</option>
			<option value="Reclamo de clientes">Reclamo de clientes</option> 
			<option value="Encuestas">Encuestas</option>
			</select>
    </div>

	    <div class="form-group">
		<label for="area">Area:</label>
		<input type="text" class="form-control" name="area" placeholder="Ingresa area">
    </div>
	
	<div class="form-group">
		<label for="proceso">Proceso:</label>
		<input type="text" class="form-control" name="proceso" placeholder="Ingresa proceso">
    </div>
	
    <div class="form-group">
		<label for="titulo">Titulo:</label>
		<input type="text" class="form-control" name="titulo" placeholder="Ingresa titulo">
    </div>
	
	<div class="form-group">
		<label for="descripcion">Descripcion:</label>
		<textarea type="text" class="form-control" name="descripcion" placeholder="Ingresa descripcion" cols="50" rows="7"></textarea>
    </div>
	
	<div class="form-group">
		<label for="objetivo">Objetivo:</label>
		<textarea type="text" class="form-control" name="objetivo" placeholder="Ingresa objetivo"></textarea>
    </div>
	
	<div class="form-group">
		<label for="observacion">Observacion:</label>
		<textarea type="text" class="form-control" name="observacion" placeholder="Ingresa observacion"></textarea>
    </div>
	
	<div class="form-group">
		<label for="estado">Estado:</label>
	  		<select type="text" name="estado" class="form-control">
			<option value="Abierta">Abierta</option> 
			<option value="Presentada">Presentada</option> 
			<option value="Cerrada">Cerrada</option>
			</select>
    </div>
	
	<div class="form-group">
		<label for="subestado">Subestado:</label>
	  		<select type="text" name="subestado" class="form-control">
			<option value="Aprobada">Aprobada</option> 
			<option value="En ejecucion">En ejecucion</option> 
			<option value="En estudio">En estudio</option>
			<option value="Implementada">Implementada</option> 
			<option value="Rechazada">Rechazada</option> 
			<option value="Exitosa">Exitosa</option>
			<option value="Sin exito">Sin exito</option>			
			</select>
    </div>	
	
	<div class="form-group">
		<label for="archivo_adjunto">Archivo adjunto:</label>
		<input type="file" name="adjunto" />
	</div>
	
	<div class="form-group">
			<label for="fecha_validacion">Fecha de validacion:</label>
			<input type="date">
	</div>
		
	<div class="form-group">
	    <button type="submit" class="btn btn-default">Cargar accion</button>
  	</div>
	
</form>
	
</body> 
</html>