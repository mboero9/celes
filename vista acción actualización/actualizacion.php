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

?>



<html lang="en">
<head>
  <title>ACTUALIZACION ESTADO</title>
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


<form action="procesoactualizacion.php" method="post">
	<table>
				
	<tr><td>Estado</td> <td><select type="text" name="estado" class="form-control">
		<option value="Abierta">Abierta</option> 
		<option value="Presentada">Presentada</option> 
		<option value="Cerrada">Cerrada</option>
		</select></td></tr>
	<tr><td>Subestado</td> <td><select type="text" name="subestado" class="form-control">
		<option value="Aprobada">Aprobada</option> 
		<option value="En ejecucion">En ejecucion</option> 
		<option value="En estudio">En estudio</option>
		<option value="Implementada">Implementada</option> 
		<option value="Rechazada">Rechazada</option> 
		<option value="Exitosa">Exitosa</option>
		<option value="Sin exito">Sin exito</option>			
		</select></td></tr>
	<tr><td>Fecha de validacion</td><td><input type="date"></td></tr>
		</tbody>
		</table>
		
</form>
		
	<div class="form-group">
	    <a href="procesoactualizacion.php?id='.$row['id'].'"> </a><button type="submit" value=" echo id='.$row['id'].'" class="btn btn-default">Cargar Actualizacion</button>
  	</div>	
	
	

	