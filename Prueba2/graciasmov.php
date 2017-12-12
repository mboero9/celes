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
	
  </div>
</nav>
</body>
</html>
<?php
$enlace = mysql_connect('localhost', 'root', 'Micro2017');
$id = $_GET['movi'];
$sql = "INSERT INTO movimientos ('$movi') values ('$id')";
if (!$enlace) {
    die('No se pudo conectar: ' . mysql_error());
}
if (!mysql_select_db('sam')) {
    die('No se pudo seleccionar la base de datos: ' . mysql_error());
}
$resultado = mysql_query('SELECT id_mov FROM movimientos ORDER BY id_mov DESC LIMIT 1');

if (!$resultado) {
    die('No se pudo consultar:' . mysql_error());
}


echo " Se ha cargado con exito el movimiento N°: ";


echo mysql_result($resultado,0);


mysql_close($enlace);
	

?>
