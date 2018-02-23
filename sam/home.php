<?php
  $page_title = 'Home SAM';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}  
?>
<?php include_once('layouts/header.php'); ?>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'Micro89$'; // Password
$db_name = 'sam'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT acc1.*,mov2.id_mov, mov2.plazo FROM accionesdemejora AS acc1 JOIN movimientos AS mov2 ON acc1.id = mov2.movi ORDER BY mov2.plazo DESC lIMIT 9';
//$sql = 'SELECT id, titulo, tipo, origen, proceso, area, estado, subestado FROM accionesdemejora';		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html lang="en">
<head>
  <title>SAM</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="libs/js/functions.js"></script>
 <style type="text/css">
div.scrollmenu {
    background-color: #333;
    overflow: auto;
    white-space: nowrap;
}

div.scrollmenu a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
}

div.scrollmenu a:hover {
    background-color: #777;
}

</style>
</head>
<body>


		
		<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ACCION</th>
			<th>MOVIMIENTO</th>
			<th>TITULO</th>
			<th>TIPO</th>
			<th>ORIGEN</th>
			<th>PROCESO</th>
			<th>AREA</th>
			<th>ESTADO</th>
			<th>SUBESTADO</th>
			<th>VENCIMIENTO</th>
			<th></th>
			<th></th>
		</tr>
		</thead>
		
				
		
		<?php

		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
			        <div style="max-height: 100px; max-width: 100px; width: 100px; overflow: auto;">
					<td><a href="vistaaccion.php?id=' . $row['id'] . '">' . $row['id'] . '</a></td>
					<td><a href="movimiento.php?id_mov=' . $row['id_mov'] . '">' . $row['id_mov'] . '</a></td>
					<td>'.$row['titulo'].'</td>
					<td>'.$row['tipo'].'</td>
					<td>'.$row['origen'].'</td>
					<td>'.$row['proceso'].'</td>
					<td>'.$row['area'].'</td>
					<td>'.$row['estado'].'</td>
					<td>'.$row['subestado'].'</td>
					<td>'.$row['plazo'].'</td>
					<td><a href="vistaaccion.php?id='.$row['id'].'"><button onclick="myFunction()">Ver accion</button></a></td>
					<td><a href="movimientos.php?id='.$row['id'].'"><button onclick="myFunction()">Cargar Mov</button></a></td>
					<td><a href="movimientosxaccion.php?id='.$row['id'].'"><button onclick="myFunction()">Ver Mov</button></a></td>	
</div>					
				</tr>';
		}?>
		</tbody>
     </table>  


</body>
</html>

<?php include_once('layouts/footer.php'); ?>
