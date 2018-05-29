
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Quiniela</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="myicon.png">

        <!-- Raleway Google fonts  -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,400italic,500,100italic,700' rel='stylesheet' type='text/css'>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">



        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/fonticons.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">

        <!-- For navmenu css -->
        <link rel="stylesheet" href="../assets/css/navmenu.css" />

        <!--For Plugins external css-->
        <link rel="stylesheet" href="../assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="../assets/css/responsive.css" />

        <!--Theme Colors css-->
        <!--<link rel="stylesheet" href="../assets/css/white.css">-->



        <!--Old browser  JS-->
        <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>

    <body data-spy="scroll" data-target="#scrollspy">





        <div class="main_figur">

            <!-- End off Preloader -->



            <div class="container">
                <div class="div-menu">
                    <header class="cd-header">

                        <a class="cd-menu-trigger" href="#main-nav"><span></span></a>
                    </header>
                </div>

                <nav id="main-nav">
                    <ul>
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="agregare.php">Agregar Equipos</a></li>
                        <li><a href="agregarp.php">Agregar partidos</a></li>
                        <li><a href="calendario.php">Calendario</a></li>
                        <li><a href="grupos.php">Grupos</a></li>
                        <li><a href="logout.php">Salir</a></li>
                    </ul>
                    <a href="#" class="cd-close-menu">Close<span></span></a>
                </nav>
            </div>



            <!-- Home Section -->
            <section id="home" class="home">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">

                            <div class="main_home text-center wow fadeInUp" data-wow-duration="700ms">

<?php
    $user= "postgres";
    $password = "root";
    $dbname = "quiniela";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------


    $ge1=$_GET['gideu'];
    $ge2=$_GET['gided'];

    session_start();
    $idp = $_SESSION['partido'];
    //pendiente
    $query= "SELECT *
    FROM partidos
    WHERE idp='$idp'";
    $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error());
    $line = pg_fetch_array($result);
    $lugar = $line['lugar'];
    $fechahora = $line['fechahorap'];
    $ideu = $line['ideu'];
    $ided = $line['ided'];
    $geu = $line['geu'];
    $ged = $line['ged'];
    $fase = $line['fase'];

    $query1 = "SELECT *
    FROM quiniela
    WHERE idp='$idp' and ge1=$ge1 and ge2 = $ge2";
    $result1 = pg_query($link, $query1) or die('Query failed: ' . pg_last_error());
    //los 3 del resultado exacto
    while ($line1 = pg_fetch_array($result1)) {
        $tcorreo=$line1['email'];

        $query7= "SELECT puntos
        FROM participantes
        WHERE email='$tcorreo'";
        $result7 = pg_query($link, $query7) or die('Query failed: ' . pg_last_error());
        $line7 = pg_fetch_array($result7);
        $puntos = $line7['puntos'];
        $puntos=$puntos+6;

        $query3 = "UPDATE participantes
        SET puntos=$puntos
        WHERE email ='$tcorreo'";
        $result3 = pg_query($link, $query3) or die('Query failed: ' . pg_last_error());
        
    }

    //personas que solo tienen los 3 puntos del 

    $query10 = "SELECT *
    FROM quiniela
    WHERE idp='$idp' and ge1>$ge2";
    $result10 = pg_query($link, $query10) or die('Query failed: ' . pg_last_error());
    //los que dijieron que el equipo 1 ganaba
    while ($line10 = pg_fetch_array($result10)) {
        $tcorreo=$line10['email'];

        $query11= "SELECT puntos
        FROM participantes
        WHERE email='$tcorreo'";
        $result11 = pg_query($link, $query11) or die('Query failed: ' . pg_last_error());
        $line11 = pg_fetch_array($result11);
        $puntos = $line11['puntos'];
        $puntos=$puntos+3;

        $query12 = "UPDATE participantes
        SET puntos=$puntos
        WHERE email ='$tcorreo'";
        $result12 = pg_query($link, $query12) or die('Query failed: ' . pg_last_error());

        //puntos a los equipos gana e1
        $query13= "SELECT puntos
        FROM equipos
        WHERE ide='$ideu'";
        $result13 = pg_query($link, $query13) or die('Query failed: ' . pg_last_error());
        $line13 = pg_fetch_array($result13);
        $puntoseq14 = $line13['puntos'];
        $puntoseq14=$puntoseq14+3;

        $query14 = "UPDATE equipos
        SET puntos=$puntoseq14
        WHERE ide ='$ideu'";
        $result14 = pg_query($link, $query14) or die('Query failed: ' . pg_last_error());

        $query15= "SELECT puntos
        FROM equipos
        WHERE ide='$ided'";
        $result15 = pg_query($link, $query15) or die('Query failed: ' . pg_last_error());
        $line15 = pg_fetch_array($result15);
        $puntoseq16 = $line15['puntos'];
        $puntoseq16=$puntoseq16+1;

        $query16 = "UPDATE equipos
        SET puntos=$puntoseq16
        WHERE ide ='$ided'";
        $result16 = pg_query($link, $query16) or die('Query failed: ' . pg_last_error());


        
        
    }

    $query20 = "SELECT *
    FROM quiniela
    WHERE idp='$idp' and ge1<$ge2";
    $result20 = pg_query($link, $query20) or die('Query failed: ' . pg_last_error());
    //los que dijieron que el equipo 2 ganaba
    while ($line20 = pg_fetch_array($result20)) {
        $tcorreo=$line20['email'];

        $query21= "SELECT puntos
        FROM participantes
        WHERE email='$tcorreo'";
        $result21 = pg_query($link, $query21) or die('Query failed: ' . pg_last_error());
        $line21 = pg_fetch_array($result21);
        $puntos21 = $line21['puntos'];
        $puntos21=$puntos21+3;

        $query22 = "UPDATE participantes
        SET puntos=$puntos21
        WHERE email ='$tcorreo'";
        $result22 = pg_query($link, $query22) or die('Query failed: ' . pg_last_error());
//ganador 2
        $query23= "SELECT puntos
        FROM equipos
        WHERE ide='$ided'";
        $result23 = pg_query($link, $query23) or die('Query failed: ' . pg_last_error());
        $line23 = pg_fetch_array($result23);
        $puntoseq24 = $line23['puntos']+3;
        $puntoseq24=$puntoseq24+3;

        $query24 = "UPDATE equipos
        SET puntos=$puntoseq24
        WHERE ide ='$ided'";
        $result24 = pg_query($link, $query24) or die('Query failed: ' . pg_last_error());

        //perdedor

        $query25= "SELECT puntos
        FROM equipos
        WHERE ide='$ideu'";
        $result25 = pg_query($link, $query25) or die('Query failed: ' . pg_last_error());
        $line25 = pg_fetch_array($result25);
        $puntoseq26 = $line23['puntos'];
        $puntoseq26=$puntoseq26+1;

        $query26 = "UPDATE equipos
        SET puntos=$puntoseq26
        WHERE ide ='$ideu'";
        $result26 = pg_query($link, $query26) or die('Query failed: ' . pg_last_error());
        


        
    }

    $query30 = "SELECT *
    FROM quiniela
    WHERE idp='$idp' and ge1=$ge2";
    $result30 = pg_query($link, $query20) or die('Query failed: ' . pg_last_error());
    //los que dijieron que era empate independientemente del resultado
    while ($line30 = pg_fetch_array($result30)) {
        $tcorreo=$line30['email'];

        $query31= "SELECT puntos
        FROM participantes
        WHERE email='$tcorreo'";
        $result31 = pg_query($link, $query31) or die('Query failed: ' . pg_last_error());
        $line31 = pg_fetch_array($result31);
        $puntos31 = $line31['puntos'];
        $puntos31=$puntos31+3;

        $query32 = "UPDATE participantes
        SET puntos=$puntos31
        WHERE email ='$tcorreo'";
        $result32 = pg_query($link, $query32) or die('Query failed: ' . pg_last_error());
        //puntos e1

        $query33= "SELECT puntos
        FROM equipos
        WHERE ide='$ideu'";
        $result33 = pg_query($link, $query33) or die('Query failed: ' . pg_last_error());
        $line33 = pg_fetch_array($result33);
        $puntoseq34 = $line33['puntos'];
        $puntoseq34=$puntoseq34+2;

        $query34 = "UPDATE equipos
        SET puntos=$puntoseq34
        WHERE ide ='$ideu'";
        $result34 = pg_query($link, $query34) or die('Query failed: ' . pg_last_error());

        //puntos e2

        $query35= "SELECT puntos
        FROM equipos
        WHERE ide='$ided'";
        $result35 = pg_query($link, $query35) or die('Query failed: ' . pg_last_error());
        $line35 = pg_fetch_array($result35);
        $puntoseq36 = $line35['puntos'];
        $puntoseq36=$puntoseq36+2;


        $query36 = "UPDATE equipos
        SET puntos=$puntoseq36
        WHERE ide ='$ided'";
        $result34 = pg_query($link, $query36) or die('Query failed: ' . pg_last_error());




        
    }


    $query40 = "UPDATE partidos
    SET geu=$ge1,ged=$ge2
    WHERE idp ='$idp'";
    $resul40 = pg_query($link, $query40) or die('Query failed: ' . pg_last_error());


    


    



 
    echo"<h1>Aviso: <br />
        Los datos fueron agregados exitosamente</h1>";








    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

?>






                                <ul class="list-inline">
                                    <li><a  href="agregare.php">Agregar Equipos</a></li>
                                    <li><a  href="agregarp.php">Agregar partidos</a></li>
                                    <li><a  href="calendario.php">Calendario</a></li>
                                    <li><a  href="grupos.php">Grupos</a></li>
                                    <li><a  href="logout.php">Salir</a></li>
                                </ul>
                            </div>



                        </div><!-- End of col-md-12 -->
                    </div><!-- End of row -->
                </div><!-- End of Container -->

            </section><!-- End of Home Section -->






        </div>



        <script src="../assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.min.js"></script>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script src="../assets/js/jquery.easing.1.3.js"></script>
        <script src="../assets/js/materialize.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>
        <script src="../http://maps.google.com/maps/api/js"></script>
        <script src="../assets/js/gmaps.min.js"></script>


        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>
