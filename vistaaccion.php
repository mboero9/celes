<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'Prome2017'; // Password
$db_name = 'sam'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$id = $_GET['id'];
//$sql = "SELECT * FROM accionesdemejora where id = '$id'";
$sql = "SELECT id, titulo, tipo, origen, area, proceso, descripcion, objetivo, 
		 observacion, estado, subestado, fecha_validacion FROM accionesdemejora WHERE id='$id'";
$sql2 =	"UPDATE titulo FROM accionesdemejora WHERE id='$id'";	
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
    <td><button class="btn btn-danger navbar-btn" onclick="location.href='index.php'">Volver</button></td> 
	<td><button class="btn btn-danger navbar-btn" onclick="location.href='movimientos.php'">Cargar Movimiento</button></td>
	<td><button class="btn btn-danger navbar-btn" onclick="location.href='actualizacion.php'">Actualizar Estado</button></td> 
  </div>
</nav>



<meta charset="UTF-8">
<style>
table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}


td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}
.zui-table-vertical tbody td {
    border-top: none;
    border-bottom: none;
}


</style>

<div class="container">
		
  
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '
			
					
					<table class="table table-striped">
					<tbody>
						<tr><td font-weight:bolder >Accion</td><td>'.$row['id'].'</td></tr>
						<tr><td>Titulo</td><td>'.$row['titulo'].'</td></tr>
						<tr><td>Tipo</td><td>'.$row['tipo'].'</td></tr>
						<tr><td>Origen</td><td>'.$row['origen'].'</td></tr>
						<tr><td>Proceso</td><td>'.$row['proceso'].'</td></tr>
						<tr><td>Observacion</td><td>'.$row['observacion'].'</td></tr>								
						<tr><td>Estado</td><td>'.$row['estado'].'</td><tr>	  		
						<tr><td>Subestado</td><td>'.$row['subestado'].'</td><r>
						<tr><td>Fecha de validacion</td><td>'.$row['fecha_validacion'].'</td></tr>
					</tbody>
					</table>';
											
					
				
		}?>

</div>


	<div method="post" class="container">
	    <button type="submit" class="btn btn-default" onclick="location.href='actualizacion.php'" >Actualizar Estado</button>
  	</div>

			
</body>
</html>