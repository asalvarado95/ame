<!DOCTYPE html>
<html  lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../vista/style/form.css">
    <link rel="stylesheet" type="text/css" href="../vista/style/global.css">
    <link rel="icon"  type="image/png" href="../vista/images/logo_color.png"/>
        <link type="text/css" rel="stylesheet" href="../vista/style/formulaimc.css"/>
        <title>Estudiante</title> 
</head>

<?php   
		include "../vista/menu_c.php"; 
?>
<body background="../vista/images/background.png"><br><br>

    <div class="top">
        <h5><img class="iconleft" src="../vista/images/estudiante_azul.png" /><dd>Inscripci&oacute;n de estudiante</dd></h5> <br>
    </div>
        <form action="../controlador/inscripcion.php" method="post">
            <center>

            <table class="tablaform">
                <tr>
                    <td>
                        <label for="cedula">Cedula:</label><br>
                        <input class="input" name="cedula" required type="text" 
                        id="cedula" placeholder="Cedula"><br><br>
                    </td>
                    <td>
			            <label for="nombre">Nombre:</label><br>
                        <input class="input" name="nombre" required type="text" 
                        id="nombre" placeholder="Nombre"><br><br>
                    </td>
                    <td>
                        <label for="grupo">Apellido:</label><br>
                        <input class="input" name="apellido" required type="text" 
                        id="apellido" placeholder="Apellido"><br><br>
                    </td>
		        </tr>
                <tr>
                    <td>
                        <label for="gen">Genero:</label><br>
                        <input class="input" name="gen" required type="text" 
                        id="gen" placeholder="Genero"><br><br>
                    </td>
                    <td>
                        <label for="nac">F. Nacimiento:</label><br>
                        <input class="input" name="nac" required type="date" 
                        id="nac" placeholder="Fecha de Nacimiento"><br><br>
                    </td>
                    <td>
                        <label for="ano">Año:</label><br>
                        <input class="input" name="ano" required type="text" 
                        id="ano" placeholder="Año"><br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="secc">Seccion:</label><br>
                        <input class="input" name="secc" required type="text" 
                        id="secc" placeholder="Seccion"><br><br>
                    </td>
                    <td>
                        <label for="secc">Estatus:</label><br>
                        <input class="input" name="estatus"  type="text" 
                        id="estatus" placeholder="Estatus"><br><br>
                    </td>
                    <td>
                        <label for="secc">F. Estatus:</label><br>
                        <input class="input" name="f_estatus"  type="text" 
                        id="f_estatus" placeholder="Estatus"><br><br>
                    </td>
                </tr>
</table>
            </center>

<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<div class="top">
<h5>  <img class="iconleft" src="../vista/images/ubicacion_azul.png" /><dd>Contacto</dd></h5>
</div>
<br />

<table class="tablaform table" style="margin-left:6em">
<td>
<table>
    <tr>
        <td>
            <label class="labelcolor">Direcci&oacute;n del Estudiante</label><br />
            <input class="input" type="text" name="d_estudiante"/> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Tel&eacute;fono del Estudiante</label><br />
            <input class="input" type="text" name="t_estudiante"/> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Correo Electr&oacute;nico</label> <br />
            <input class="input" type="correo" name="correo"/> <br /> <br />
        </td>
    </tr>

    <tr>
        <td>
            <label class="labelcolor">Nombre y Apellido del Representante</label><br />
            <input class="input" type="text" name="representante"/> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Afinidad</label><br />
            <input class="input" type="text" name="afinidad"/> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Direcci&oacute;n de Habitaci&oacute;n</label><br />
            <input class="input" type="text" name="d_representante" /> <br /><br />
        </td>
    </tr>

    <tr>

        <td>
            <label class="labelcolor">Tel&eacute;fono del Representante</label><br />
            <input class="input" type="text" name="t_representante" /> <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Tel&eacute;fono Laboral</label><br />
            <input class="input" type="text" name="t_laboral"/> <br /> <br />
        </td>
            </tr>
</table>

</td>
</table>

<!-- * * * * * * ** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->

    <div class="top">
<h5 id="fisico"><img class="iconleft" src="../vista/images/salud_fisicos.png" /><dd>Salud y Físicos</dd></h5>

</div>
<br />
<table class="tablaform">
<td>
<center>
<table>
    <tr>
        <td>
            <label class="labelcolor">Altura (metros)</label><br />
            <input class="input" type="text" id="altura" name="altura"/> <br />  <br />
        </td>
        <td>
            <label class="labelcolor">Peso (kilogramos)</label><br />
            <input class="input" type="text" id="peso" name="peso"/> <br /> <br />
        </td>
        <td>
            <img class="formulaimc" src="images/imc.png"/><br /><br />
        </td>       
    </tr>

    <tr>
        <td>
            <label class="labelcolor">Talla Camisa</label><br />
            <input class="input" type="text" id="camisa" name="camisa"/> <br />  <br />
        </td>
        <td>
            <label class="labelcolor"> Talla Pantalón</label><br />
            <input class="input" type="text" id="pantalon" name="pantalon"/> <br /> <br /> 
        </td>
        <td>
            <label class="labelcolor">Talla Zapatos</label><br />
            <input class="input" type="text" id="zapato" name="zapato"/> <br /> <br /> 
        </td>
    </tr>

    <tr>
        <td>
            <label class="labelcolor"> Dominio de Lateralidad</label><br />
            <input class="input" type="text" id="lateralidad" name="lateralidad"/>
            <br /> <br />
        </td>
        <td>
            <label class="labelcolor">Condici&oacute;n</label><br />
            <input class="input" type="text" id="condicion_f" name="condicion_f"> <br /> <br />
        </td>
        <td>
            <label class="labelcolor"> Grupo Sanguíneo</label> <br />
            <input class="input" type="text" id="sangre" name="sangre"/>
             <br /> <br />
        </td>
    </tr>

</table>    
    
<div class="centerfinish">
<input class="finish" type="submit" name="guardar" value="Guardar"/> 
</div>
</center>
</form>