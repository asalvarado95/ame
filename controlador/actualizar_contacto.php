<?php
require_once "../config/conexion.php";
require_once "../modelo/contacto_mod.php";
$contacto = new Contacto_Modelo(
$_POST["d_estudiante"],
$_POST["t_estudiante"],
$_POST["correo"],
$_POST["representante"],
$_POST["afinidad"],
$_POST["d_representante"],
$_POST["t_representante"],
$_POST["t_laboral"],
$_POST["id"]);
$contacto->actualizar_contacto();

header("Location: ../vista/mostrar_estudiantes.php?lista=todo");
?>