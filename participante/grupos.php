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
            </div>

            



            <!-- Home Section -->
            <section id="home" class="home">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">



                            <div class="col-md-12 no-padding wow rollIn">
                                <div class="main_home_area p-t-9 p-x-10">
                                    <div class="head_title">
                                        <h1>GRUPOS</h1>
                                    </div>


        <div class="row">
          <div class="head_title">
              <h1>A</h1>
          </div>
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th><h1>bandera</h1></th>
                                <th><h1>pais</h1></th>
                                <th><h1>goles a favor</h1></th>
                                <th><h1>goles en contra</h1></th>
                                <th><h1>puntos</h1></th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                                            $user= "postgres";
                                                            $password = "root";
                                                            $dbname = "quiniela";
                                                            $port = "5432";
                                                            $host = "localhost";

                                                            $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                                                            $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                                                            //fin de la conexion -------------------------------------------------------------------------


                                                            // session_start();
                                                            // $scorreo=$_SESSION['correo'];
                                                            $query5 = "SELECT *
                                                            FROM equipos
                                                            where grupo='a' or grupo='A'
                                                            ORDER BY puntose";
                                                            $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());

                                                            while ($line = pg_fetch_array($result5)) {
                                                              $ide = $line['ide'];
                                                              $pais = $line['pais'];
                                                              $gaf = $line['gaf'];
                                                              $gec = $line['gec'];
                                                              $puntos = $line['puntose'];






                                                                echo "<tr>";

                                                                echo "<td><a><img src="."'bandera.php?ide=$ide'"."alt="."banderas"." height="."42"." width="."42"."></a></td>";
                                                                echo "<td><a>$pais</a></td>";
                                                                echo "<td><a>$gaf</a></td>";
                                                                echo "<td><a>$gec</a></td>";
                                                                echo "<td><a>$puntos</a></td>";






                                                                echo "</tr>";




                                                            }



                                                            //fin de la conexion a la bd------------------------------------------------------------
                                                            pg_close($link);


                                                             ?>
                            </tbody>
                          </table>
                        </div>
                    </div>



                    <div class="row">
                      <div class="head_title">
                          <h1>B</h1>
                      </div>
                                    <div class="table-responsive">
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th><h1>bandera</h1></th>
                                            <th><h1>pais</h1></th>
                                            <th><h1>goles a favor</h1></th>
                                            <th><h1>goles en contra</h1></th>
                                            <th><h1>puntos</h1></th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                                                        $user= "postgres";
                                                                        $password = "root";
                                                                        $dbname = "quiniela";
                                                                        $port = "5432";
                                                                        $host = "localhost";

                                                                        $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                                                                        $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                                                                        //fin de la conexion -------------------------------------------------------------------------


                                                                        // session_start();
                                                                        // $scorreo=$_SESSION['correo'];
                                                                        $query5 = "SELECT *
                                                                        FROM equipos
                                                                        where grupo='b'or grupo='B'
                                                                        ORDER BY puntose";
                                                                        $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());

                                                                        while ($line = pg_fetch_array($result5)) {
                                                                          $ide = $line['ide'];
                                                                          $pais = $line['pais'];
                                                                          $gaf = $line['gaf'];
                                                                          $gec = $line['gec'];
                                                                          $puntos = $line['puntose'];






                                                                            echo "<tr>";

                                                                            echo "<td><a><img src="."'bandera.php?ide=$ide'"."alt="."banderas"." height="."42"." width="."42"."></a></td>";
                                                                            echo "<td><a>$pais</a></td>";
                                                                            echo "<td><a>$gaf</a></td>";
                                                                            echo "<td><a>$gec</a></td>";
                                                                            echo "<td><a>$puntos</a></td>";






                                                                            echo "</tr>";




                                                                        }



                                                                        //fin de la conexion a la bd------------------------------------------------------------
                                                                        pg_close($link);


                                                                         ?>
                                        </tbody>
                                      </table>
                                    </div>
                                </div>



                                                    <div class="row">
                                                      <div class="head_title">
                                                          <h1>C</h1>
                                                      </div>
                                                                    <div class="table-responsive">
                                                                      <table class="table">
                                                                        <thead>
                                                                          <tr>
                                                                            <th><h1>bandera</h1></th>
                                                                            <th><h1>pais</h1></th>
                                                                            <th><h1>goles a favor</h1></th>
                                                                            <th><h1>goles en contra</h1></th>
                                                                            <th><h1>puntos</h1></th>

                                                                          </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                          <?php
                                                                                                        $user= "postgres";
                                                                                                        $password = "root";
                                                                                                        $dbname = "quiniela";
                                                                                                        $port = "5432";
                                                                                                        $host = "localhost";

                                                                                                        $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                                                                                                        $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                                                                                                        //fin de la conexion -------------------------------------------------------------------------


                                                                                                        // session_start();
                                                                                                        // $scorreo=$_SESSION['correo'];
                                                                                                        $query5 = "SELECT *
                                                                                                        FROM equipos
                                                                                                        where grupo='c'or grupo='C'
                                                                                                        ORDER BY puntose";
                                                                                                        $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());

                                                                                                        while ($line = pg_fetch_array($result5)) {
                                                                                                          $ide = $line['ide'];
                                                                                                          $pais = $line['pais'];
                                                                                                          $gaf = $line['gaf'];
                                                                                                          $gec = $line['gec'];
                                                                                                          $puntos = $line['puntose'];






                                                                                                            echo "<tr>";

                                                                                                            echo "<td><a><img src="."'bandera.php?ide=$ide'"."alt="."banderas"." height="."42"." width="."42"."></a></td>";
                                                                                                            echo "<td><a>$pais</a></td>";
                                                                                                            echo "<td><a>$gaf</a></td>";
                                                                                                            echo "<td><a>$gec</a></td>";
                                                                                                            echo "<td><a>$puntos</a></td>";






                                                                                                            echo "</tr>";




                                                                                                        }



                                                                                                        //fin de la conexion a la bd------------------------------------------------------------
                                                                                                        pg_close($link);


                                                                                                         ?>
                                                                        </tbody>
                                                                      </table>
                                                                    </div>
                                                                </div>



                                                                                    <div class="row">
                                                                                      <div class="head_title">
                                                                                          <h1>D</h1>
                                                                                      </div>
                                                                                                    <div class="table-responsive">
                                                                                                      <table class="table">
                                                                                                        <thead>
                                                                                                          <tr>
                                                                                                            <th><h1>bandera</h1></th>
                                                                                                            <th><h1>pais</h1></th>
                                                                                                            <th><h1>goles a favor</h1></th>
                                                                                                            <th><h1>goles en contra</h1></th>
                                                                                                            <th><h1>puntos</h1></th>

                                                                                                          </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                          <?php
                                                                                                                                        $user= "postgres";
                                                                                                                                        $password = "root";
                                                                                                                                        $dbname = "quiniela";
                                                                                                                                        $port = "5432";
                                                                                                                                        $host = "localhost";

                                                                                                                                        $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                                                                                                                                        $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                                                                                                                                        //fin de la conexion -------------------------------------------------------------------------


                                                                                                                                        // session_start();
                                                                                                                                        // $scorreo=$_SESSION['correo'];
                                                                                                                                        $query5 = "SELECT *
                                                                                                                                        FROM equipos
                                                                                                                                        where grupo='d'or grupo='D'
                                                                                                                                        ORDER BY puntose";
                                                                                                                                        $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());

                                                                                                                                        while ($line = pg_fetch_array($result5)) {
                                                                                                                                          $ide = $line['ide'];
                                                                                                                                          $pais = $line['pais'];
                                                                                                                                          $gaf = $line['gaf'];
                                                                                                                                          $gec = $line['gec'];
                                                                                                                                          $puntos = $line['puntose'];






                                                                                                                                            echo "<tr>";

                                                                                                                                            echo "<td><a><img src="."'bandera.php?ide=$ide'"."alt="."banderas"." height="."42"." width="."42"."></a></td>";
                                                                                                                                            echo "<td><a>$pais</a></td>";
                                                                                                                                            echo "<td><a>$gaf</a></td>";
                                                                                                                                            echo "<td><a>$gec</a></td>";
                                                                                                                                            echo "<td><a>$puntos</a></td>";






                                                                                                                                            echo "</tr>";




                                                                                                                                        }



                                                                                                                                        //fin de la conexion a la bd------------------------------------------------------------
                                                                                                                                        pg_close($link);


                                                                                                                                         ?>
                                                                                                        </tbody>
                                                                                                      </table>
                                                                                                    </div>
                                                                                                </div>


                                                                                                                    <div class="row">
                                                                                                                      <div class="head_title">
                                                                                                                          <h1>E</h1>
                                                                                                                      </div>
                                                                                                                                    <div class="table-responsive">
                                                                                                                                      <table class="table">
                                                                                                                                        <thead>
                                                                                                                                          <tr>
                                                                                                                                            <th><h1>bandera</h1></th>
                                                                                                                                            <th><h1>pais</h1></th>
                                                                                                                                            <th><h1>goles a favor</h1></th>
                                                                                                                                            <th><h1>goles en contra</h1></th>
                                                                                                                                            <th><h1>puntos</h1></th>

                                                                                                                                          </tr>
                                                                                                                                        </thead>
                                                                                                                                        <tbody>
                                                                                                                                          <?php
                                                                                                                                                                        $user= "postgres";
                                                                                                                                                                        $password = "root";
                                                                                                                                                                        $dbname = "quiniela";
                                                                                                                                                                        $port = "5432";
                                                                                                                                                                        $host = "localhost";

                                                                                                                                                                        $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                                                                                                                                                                        $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                                                                                                                                                                        //fin de la conexion -------------------------------------------------------------------------


                                                                                                                                                                        // session_start();
                                                                                                                                                                        // $scorreo=$_SESSION['correo'];
                                                                                                                                                                        $query5 = "SELECT *
                                                                                                                                                                        FROM equipos
                                                                                                                                                                        where grupo='e'or grupo='E'
                                                                                                                                                                        ORDER BY puntose";
                                                                                                                                                                        $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());

                                                                                                                                                                        while ($line = pg_fetch_array($result5)) {
                                                                                                                                                                          $ide = $line['ide'];
                                                                                                                                                                          $pais = $line['pais'];
                                                                                                                                                                          $gaf = $line['gaf'];
                                                                                                                                                                          $gec = $line['gec'];
                                                                                                                                                                          $puntos = $line['puntose'];






                                                                                                                                                                            echo "<tr>";

                                                                                                                                                                            echo "<td><a><img src="."'bandera.php?ide=$ide'"."alt="."banderas"." height="."42"." width="."42"."></a></td>";
                                                                                                                                                                            echo "<td><a>$pais</a></td>";
                                                                                                                                                                            echo "<td><a>$gaf</a></td>";
                                                                                                                                                                            echo "<td><a>$gec</a></td>";
                                                                                                                                                                            echo "<td><a>$puntos</a></td>";






                                                                                                                                                                            echo "</tr>";




                                                                                                                                                                        }



                                                                                                                                                                        //fin de la conexion a la bd------------------------------------------------------------
                                                                                                                                                                        pg_close($link);


                                                                                                                                                                         ?>
                                                                                                                                        </tbody>
                                                                                                                                      </table>
                                                                                                                                    </div>
                                                                                                                                </div>




                                                                                                                                                    <div class="row">
                                                                                                                                                      <div class="head_title">
                                                                                                                                                          <h1>F</h1>
                                                                                                                                                      </div>
                                                                                                                                                                    <div class="table-responsive">
                                                                                                                                                                      <table class="table">
                                                                                                                                                                        <thead>
                                                                                                                                                                          <tr>
                                                                                                                                                                            <th><h1>bandera</h1></th>
                                                                                                                                                                            <th><h1>pais</h1></th>
                                                                                                                                                                            <th><h1>goles a favor</h1></th>
                                                                                                                                                                            <th><h1>goles en contra</h1></th>
                                                                                                                                                                            <th><h1>puntos</h1></th>

                                                                                                                                                                          </tr>
                                                                                                                                                                        </thead>
                                                                                                                                                                        <tbody>
                                                                                                                                                                          <?php
                                                                                                                                                                                                        $user= "postgres";
                                                                                                                                                                                                        $password = "root";
                                                                                                                                                                                                        $dbname = "quiniela";
                                                                                                                                                                                                        $port = "5432";
                                                                                                                                                                                                        $host = "localhost";

                                                                                                                                                                                                        $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                                                                                                                                                                                                        $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                                                                                                                                                                                                        //fin de la conexion -------------------------------------------------------------------------


                                                                                                                                                                                                        // session_start();
                                                                                                                                                                                                        // $scorreo=$_SESSION['correo'];
                                                                                                                                                                                                        $query5 = "SELECT *
                                                                                                                                                                                                        FROM equipos
                                                                                                                                                                                                        where grupo='f'or grupo='F'
                                                                                                                                                                                                        ORDER BY puntose";
                                                                                                                                                                                                        $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());

                                                                                                                                                                                                        while ($line = pg_fetch_array($result5)) {
                                                                                                                                                                                                          $ide = $line['ide'];
                                                                                                                                                                                                          $pais = $line['pais'];
                                                                                                                                                                                                          $gaf = $line['gaf'];
                                                                                                                                                                                                          $gec = $line['gec'];
                                                                                                                                                                                                          $puntos = $line['puntose'];






                                                                                                                                                                                                            echo "<tr>";

                                                                                                                                                                                                            echo "<td><a><img src="."'bandera.php?ide=$ide'"."alt="."banderas"." height="."42"." width="."42"."></a></td>";
                                                                                                                                                                                                            echo "<td><a>$pais</a></td>";
                                                                                                                                                                                                            echo "<td><a>$gaf</a></td>";
                                                                                                                                                                                                            echo "<td><a>$gec</a></td>";
                                                                                                                                                                                                            echo "<td><a>$puntos</a></td>";






                                                                                                                                                                                                            echo "</tr>";




                                                                                                                                                                                                        }



                                                                                                                                                                                                        //fin de la conexion a la bd------------------------------------------------------------
                                                                                                                                                                                                        pg_close($link);


                                                                                                                                                                                                         ?>
                                                                                                                                                                        </tbody>
                                                                                                                                                                      </table>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>



                                                                                                                                                                <div class="row">
                                                                                                                                                                  <div class="head_title">
                                                                                                                                                                      <h1>G</h1>
                                                                                                                                                                  </div>
                                                                                                                                                                                <div class="table-responsive">
                                                                                                                                                                                  <table class="table">
                                                                                                                                                                                    <thead>
                                                                                                                                                                                      <tr>
                                                                                                                                                                                        <th><h1>bandera</h1></th>
                                                                                                                                                                                        <th><h1>pais</h1></th>
                                                                                                                                                                                        <th><h1>goles a favor</h1></th>
                                                                                                                                                                                        <th><h1>goles en contra</h1></th>
                                                                                                                                                                                        <th><h1>puntos</h1></th>

                                                                                                                                                                                      </tr>
                                                                                                                                                                                    </thead>
                                                                                                                                                                                    <tbody>
                                                                                                                                                                                      <?php
                                                                                                                                                                                                                    $user= "postgres";
                                                                                                                                                                                                                    $password = "root";
                                                                                                                                                                                                                    $dbname = "quiniela";
                                                                                                                                                                                                                    $port = "5432";
                                                                                                                                                                                                                    $host = "localhost";

                                                                                                                                                                                                                    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                                                                                                                                                                                                                    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                                                                                                                                                                                                                    //fin de la conexion -------------------------------------------------------------------------


                                                                                                                                                                                                                    // session_start();
                                                                                                                                                                                                                    // $scorreo=$_SESSION['correo'];
                                                                                                                                                                                                                    $query5 = "SELECT *
                                                                                                                                                                                                                    FROM equipos
                                                                                                                                                                                                                    where grupo='g' or grupo='G'
                                                                                                                                                                                                                    ORDER BY puntose";
                                                                                                                                                                                                                    $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());

                                                                                                                                                                                                                    while ($line = pg_fetch_array($result5)) {
                                                                                                                                                                                                                      $ide = $line['ide'];
                                                                                                                                                                                                                      $pais = $line['pais'];
                                                                                                                                                                                                                      $gaf = $line['gaf'];
                                                                                                                                                                                                                      $gec = $line['gec'];
                                                                                                                                                                                                                      $puntos = $line['puntose'];






                                                                                                                                                                                                                        echo "<tr>";

                                                                                                                                                                                                                        echo "<td><a><img src="."'bandera.php?ide=$ide'"."alt="."banderas"." height="."42"." width="."42"."></a></td>";
                                                                                                                                                                                                                        echo "<td><a>$pais</a></td>";
                                                                                                                                                                                                                        echo "<td><a>$gaf</a></td>";
                                                                                                                                                                                                                        echo "<td><a>$gec</a></td>";
                                                                                                                                                                                                                        echo "<td><a>$puntos</a></td>";






                                                                                                                                                                                                                        echo "</tr>";




                                                                                                                                                                                                                    }



                                                                                                                                                                                                                    //fin de la conexion a la bd------------------------------------------------------------
                                                                                                                                                                                                                    pg_close($link);


                                                                                                                                                                                                                     ?>
                                                                                                                                                                                    </tbody>
                                                                                                                                                                                  </table>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>

                                                                                                                                                                            <div class="row">
                                                                                                                                                                              <div class="head_title">
                                                                                                                                                                                  <h1>H</h1>
                                                                                                                                                                              </div>
                                                                                                                                                                                            <div class="table-responsive">
                                                                                                                                                                                              <table class="table">
                                                                                                                                                                                                <thead>
                                                                                                                                                                                                  <tr>
                                                                                                                                                                                                    <th><h1>bandera</h1></th>
                                                                                                                                                                                                    <th><h1>pais</h1></th>
                                                                                                                                                                                                    <th><h1>goles a favor</h1></th>
                                                                                                                                                                                                    <th><h1>goles en contra</h1></th>
                                                                                                                                                                                                    <th><h1>puntos</h1></th>

                                                                                                                                                                                                  </tr>
                                                                                                                                                                                                </thead>
                                                                                                                                                                                                <tbody>
                                                                                                                                                                                                  <?php
                                                                                                                                                                                                                                $user= "postgres";
                                                                                                                                                                                                                                $password = "root";
                                                                                                                                                                                                                                $dbname = "quiniela";
                                                                                                                                                                                                                                $port = "5432";
                                                                                                                                                                                                                                $host = "localhost";

                                                                                                                                                                                                                                $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                                                                                                                                                                                                                                $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                                                                                                                                                                                                                                //fin de la conexion -------------------------------------------------------------------------


                                                                                                                                                                                                                                // session_start();
                                                                                                                                                                                                                                // $scorreo=$_SESSION['correo'];
                                                                                                                                                                                                                                $query5 = "SELECT *
                                                                                                                                                                                                                                FROM equipos
                                                                                                                                                                                                                                where grupo='h' or grupo='H'
                                                                                                                                                                                                                                ORDER BY puntose";
                                                                                                                                                                                                                                $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());

                                                                                                                                                                                                                                while ($line = pg_fetch_array($result5)) {
                                                                                                                                                                                                                                  $ide = $line['ide'];
                                                                                                                                                                                                                                  $pais = $line['pais'];
                                                                                                                                                                                                                                  $gaf = $line['gaf'];
                                                                                                                                                                                                                                  $gec = $line['gec'];
                                                                                                                                                                                                                                  $puntos = $line['puntose'];






                                                                                                                                                                                                                                    echo "<tr>";

                                                                                                                                                                                                                                    echo "<td><a><img src="."'bandera.php?ide=$ide'"."alt="."banderas"." height="."42"." width="."42"."></a></td>";
                                                                                                                                                                                                                                    echo "<td><a>$pais</a></td>";
                                                                                                                                                                                                                                    echo "<td><a>$gaf</a></td>";
                                                                                                                                                                                                                                    echo "<td><a>$gec</a></td>";
                                                                                                                                                                                                                                    echo "<td><a>$puntos</a></td>";






                                                                                                                                                                                                                                    echo "</tr>";




                                                                                                                                                                                                                                }



                                                                                                                                                                                                                                //fin de la conexion a la bd------------------------------------------------------------
                                                                                                                                                                                                                                pg_close($link);


                                                                                                                                                                                                                                 ?>
                                                                                                                                                                                                </tbody>
                                                                                                                                                                                              </table>
                                                                                                                                                                                            </div>
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
