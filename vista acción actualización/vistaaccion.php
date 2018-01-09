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
.table {
    border: solid 1px #ff7857;
    border-spacing: 1;
    font: normal 18px Arial, sans-serif;
	width: 100%;
}


td {
	text-align: left;
	margin: 0 20px 10px 0;
    border: solid 2px #ff7857;
    color: #333;
    padding: 10px;
    position: left;
}

tr {
    text-align: left;
	border: solid 2px #ff7857;
    color: #ff7857;
    padding: 5px;
    }

.zui-table-vertical tbody td {
    border-top: #ff7857;
    border-bottom: #ff7857;
}


</style>

<div class="container">
		
  
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '
			
					
					<table class="table">
					<tbody>
						<tr><th style="background-color:#ff7857;color:white;" width="20%">Titulo</th><td>'.$row['titulo'].'</td></tr>
						<tr><th style="background-color:#ff7857;color:white;" width="20%">Accion</th><td>'.$row['id'].'</td></tr>
						<tr><th style="background-color:#ff7857;color:white;" width="20%">Tipo</th><td>'.$row['tipo'].'</td></tr>
						<tr><th style="background-color:#ff7857;color:white;" width="20%">Origen</th><td>'.$row['origen'].'</td></tr>
						<tr><th style="background-color:#ff7857;color:white;" width="20%">Proceso</th><td>'.$row['proceso'].'</td></tr>
						<tr><th style="background-color:#ff7857;color:white;" width="20%">Observacion</th><td>'.$row['observacion'].'</td></tr>								
						<tr><th style="background-color:#ff7857;color:white;" width="20%">Estado</th><td>'.$row['estado'].'</td><tr>	  		
						<tr><th style="background-color:#ff7857;color:white;" width="20%">Subestado</th><td>'.$row['subestado'].'</td><r>
						<tr><th style="background-color:#ff7857;color:white;" width="20%">Fecha de validacion</th><td>'.$row['fecha_validacion'].'</td></tr>
					</tbody>
					</table>
					
	<tr><div method="post" class="container">
	  <a href="actualizacion.php?id='.$row['id'].'"> 
		<button type="submit" class="btn btn-default" onclick="location.href="actualizacion.php" >Actualizar Estado</button>
		</a>
	</div></tr>	
		
	<tr><div method="post" class="container">
	    <a href="movimientos.php?id='.$row['id'].'"> 
		<button type="submit" class="btn btn-default" onclick="location.href="movimientos.php" >Cargar Movimiento</button>
		</a>
	</div></tr>';	
					
				
		}?>

</div>

			
</body>
</html>