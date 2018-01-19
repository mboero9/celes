<?php
  $page_title = 'Buscadeor';
  require_once('includes/load.php');
?>
<?php

 page_require_level(1);

 $all_users = find_all_user();
?>
<?php include_once('layouts/header.php'); ?>

<html>
<head>
<title>Buscador</title>
</head>
<body>
<form action='search.php' method='GET'>
<center>
<h1>Buscador</h1>
<input type='text' size='90' name='search'></br></br>
<input type='submit' name='submit' value='Buscar' ></br></br></br>
</center>
</form>
</body>
</html>