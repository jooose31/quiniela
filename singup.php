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



        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <!-- For navmenu css -->
        <link rel="stylesheet" href="assets/css/navmenu.css" />

        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <!--Theme Colors css-->
        <!--<link rel="stylesheet" href="assets/css/white.css">-->



        <!--Old browser  JS-->
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>

    <body data-spy="scroll" data-target="#scrollspy">





        <div class="main_figur">

            <div class="preloader">
                <h2>Cargando</h2>
                <div class="loaded hexdots-loader">Loading…</div>
            </div><!-- End off Preloader -->






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


    $email=$_POST['email'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $password = sha1($pass);
    
    $query7 = " SELECT *  
                FROM participantes
                WHERE email='$email' ";
    $result7 = pg_query($link, $query7) or die('Query failed: ' . pg_last_error());
    $line = pg_fetch_array($result7);

    if(!$line){
    $query2 = "INSERT INTO participantes VALUES ('$email','$password',0,'$name')";
    $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());
    echo"<h1>Felicitaciones y mucha suerte $name <br />
          su usuario ha sido creado  </h1>";

    }else {
        echo"<h1>Error: <br />
        El usuario ya existe</h1>";
    }

    


    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

?>

                                
                                <ul class="list-inline">
                                    <li><a href="ingresar.html">Ingresar</a></li>
                                    <li><a href="singup.html">Crear cuenta</a></li>
                                </ul>
                            </div>

                            <div class="scrolldown">
                                <a href="#about"><i class="fa fa-long-arrow-down"></i></a>
                            </div>




                        </div><!-- End of col-md-12 -->
                    </div><!-- End of row -->
                </div><!-- End of Container -->

            </section><!-- End of Home Section -->




            <section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="main_about_area p-t-3">
                                <div class="head_title m-y-3  wow fadeInUp">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h2>About Us</h2>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="m-b-2">Solucion proyecto 2 ciencias de la computacion 5 - Quiniela</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="about_content center p-b-3 wow fadeInUp" data-wow-duration="700ms">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single_abt single_about m-y-3">
                                                <i class="fa fa-lightbulb-o"></i>
                                                <h3>Design</h3>
                                                <p>Jose perez</p>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="single_abt single_about m-y-3">
                                                <i class="fa fa-toggle-off"></i>
                                                <h3>Design</h3>
                                                <p>Jose perez</p>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="single_abt single_about m-y-3">
                                                <i class="fa fa-lock"></i>
                                                <h3>Design</h3>
                                                <p>Jose perez</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div><!-- End of col-md-12 -->
                    </div><!-- End of row -->
                </div><!-- End of Container-fluid -->
            </section><!-- End of Home Section -->



        </div>



        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/materialize.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>


        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
