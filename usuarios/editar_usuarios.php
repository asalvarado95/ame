<!DOCTYPE HTML>
<html  lang="es">

<head>
<meta name="Gabriela" content="@formulario_estudiantes" />

	<link type="text/css" rel="stylesheet" href="../vista/style/global.css"/>
    <link type="text/css" rel="stylesheet" href="../vista/style/form.css"/>
    <link rel="stylesheet" type="text/css" href="../vista/style/menu.css">
    
    <link rel="icon"  type="image/png" href="../vista/images/logo_color.png"/>
		<title>Gesti&oacute;n de Usuarios</title> 
</head>

<?php
require_once "../config/conexion.php";
require_once "../usuarios/usuario_mod.php";
$usuario=Usuario_Modelo::obtenerUno($_GET['id']);
?>
<hearder>
	<?php include_once('../vista/menu_c.php'); ?>
</hearder>

<body background="../vista/images/background.png"> <br><br>
<div class="top">
<h5>  <img class="iconleft" src="../vista/images/user.png" /><dd>Gesti&oacute;n de Usuarios</dd></h5>
</div>
<br />

<center>
<table class="tablaform table">
<td>
<form method="post" action="../usuarios/usuario_con_editar.php">
 <input class="input" type="hidden" name="id" value="<?php echo $_GET['id']; ?>"><br>
<table>
	<tr>
<b><label>Editar Usuario</label></b><br><br>
	<tr>
		<td>
			<label class="labelcolor">Usuario</label><br>
			<input class="input" type="text" id="usuario" name="usuario" value="<?php echo $usuario->nombre_usuario?>"/> <br /> <br />
		</td>
		<td>
			<label class="labelcolor">Contrase&ntilde;a</label><br>
			<input class="input" type="password" id="contrasena" name="contrasena" value="<?php echo $usuario->contrasena?>"/> <br /> <br />
		</td>
		</td>
	</tr>
</tr>
</table>
<div class="centerfinish">
<input class="finish" type="submit" name="enviar" value="Editar"/> <br>
</div>

</form>

<br>
<br>

</center>
</body>
</html>
