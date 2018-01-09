<?php 
$dbhost = "192.168.0.104";
$dbuser = "root";
$dbpass = "Micro2017";
$dbaccion = "sam";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbaccion);
//Test if connection occurred.
if (mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . ")"
);
}
$id = $_GET['id'];
//Perform database query

$estado = $_POST['estado'];
$subestado = $_POST['subestado'];
$fecha_validacion = $_POST['fecha_validacion'];

//This function will clean the data and add slashes.

$estado= mysqli_real_escape_string($connection, $estado);
$subestado = mysqli_real_escape_string($connection, $subestado);
$fecha_validacion = mysqli_real_escape_string($connection, $fecha_validacion);


//This should retrive HTML form data and insert into database
$query  = "UPDATE accionesdemejora SET estado, subestado, fecha_validacion WHERE id=('$id') 
           VALUES ('".$_POST["estado"]."','".$_POST["subestado"]."','".$_POST["fecha_validacion"]."','".date('Y-m-d H:i:s')."')";
		   
		   
$result = mysqli_query($connection, $query);

  
//Test if there was a query error
        if ($result) {
            //SUCCESS
       header('Location: graciasmov.php');
        } else {
            //FAILURE
            die("Database query failed. " . mysqli_error($connection)); 
            //last bit is for me, delete when done
        }
mysqli_close($connection);





?>