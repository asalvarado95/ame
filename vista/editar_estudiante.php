<!DOCTYPE html>
<html  lang="es">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../vista/style/form.css">
    <link rel="stylesheet" type="text/css" href="../vista/style/global.css">
    <link type="text/css" rel="stylesheet" href="../vista/style/formulaimc.css"/>
    <link rel="stylesheet" type="text/css" href="../vista/style/menu.css">
    <link rel="icon"  type="image/png" href="../vista/images/logo_color.png"/>
        <title>Estudiante</title> 
</head>
<?php
include_once "../config/conexion.php";
include_once "../modelo/estudiante_mod.php";
include_once "../modelo/fisico_mod.php";
include_once "../modelo/contacto_mod.php";

$estudiante = Estudiante_Modelo::obtenerUno($_GET['id']);
$fisico=Fisico_Modelo::obtenerUno($_GET['id']);
$contacto=Contacto_Modelo::obtener_contacto($_GET['id']);
?>
<header>
    <div>
    <nav>
        <ul>
        <img class="logomenu" src="../vista/images/Logo.png"/>
        <label style="color:#fff; float:left; margin-top: 0.7em; margin-left: 3em;">
        <?php  
            echo $estudiante->nombre." ".$estudiante->apellido." - ".$estudiante->cedula." ".$estudiante->ano.$estudiante->secc;        
        ?></label>
            <li><a href="../vista/inicio.php"><img class="image" src="../vista/images/inicio.png"/> &nbsp;Inicio</a></li>    
            
            <li><a href="#"> <img class="image" src="../vista/images/configuracion.png"/> &nbsp;  Configuraci&oacute;n</a>
                
               <ul>
                <li><a href="#"> <img class="image" src="../vista/images/estudiantes.png"/> &nbsp; Estudiantes</a></li>
                <li><a href="#fisico"> <img class="image" src="../vista/images/salud_blanco.png"/> &nbsp; Salud y F&iacute;sicos</a></li>
                <li><a href="#contacto"> <img class="image" src="../vista/images/ubicacion_blanco.png"/> &nbsp; Contacto</a></li>
             </ul></li>
            
            <li><a href="#"> <img class="image" src="../vista/images/movimientos.png"/> &nbsp; Movimientos</a>
               <ul>
                <li><a href="../vista/formulario_registro_estudiante.php"><img class="image" src="../vista/images/inscripcion.png"/> &nbsp; Inscripci&oacute;n</a>
                  
                <li><a href="../vista/mostrar_estudiantes.php?lista=todo"> <img class="image" src="../vista/images/buscar.png"/> &nbsp;Reportes</a>
                </li>
                </li>
               </ul>
            
            <li><a href="#"> <img class="image" src="../vista/images/sesion.png"/> &nbsp; Sesi&oacute;n</a>
            <ul>
            <li><a href="../usuarios/mostrar_usuarios.php"><img class="image" src="../vista/images/usuario_blanco.png"/> &nbsp; Usuario </a></li>
            <li><a href="../config/cerrar.php"> <img class="image" src="../vista/images/salir.png"/> &nbsp; Salir </a></li>
            </ul></li>

       </ul> 
    </nav>
</div>
</header> <br /> <br />

<body background="../vista/images/background.png">
<br />
<div class="top">
        <h5 id="estudiante"><img class="iconleft" src="../vista/images/estudiante_azul.png" /><dd>Editar Estudiante</dd></h5>
		
        </div>			
       
     <!-- * * * * * * * * * * * * * ACTUALIZA DATOS ESTUDIANTE * * * * * * * * * * *  -->  
	<form action="../controlador/actualizar_estudiante.php" method="POST">
            <input class="input" type="hidden" name="id" value="<?php echo $_GET['id']; ?>"><br>
<center><br><br>
    <table class="tablaform">
                <tr>
                    <td>
                        <label for="cedula">Cedula:</label><br>
                        <input class="input" value="<?php echo $estudiante->cedula ?>" 
                        name="cedula" required type="text" id="cedula"placeholder="Cedula"><br><br>
                    </td>
                    <td>
                        <label for="nombre">Nombre:</label><br>
                        <input class="input" value="<?php echo $estudiante->nombre ?>"
                        name="nombre" required type="text" id="nombre"placeholder="Nombre"><br><br>
                    <td> 
                        <label for="apellido">Apellido:</label><br>
                        <input class="input" value="<?php echo $estudiante->apellido ?>" 
				        name="apellido" required type="text" id="apellido"placeholder="Apellido"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gen">Genero:</label><br>
                        <input class="input" value="<?php echo $estudiante->gen ?>" 
                        name="gen" required type="text" id="gen"placeholder="M ó F"><br><br>
                    </td>
                    <td>
                        <label for="nac">F. Nac:</label><br>
                        <input class="input" value="<?php echo $estudiante->nac ?>" 
                        name="nac" required type="date" id="nac"placeholder="Fecha Nacimiento"><br><br>
                    </td>
                    <td>
                        <label for="ano">Año:</label><br>
                        <input class="input" value="<?php echo $estudiante->ano ?>" 
                        name="ano" required type="text" id="ano"placeholder="Año"><br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="asecc">Seción:</label><br>
                        <input class="input" value="<?php echo $estudiante->secc ?>" 
                        name="secc" required type="text" id="secc"placeholder="Seccion"><br><br>
                    </td>
                    <td>
                        <label for="asecc">Estatus</label><br>
                        <input class="input" value="<?php echo $estudiante->estatus ?>" 
                        name="estatus"  type="text" id="estatus"placeholder="Estatus"><br><br>
                    </td>
                    <td>
                        <label for="asecc">F. Estatus</label><br>
                        <input class="input" value="<?php echo $estudiante->f_estatus ?>" 
                        name="f_estatus"  type="date" id="f_estatus"placeholder="F. Estatus"><br><br>
                    </td>
                </tr>
  </table>
            <div class="centerfinish">
                <button class="finish" type="submit">Guardar</button>
            </div>
			</div>
        </form>

<!-- *  *  *  *  *  *  *  *  *  *  *  *   ACTUALIZA DATOS CONTACTO *  *  *  *  *  *  *  *  *  *  * -->
<div class="top">
<h5 id="contacto">  <img class="iconleft" src="../vista/images/ubicacion_azul.png" /><dd>Contacto</dd></h5>
</div>
<br />

<table class="tablaform table">
<td>

<form action="../controlador/actualizar_contacto.php" method="post">
<input class="input" type="hidden" name="id" value="<?php echo $_GET['id']; ?>"><br>
<table style="margin-left: 4em;">
    <tr>
        <td>
            <label class="labelcolor">Direcci&oacute;n del Estudiante</label><br />
            <input class="input" type="text" value="<?php echo $contacto->d_estudiante?>" name="d_estudiante" id="d_estudiante" /> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Tel&eacute;fono del Estudiante</label><br />
            <input class="input" type="text" name="t_estudiante" id="t_estudiante" value="<?php echo $contacto->t_estudiante?>"/> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Correo Electr&oacute;nico</label> <br />
            <input class="input" type="correo" name="correo" id="correo" value="<?php echo $contacto->correo?>"/> <br /> <br />
        </td>
    </tr>

    <tr>
        <td>
            <label class="labelcolor">Nombre y Apellido del Representante</label><br />
            <input class="input" type="text" name="representante"  id="representante" value="<?php echo $contacto->representante?>"/> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Afinidad</label><br />
            <input class="input" type="text" name="afinidad" id="afinidad" value="<?php echo $contacto->afinidad?>"/> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Direcci&oacute;n de Habitaci&oacute;n</label><br />
            <input class="input" type="text" name="d_representante" id="d_representante" value="<?php echo $contacto->d_representante?>" /> <br /><br />
        </td>
    </tr>

    <tr>

        <td>
            <label class="labelcolor">Tel&eacute;fono del Representante</label><br />
            <input class="input" type="text" name="t_representante" id="t_representante" value="<?php echo $contacto->t_representante?>"/> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Tel&eacute;fono Laboral</label><br />
            <input class="input" type="text" name="t_laboral" id="t_laboral" value="<?php echo $contacto->t_laboral?>"/> <br /> <br />
        </td>
            </tr>
</table>
            <div class="centerfinish">
                <button class="finish" type="submit">Guardar</button>
            </div>
            </div>
</form>


<!-- * * * * * * * * * * * * * * * * * * ACTUALICA DATOS FISICOS * * * * * * * * * * * * * * * * * * *  -->

    <div class="top">
<h5 style="margin-left:-3em;" id="fisico"><img class="iconleft" src="images/salud_fisicos.png" /><dd>Salud y Físicos</dd></h5>

</div>
<br />
<table class="tablaform">
<td>
<form action="../controlador/actualizar_fisico.php" method="post">
    <input class="input" type="hidden" name="id" value="<?php echo $_GET['id']; ?>"><br>
<center>
<table>
    <tr>
        <td>
            <label class="labelcolor">Altura (metros)</label><br />
            <input class="input" type="text" id="altura" name="altura" 
            value="<?php echo $fisico->altura ?>"
             /> <br />  <br />
        </td>
        <td>
            <label class="labelcolor">Peso (kilogramos)</label><br />
            <input class="input" type="text" id="peso" name="peso" value="<?php echo $fisico->peso ?>"/> <br /> <br />
        </td>
        <td>
            <center><img class="formulaimc_e" src="images/imc.png"/><br /><br /></center>
           <label><?php           
           $peso=$fisico->peso;
           $altura=($fisico->altura);

           if ($altura>0){
			$imc=$peso/($altura*$altura);
            $imc=number_format($imc, 2);}
            else{
            $imc="";
        	}

        	echo "IMC = ".$imc."  ";
    switch($imc){
    	case ($imc<18.5):
    	echo '<span style=color:#2a95a1> Bajo Peso';
    	break;
    	case ($imc>24.99):
    	echo '<span style=color:#c92828> Sobrepeso';
    	break;
    	default:
    	echo '<span style=color:#29ab50> Peso Normal';    	
    }
 ?>
        
        </label> 
        </td>       
    </tr>

    <tr>
        <td>
            <label class="labelcolor">Talla Camisa</label><br />
            <input class="input" type="text"  value="<?php echo $fisico->camisa ?>" id="camisa" name="camisa"/> <br />  <br />
        </td>
        <td>
            <label class="labelcolor"> Talla Pantalón</label><br />
            <input class="input" type="text" id="pantalon" name="pantalon" value="<?php echo $fisico->pantalon ?>"/> <br /> <br /> 
        </td>
        <td>
            <label class="labelcolor">Talla Zapatos</label><br />
            <input class="input" type="text" id="zapato" name="zapato" value="<?php echo $fisico->zapato ?>"/> <br /> <br /> 
        </td>
    </tr>

    <tr>
        <td>
            <label class="labelcolor"> Dominio de Lateralidad</label><br />
            <input class="input" type="text" id="lateralidad" name="lateralidad" value="<?php echo $fisico->lateralidad ?>"/>
            <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Condici&oacute;n</label><br />
            <input class="input" type="text" id="condicion_f" name="condicion_f" value="<?php echo $fisico->condicion_f ?>"/> <br /> <br />
        </td>
        <td>
            <label class="labelcolor"> Grupo Sanguíneo</label> <br />
            <input class="input" type="text" id="sangre" name="sangre" value="<?php echo $fisico->sangre ?>"/>
             <br /> <br />
        </td>
    </tr>

</table>    
    
<div class="centerfinish">
<input class="finish" type="submit" name="guardar" value="Guardar"/> 
</div>
</center>
</form>

</body>
</html>