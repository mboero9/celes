<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
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

<?php
$servername = "localhost";
$username = "root";
$password = "Micro2017";
$dbname = "sam";
$id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE movimientos SET movi=(SELECT (MAX(movi)+1))";

if ($conn->query($sql) === TRUE) {
    echo "OK";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

    <td><button class="btn btn-danger navbar-btn" onclick="location.href='index.php'">Volver</button></td> 


	<form name="form" method="post">
 <div class="form-group">
   <label for="movi"></label>
  </div>
  <button class="btn btn-danger navbar-btn" type="submit" name="submit">Confirmar</button>
</nav>
</body>
</html>
<br>
	</br>
<?php
$enlace = mysql_connect('localhost', 'root', 'Micro2017');

//$sql = "UPDATE movimientos SET movi=movi+1 WHERE movimientos id = '$id'";
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



