<?php
require_once "../config/conexion.php";
require_once "../modelo/estudiante_mod.php";
$estudiante = new Estudiante_Modelo(
	$_POST["cedula"],
	$_POST["nombre"],
	$_POST["apellido"],
	$_POST["gen"],
	$_POST["nac"],
	$_POST["ano"],
	$_POST["secc"],
	$_POST["estatus"],
	$_POST["f_estatus"]);
$estudiante->guardar();
header("Location: ../vista/mostrar_estudiantes.php?lista=todo");
