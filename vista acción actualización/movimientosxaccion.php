<?php
  $page_title = 'Home SAM';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'Micro2017'; // Password
$db_name = 'sam'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$id = $_GET['id'];
//$sql = "SELECT * FROM movimientos ";
$sql = "SELECT id_mov, movi, tipo, derivado_a, descripcion, plazo FROM movimientos WHERE movi='$id'";

//$sql = "SELECT A.id, A.movi, A.fecha_movimiento, A.tipo, A.derivado_a, A.plazo, A.descripcion FROM movimientos A JOIN accionesdemejora T ON A.id=t.id where a.id='$id'";

//$sql2 = mysql_query ("UPDATE movimientos SET movi=movi+1 WHERE movimientos id = '$id'") ;
	

$query = mysqli_query($conn, $sql);

$resultado = mysql_query('SELECT id FROM accionesdemejora ORDER BY id DESC LIMIT 1');


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}


?>
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

<div>
    <button class="btn btn-danger navbar-btn" onclick="location.href='movimientos.php'">ingresar movimiento</button> 

  </div>
  </nav>

<div class="container">			
		<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ID</th>
			<th>ACCION ID</th>
			<th>FECHA</th>
			<th>TIPO</th>
			<th>DERIVADO A</th>
			<th>PLAZO</th>
			<th>DESCRIPCION</th>
			<th></th>
		</tr>
		</thead>
		
				
		
		<?php

		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['id_mov'].'</td>
					<td>'.$row['movi'].'</td>
					<td>'.$row['fecha_movimiento'].'</td>
					<td>'.$row['tipo'].'</td>
					<td>'.$row['derivado_a'].'</td>
					<td>'.$row['plazo'].'</td>
					<td>'.$row['descripcion'].'</td>
					<td></td>		
				</tr>';
	
		}?>
		</tbody>
     </table>  
</div>