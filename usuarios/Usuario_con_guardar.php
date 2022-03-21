<?php

require_once "../config/conexion.php";
require_once "../usuarios/usuario_mod.php";

$usuario = new Usuario_Modelo(
	$_POST["usuario"],
	$_POST["contrasena"],);
$usuario->guardar_usuario();

header("Location: ../usuarios/mostrar_usuarios.php");

