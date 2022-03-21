<?php

require_once "../config/conexion.php";
require_once "../usuarios/usuario_mod.php";

global $mysqli;
$id = $_POST['id'];

if ($id!=1){
$sql = "DELETE FROM usuarios WHERE id = ".$_POST['id'].";";
$resultado = $mysqli->query($sql);

}
if ($id==1){
	header("Location: ../vista/error_elim.html");
}else{
	header("Location: ../usuarios/mostrar_usuarios.php");
}


