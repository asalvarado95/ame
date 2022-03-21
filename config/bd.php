<?php

$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "ame";

$user=$_POST['usuario'];
$pass=$_POST['contrasena'];

$mysqli = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($mysqli->connect_error) {
  die(header("location:../vista/error.html"));}
if ($result = $mysqli->query("SELECT * FROM usuarios where nombre_usuario='$user' and contrasena='$pass'")) {
  
    $row_cnt = $result->num_rows;  
	if ($row_cnt==1){
		header("Location:../vista/inicio.php");		
	}else{
		header("Location:../vista/error_conex.html");
	}}


?>
