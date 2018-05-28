
<?php
session_abort();
$_SESSION['correo']  = null;
header("location: /quiniela/");

?>
