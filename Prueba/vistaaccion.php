<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'Prome2017'; // Password
$db_name = 'sam'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT id, titulo, tipo, origen, area, proceso, descripcion, objetivo, 
		observacion, estado, subestado, fecha_validacion FROM accionesdemejora WHERE id=56';

		
$query = mysqli_query($conn, $sql);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}


?>

<html lang="en">
<head>
  <title>ACCION N</title>
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
      <a class="navbar-brand" href="#">ACCION</a>
    </div>
    <td><button class="btn btn-danger navbar-btn" onclick="location.href='principal.php'">Volver</button></td> 
	<td><button class="btn btn-danger navbar-btn" onclick="location.href='movimientos.php'">Cargar Movimiento</button></td>
  </div>
</nav>


		
<div class="form-group">
		
		<label for="tipo">Tipo:</label>		

<?php
		
		
		if ($row = mysqli_fetch_array($query))
		{
			echo '<td>'.$row['tipo'].'</td>';
		}
?>
			
</div>
	
    <div class="form-group">
		<label for="origen">Origen:</label>

<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<td>'.$row['origen'].'</td>';
		}
?>
		
		
    </div>

	
	
	
	    <div class="form-group">
		<label for="area">Area:</label>
    </div>
	
	<div class="form-group">
		<label for="proceso">Proceso:</label>
    </div>
	
    <div class="form-group">
		<label for="titulo">Titulo:</label>
			
    </div>
	
	<div class="form-group">
		<label for="descripcion">Descripcion:</label>
  
<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<td>'.$row['descripcion'].'</td>';
		}
?>



  </div>
	
	<div class="form-group">
		<label for="objetivo">Objetivo:</label>

    </div>
	
	<div class="form-group">
		<label for="observacion">Observacion:</label>
    </div>
	
	<div class="form-group">
		<label for="estado">Estado:</label>
    </div>
	
	<div class="form-group">
		<label for="subestado">Subestado:</label>
    </div>	
	
	<div class="form-group">
		<label for="archivo_adjunto">Archivo adjunto:</label>
	</div>
	
	<div class="form-group">
			<label for="fecha_validacion">Fecha de validacion:</label>
	</div>
	
	   </div>

		<?php

		while ($row = mysqli_fetch_array($query))
		{
			echo '<td>'.$row['titulo'].'</td>
					<td>'.$row['tipo'].'</td>
					<td>'.$row['origen'].'</td>
					<td>'.$row['proceso'].'</td>
					<td>'.$row['area'].'</td>
					<td>'.$row['estado'].'</td>
					<td>'.$row['subestado'].'</td>
				</tr>';

		}?>


			
</body>
</html>