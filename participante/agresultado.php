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

            <div class="preloader">
                <h2>Cargando</h2>
                <div class="loaded hexdots-loader">Loading…</div>
            </div><!-- End off Preloader -->
            <div class="container">
                <div class="div-menu">
                    <header class="cd-header">

                        <a class="cd-menu-trigger" href="#main-nav"><span></span></a>
                    </header>
                </div>

                <nav id="main-nav">
                    <ul>
                        <li><a href="inicio.php">Inicio</a></li>
                        
                        <li><a href="calendario.php">Calendario</a></li>
                        <li><a href="grupos.php">Grupos</a></li>
                        <li><a href="logout.php">Salir</a></li>
                    </ul>
                    <a href="#" class="cd-close-menu">Close<span></span></a>
                </nav>
            </div>





            </div>



            <!-- Home Section -->
            <section id="home" class="home">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">


                          <?php
                              $user= "postgres";
                              $password = "root";
                              $dbname = "quiniela";
                              $port = "5432";
                              $host = "localhost";

                              $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                              $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                              //fin de la conexion -------------------------------------------------------------------------

                              $id=$_GET['partido'];
                              session_start();
                              $_SESSION['partido'] = $id;

                              $query = "SELECT * FROM partidos WHERE '$id'=idp";
                              $result = pg_query($link, $query);
                              $line = pg_fetch_array($result);
                              $lugar = $line['lugar'];
                              $fechahora = $line['fechahorap'];
                              $ideu = $line['ideu'];
                              $ided = $line['ided'];
                              $geu = $line['geu'];
                              $ged = $line['ged'];
                              $fase = $line['fase'];
                              $idp = $line['idp'];



                              //fin de la conexion a la bd------------------------------------------------------------
                              pg_close($link);

                          ?>


                            <div class="col-md-6 no-padding wow rollIn">
                                <div class="main_home_area p-t-2 p-x-3">
                                    <div class="head_title">
                                        <h2>Agregar prediccion</h2>
                                    </div>
                                    <div class="single_contant_right">
                                        <form action="quiniela.php" id="formid" method="get" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">


                                                      <label for="lugar"><b>Ubicacion: <?php echo "$lugar"; ?></b></label>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">

                                                      <label for="lugar"><b>Partido de: <?php echo "$ideu vs $ided"; ?></b></label>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="lugar"><b>Goles de: <?php echo "$ideu"; ?></b></label>
                                                        <input type="number" class="form-control" name="gideu" required="">
                                                    </div>
                                                </div>
                                              </div>

                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="form-group">
                                                          <label for="lugar"><b>Goles de: <?php echo "$ided"; ?></b></label>
                                                          <input type="number" class="form-control" name="gided" required="">
                                                      </div>
                                                  </div>
                                                </div>


                                            <div class="row">

                                                <div class="m-b-2 m-t-2">
                                                    <input onclick="verifica()" type="submit" value="Agregar">
                                                </div>
                                            </div>


                                        </form>








                                    </div>
                                    <!-- Copyright -->
                                    <div class="row">
                                        <div class="main_footer">


                                            <div class="col-md-8">
                                                <div class="copyright_text margin-top-20 center">
                                                    <p class=" wow fadeInRight animated" data-wow-duration="1s"> Para regresar al inicio haga
                                                         <a  href="inicio.php">click aqui</a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End of row -->
                                </div><!-- End of main contact area -->

                            </div><!-- End of col-md-6 -->






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
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="../assets/js/gmaps.min.js"></script>


        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>
