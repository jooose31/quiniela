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


    $query7 = " SELECT *  
                FROM equipo
                WHERE email='$email ";
    $result7 = pg_query($link, $query7) or die('Query failed: ' . pg_last_error());
    $line = pg_fetch_array($result7);

    $query2 = "INSERT INTO participantes VALUES ('$email','$password',0,'$name')";
    $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());
    


    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

?>