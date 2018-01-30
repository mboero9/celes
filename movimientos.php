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
//$sql = "INSERT INTO movimientos (movi) values ('$id')";
$sql = "SELECT * FROM accionesdemejora where id = '$id'";
//$sql2 = "INSERT INTO movimientos (movi) 
//            VALUES ('".$_POST["id"]."')";
$sql2 = mysql_query ("UPDATE movimientos SET movi='$id' WHERE accionesdemejora id = '$id'") ;
//UPDATE 'movimientos' SET 'movi' = '$id' FROM 'movimientos' INNER JOIN 'accionesdemejora' ON movimientos.'$id' = accionesdemejora.'$id'
//WHERE accionesdemejora.movi = 'movi'
$query = mysqli_query($conn, $sql);
$resultado = mysql_query('SELECT id FROM accionesdemejora ORDER BY id DESC LIMIT 1');
//$resultado2 = mysql_query("UPDATE movimientos SET movi='$id' WHERE movimientos id = '$id'");
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html lang="en">
<head>
  <title>Carga de Movimientos</title>
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
	<td><button class="btn btn-danger navbar-btn" onclick="location.href='carga_movimientos.php'">Cargar Movimiento</button></td>
  </div>
</nav>

<div class="container">
		
	<form action="procesomov.php" method="post/get">
    <div class="form-group">
<!--		
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
-->

	<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					
				    <td><div class="form-group"><label for="observacion">Accion:</label><select type="text" name="tipo" class="form-control"><option value="observacion">'.$row['id'].'</option></select></div></td>
					<td><div class="form-group"><label for="tipo">Tipo:</label><select type="text" name="tipo" class="form-control"><option value="Analisis causa raiz">Analisis causa raiz</option><option value="Accion de contingencia">Accion de contingencia</option> <option value="Accion correctiva">Accion correctiva</option><option value="Accion propuesta a realizar">Accion propuesta a realizar</option><option value="Derivacion">Derivacion</option> <option value="Accion para verificar">Accion para verificar</option><option value="Cierre de la accion">Cierre de la accion</option> </select></div></td>
			        <td><div class="form-group"><label for="derivado_a">Derivado a:</label><input type="text" class="form-control" name="derivado_a" placeholder="Ingresa derivacion"></div></td>
					<td><div class="form-group"><label for="descripcion">Descripcion:</label><textarea type="text" class="form-control" name="descripcion" placeholder="Ingresa descripcion" cols="50" rows="7"></textarea></div></td>
					<td><div class="form-group"><label for="plazo">Plazo:</label><input type="date"></div></td>
					<td><div class="form-group"><a href="procesomov.php?id='.$row['id'].'"><button type="submit" class="btn btn-default" value="accion">'.$row['movi'].'Cargar movimiento</button></div></td>
            
					</tr>';
		
		}?>
</form>


</body>
</html>
