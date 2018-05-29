
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
//conexion bd------------------------------------------------------------------------------------
$user= "postgres";
$password = "root";
$dbname = "quiniela";
$port = "5432";
$host = "localhost";

$con = "host=$host port=$port dbname=$dbname user=$user password=$password";

$link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

//fin de la conexion -------------------------------------------------------------------------
session_start();
$correoa =$_SESSION['correo'];
$query = "SELECT nombre
              FROM administrador
              WHERE email ='$correoa'";
    $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error());
    $line1 = pg_fetch_array($result);
    $name = $line1['nombre'];
echo "<h1>BIENVENIDO <br />
$name</h1>";

//fin de la conexion a la bd------------------------------------------------------------
pg_close($link);


?>






                                <ul class="list-inline">
                                    <li><a  href="agregare.php">Agregar Equipos</a></li>
                                    <li><a  href="agregarp.php">Agregar partidos</a></li>
                                    <li><a  href="calendario.php">Calendario</a></li>
                                    <li><a  href="grupos.php">Grupos</a></li>
                                    <li><a  href="top.php">participantes</a></li>
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
