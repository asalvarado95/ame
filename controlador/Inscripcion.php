<?php
require_once "../config/conexion.php";
require_once "../modelo/estudiante_mod.php";
require_once "../modelo/fisico_mod.php";
require_once "../modelo/contacto_mod.php";

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

$fisico = new Fisico_Modelo(
$_POST["altura"],
$_POST["peso"],
$_POST["camisa"],
$_POST["pantalon"],
$_POST["zapato"],
$_POST["lateralidad"],
$_POST["condicion_f"],
$_POST["sangre"]);
$fisico->guardar_fisico();

$contacto = new Contacto_Modelo(
$_POST["d_estudiante"],
$_POST["t_estudiante"],
$_POST["correo"],
$_POST["representante"],
$_POST["afinidad"],
$_POST["d_representante"],
$_POST["t_representante"],
$_POST["t_laboral"]);
$contacto->guardar_contacto();

header("Location: ../vista/mostrar_estudiantes.php?lista=todo");
