<?php

$host = "localhost";
$usuario = 'root';
$contrasena = '';
$base_de_datos = "ame";

$mysqli = new mysqli($host, $usuario, $contrasena, $base_de_datos);
$mysqli->set_charset("utf8");
if ($mysqli->connect_error) {
  die(header("location:../vista/error.html"));
}


?>
