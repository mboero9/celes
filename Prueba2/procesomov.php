<?php 
$dbhost = "localhost";
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
$id = $GET['id'];
//Perform database query
$id_mov = $_POST['id_mov'];
//$movi = $_POST['movi'];
$tipo = $_POST['tipo'];
$derivado_a = $_POST['derivado_a'];
$descripcion = $_POST['descripcion'];
$plazo = $_POST['plazo'];


//This function will clean the data and add slashes.
// Since I'm using the newer MySQL v. 5.7.14 I have to addslashes
$id_mov = mysqli_real_escape_string($connection, $id_mov);
//$movi = mysqli_real_escape_string($connection, $movi);
$tipo = mysqli_real_escape_string($connection, $tipo);
$derivado_a = mysqli_real_escape_string($connection, $derivado_a);
$descripcion = mysqli_real_escape_string($connection, $descripcion);
$plazo = mysqli_real_escape_string($connection, $plazo);

//This should retrive HTML form data and insert into database
$query  = "INSERT INTO movimientos (id_mov, movi, tipo, derivado_a, descripcion, plazo) 
           VALUES ('".$_POST["id_mov"]."','".$_POST["'$id'->movi"]."','".$_POST["tipo"]."','".$_POST["derivado_a"]."','".$_POST["descripcion"]."','".date('Y-m-d H:i:s')."')";
//$query = "INSERT INTO movimientos(id_mov, movi, tipo, derivado_a, descripcion, plazo) SELECT L.id_mov, OT.id , L.derivado_a, L.descripcion, L.plazo FROM movimientos L 
//INNER JOIN accionesdemejora OT ON L.movi = OT.id"

        $result = mysqli_query($connection, $query);
//$sql_1 = "INSERT INTO login(Username , Password , Id ,Role) VALUES ('$_POST['username']','$_POST['password']','$_POST['id']','$_POST['role']')";
  

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