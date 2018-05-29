<?php

$user= "postgres";
$password = "root";
$dbname = "quiniela";
$port = "5432";
$host = "localhost";

$con = "host=$host port=$port dbname=$dbname user=$user password=$password";

$link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

//fin de la conexion -------------------------------------------------------------------------
$ide=$_GET['ide'];
$query5 = "SELECT bandera
FROM equipos
where ide='$ide'";
$result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());
$line = pg_fetch_array($result5,'data');
$ban = $line['bandera'];
$bandera =pg_unescape_bytea($ban);

header("Content-type: imagen/jpeg");
echo $bandera;

//fin de la conexion a la bd------------------------------------------------------------
pg_close($link);


 ?>
