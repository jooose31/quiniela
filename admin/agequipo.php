<?php
    $user= "postgres";
    $password = "root";
    $dbname = "quiniela";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------


    $pais=$_POST['pais'];
    $ide=$_POST['ide'];
    $grupo=$_POST['grupo'];
    $imagen=$_POST['bandera'];
    $data = file_get_contents('imagen');
    $bandera = pg_escape_bytea($data);
    


    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

?>