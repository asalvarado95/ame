<!DOCTYPE html>
<html  lang="es">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/ame/vista/style/tablas.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/ame/vista/style/form.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/ame/vista/style/global.css">
    <link rel="icon"  type="image/png" href="http://localhost/ame/vistas/images/logo_color.png"/>
        <title>Reportes</title> 
</head>

<?php
include_once "../config/conexion.php";
include_once "../vista/menu_c.php";
include_once "../usuarios/usuario_mod.php";
$usuarios=Usuario_Modelo::obtener();
?>	

<body background="http://localhost/ame/vista/images/background.png">
    <br><br>
<div class="top">
<h5>  <img class="iconleft" src="http://localhost/ame/vista/images/user.png" /><dd>Usuarios</dd></h5>
</div>
<br />
<a style="float: right; margin-right: 5em;" href="../usuarios/nuevo_usuario.php?>" class="finish">Nuevo </a><br> <br> <br><br>
<center>


   <table style="width: 70%;" cellspacing="0" >  
            <thead>
                <tr>				    
					<th style="width: 4em;" >ID</th>
                    <th style="width: 8em;">Nombre</th> 
                    <th style="width: 6em;">Opci&oacute;n</th>

                </tr>
            </thead>            

            <tbody class="limit">
               
                <?php foreach ($usuarios as $usuario) {  
          ?>

                    <tr>						
					    <td style="width: 4em;"><?php echo $usuario["id"]; ?></td>
                        <td style="width: 8em;"><?php echo $usuario["nombre_usuario"]; ?></td>
                      
                        <td style="width: 6em;">
                            <a style="float: left;" href="../usuarios/editar_usuarios.php?id=<?php echo $usuario['id']; ?>" class="finish">
                                Editar
                            </a>

                            <a style="float: right"; href="../usuarios/eliminar_usuarios.php?id=<?php echo $usuario['id']; ?>" class="finish">
                                Eliminar
                            </a>
                        </td>
                       
                    </tr>
					
                <?php }
				
				?>
            </tbody>
        </table>
    </center>
    </div>
</div>

    