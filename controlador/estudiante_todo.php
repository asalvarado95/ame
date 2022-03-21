<?php
include_once "../modelo/estudiante_mod.php";
$estudiantes = Estudiante_Modelo::obtener();

header("Location: ../vista/mostrar_estudiantes.php");
?>