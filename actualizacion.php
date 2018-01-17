<?php
  $page_title = 'Actualiza Accion';
  require_once('includes/load.php');
?>
<?php

 page_require_level(1);

 $all_users = find_all_user();
?>
<?php include_once('layouts/header.php'); ?>

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
    </div>
    <td><button class="btn btn-danger navbar-btn" onclick="location.href='index.php'">Volver</button></td> 

  </div>
</nav>



<meta charset="UTF-8">
<style>

table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
	position: absolute;
	width: 200px;
    height: 200px;
    left: 300px;
    top: 140px;
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
button {
	position: absolute;
    left: 300px;
    top: 350px;

}

</style>
<?php
(isset($_POST["estado"])) ? $estado = $_POST["estado"] : $estado=1;
(isset($_POST["suestado"])) ? $subestado = $_POST["subestado"] : $subestado=1;
?>
<div class="container">


<form action="procesoactualizacion.php" method="post">
	<table>
				
	<tr><td>Estado</td> <td><select type="text" name="estado" class="form-control">
		<option <?php if ($estado == Abierta ) echo 'seleccionar' ; ?>value="Abierta">Abierta</option> 
		<option <?php if ($estado == Presentada ) echo 'seleccionar' ; ?>value="Presentada">Presentada</option> 
		<option <?php if ($estado == Cerrada ) echo 'seleccionar' ; ?>value="Cerrada">Cerrada</option>
		</select></td></tr>
	<tr><td>Subestado</td> <td><select type="text" name="subestado" class="form-control">
		<option <?php if ($subestado == Aprobada ) echo 'seleccionar' ; ?>value="Aprobada">Aprobada</option> 
		<option <?php if ($subestado == Ejecucion ) echo 'seleccionar' ; ?>value="Ejecucion">En ejecucion</option> 
		<option <?php if ($subestado == Estudio ) echo 'seleccionar' ; ?>value="Estudio">En estudio</option>
		<option <?php if ($subestado == Implementada ) echo 'seleccionar' ; ?>value="Implementada">Implementada</option> 
		<option <?php if ($subestado == Rechazada ) echo 'seleccionar' ; ?>value="Rechazada">Rechazada</option> 
		<option <?php if ($subestado == Exitosa ) echo 'seleccionar' ; ?>value="Exitosa">Exitosa</option>
		<option <?php if ($subestado == Sin_exito ) echo 'seleccionar' ; ?>value="Sin_exito">Sin exito</option>			
		</select></td></tr>
	<tr><td>Fecha de validacion</td><td><input type="date"></td></tr>
		</tbody>
		</table>
		
</form>
		
	<div class="form-group">
	    <?php echo "<td><a href=\"home.php?id=$row[id]\"></a>";?><button type="submit"  class="btn btn-default">Cargar Actualizacion</button>
  	</div>	
	
	

	