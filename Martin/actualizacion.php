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
$db_pass = 'Micro2017'; // Password
$db_name = 'sam'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$id = $_GET['id'];
echo "<h3>Accion N°: $id</h3>";

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
{
	(isset($_POST["estado"])) ? $estado = $_POST["estado"] : $estado=1;
    (isset($_POST["suestado"])) ? $subestado = $_POST["subestado"] : $subestado=1;
	if (isset($_POST['submit'])) {
    
    $sql = "UPDATE accionesdemejora SET estado = '".$_POST["estado"]."', subestado = '".$_POST["subestado"]."', fecha_validacion = '".date('Y-m-d H:i:s')."' WHERE id='$id'";
     $result = $conn->query($sql);  
	   if ($conn->query($sql) === TRUE) {
        echo "<script>location.href='graciasupdate.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
  }
	

?>
<div class="container">


<form action="#" method="post">
	<table>
		<tbody>		
	<tr><td>Estado</td> <td><select type="text" name="estado" class="form-control">
		<option <?php if ($estado == abierta ) echo 'seleccionar' ; ?>value="abierta">Abierta</option> 
		<option <?php if ($estado == presentada ) echo 'seleccionar' ; ?>value="presentada">Presentada</option> 
		<option <?php if ($estado == cerrada ) echo 'seleccionar' ; ?>value="cerrada">Cerrada</option>
		</select></td></tr>
	<tr><td>Subestado</td> <td><select type="text" name="subestado" class="form-control">
		<option <?php if ($subestado == aprobada ) echo 'seleccionar' ; ?>value="aprobada">Aprobada</option> 
		<option <?php if ($subestado == ejecucion ) echo 'seleccionar' ; ?>value="ejecucion">En ejecucion</option> 
		<option <?php if ($subestado == estudio ) echo 'seleccionar' ; ?>value="estudio">En estudio</option>
		<option <?php if ($subestado == implementada ) echo 'seleccionar' ; ?>value="implementada">Implementada</option> 
		<option <?php if ($subestado == rechazada ) echo 'seleccionar' ; ?>value="rechazada">Rechazada</option> 
		<option <?php if ($subestado == exitosa ) echo 'seleccionar' ; ?>value="exitosa">Exitosa</option>
		<option <?php if ($subestado == sin_exito ) echo 'seleccionar' ; ?>value="sin exito">Sin exito</option>			
		</select></td></tr>
	<tr><td>Fecha de validacion</td><td><input name="date" type="date"></td></tr>
	
		</tbody>
		<tr>
<td colspan="2"><input type="submit" name="submit" value="Actualizar" class="btnSubmit"></td>
</tr>
		</table>
		
</form>
<?php 

}
?>