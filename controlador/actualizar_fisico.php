<?php
require_once "../config/conexion.php";
require_once "../modelo/fisico_mod.php";
$fisico = new Fisico_Modelo(
$_POST["altura"],
$_POST["peso"],
$_POST["camisa"],
$_POST["pantalon"],
$_POST["zapato"],
$_POST["lateralidad"],
$_POST["condicion_f"],
$_POST["sangre"],
$_POST["id"]
);
$fisico->actualizar_fisico();

header("Location: ../vista/mostrar_estudiantes.php?lista=todo");
?>