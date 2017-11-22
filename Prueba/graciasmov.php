<?php
$enlace = mysql_connect('localhost', 'root', 'Prome2017');
if (!$enlace) {
    die('No se pudo conectar: ' . mysql_error());
}
if (!mysql_select_db('sam')) {
    die('No se pudo seleccionar la base de datos: ' . mysql_error());
}
$resultado = mysql_query('SELECT id FROM movimientos ORDER BY id2 DESC LIMIT 1');
if (!$resultado) {
    die('No se pudo consultar:' . mysql_error());
}


echo "<h1> Se ha cargado con exito el movimiento " ; 

echo mysql_result($resultado,0);

mysql_close($enlace);
	

?>