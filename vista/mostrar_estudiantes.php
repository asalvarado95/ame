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
include_once "../modelo/estudiante_mod.php";

$lista=$_GET['lista'];
if(!empty($lista)){

if ($lista = "todo") {
$estudiantes = Estudiante_Modelo::obtener();
$contar_m=Estudiante_Modelo::contar_masculino();
$contar_f=Estudiante_Modelo::contar_femenino();

$contar_i=Estudiante_Modelo::contar_ingreso_todo();
$contar_e=Estudiante_Modelo::contar_egreso_todo();
}
}

if ($_POST){	
	$select_escolar=$_POST["select_escolar"];
	$select_secc=$_POST["select_secc"];
	$select_gen=$_POST["select_gen"];
	$seleccion=$select_escolar&$select_secc;
    $buscar=$_POST['buscar'];
	}
	
if (!empty($select_escolar) or !empty($select_secc) or !empty($select_gen)){

$estudiantes = Estudiante_Modelo::obtener_seleccionado();
$contar_m=Estudiante_Modelo::contar_masculino_seleccion();
$contar_f=Estudiante_Modelo::contar_femenino_seleccion();

$contar_i=Estudiante_Modelo::contar_ingreso_seleccion();
$contar_e=Estudiante_Modelo::contar_egreso_seleccion();
}

if(empty($_POST['buscar'])){
}  else{
    $estudiantes = Estudiante_Modelo::buscar_apellido();       
} 
if(empty($_POST['cedula'])){
}  else{
    $estudiantes = Estudiante_Modelo::buscar_cedula();       
} 

if(empty($_POST['estatus'])){
}  else{
    $estudiantes = Estudiante_Modelo::buscar_estatus();       
} 
?>

<body background="../vista/images/background.png"><br><br>
<div class="top">
<h5>  <img class="iconleft" src="../vista/images/estudiante_azul.png" /><dd>Reporte de Estudiantes</dd></h5>
</div>
<br />
<center>
<form action="../vista/mostrar_estudiantes.php?lista=seleccion" method="post">
      <div id="menu">            
            
            <label class="move">C&eacute;dula</label>
            <input style="width: 10em;" class="input" name="cedula" id="cedula"/>

            
            <label class="move">Apellido</label>
            <input style="width: 10em;" class="input" name="buscar" id="buscar"/>
            
            <label class="move">A&ntilde;o:</label>
            <select style="width: 7em;" name="select_escolar">
            <option value="">todos</option>
            <option value="1">1</option>            
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
            
            <label class="move">Secci&oacute;n:</label>
            <select style="width: 7em;" name="select_secc">
            <option value="">todas</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            </select>

            <label class="move">G&eacute;nero:</label>
            <select style="width: 7em;" name="select_gen">
            <option value="">Ambos</option>
            <option value="M">M</option>
            <option value="F">F</option>
            </select> 

            <label class="move">Estatus</label>
            <select style="width: 7em;" name="estatus">
            <option value="">todos</option>
            <option value="ingreso">Ingreso</option>            
            <option value="egreso">Egreso</option>
            </select>

            &nbsp;&nbsp;
     
            <input class="finish" type="submit" name="submit" value="Buscar" />                  
        
        </div>      
    </form><br><br>

   <table cellspacing="0" >  
            <thead>
                <tr>				    
					<th class="medium">Cedula</th>
                    <th class="large">Nombre</th>
                    <th class="large">Apellido</th>
					<th class="short">Genero</th>
					<th class="medium">F. Nac.</th>
                    <th class="short">Edad.</th>
					<th class="short">A&ntilde;o</th>
                    <th class="short">Seccion</th>  
                    <th class="medium">Estatus</th>
                    <th class="medium">F. Estatus</th>                   
                    <th class="medium">Editar</th>                    
                </tr>
            </thead>
            <label>Total: <?php echo $contar_f[0]+$contar_m[0] ?></label> &nbsp;&nbsp;&nbsp;
            <label>Total Masculinos: <?php echo $contar_m[0] ?></label>&nbsp;&nbsp;&nbsp;
            <label>Total Femeninos: <?php echo $contar_f[0] ?></label> &nbsp;&nbsp;&nbsp;
            <label>Total Ingreso: <?php echo $contar_i[0] ?></label> &nbsp;&nbsp;&nbsp;
            <label>Total Egreso: <?php echo $contar_e[0] ?></label> &nbsp;&nbsp;&nbsp;
            <label>Total Movilidad: <?php echo $contar_i[0]+$contar_e[0] ?></label>
            <br /> <br />

            <tbody>
               
                <?php foreach ($estudiantes as $estudiante) { 
 
            $f_nacimiento = new DateTime($estudiante['nac']);
            $hoy = new DateTime();
            $edad = $hoy->diff($f_nacimiento); ?>
                
                    <tr>						
					    <td class="medium"><?php echo $estudiante["cedula"]; ?></td>
                        <td class="large"><?php echo $estudiante["nombre"]; ?></td>
                        <td class="large"><?php echo $estudiante["apellido"]; ?></td>
						<td class="short"><?php echo $estudiante["gen"]; ?></td>
                        <td class="medium"><?php echo $estudiante["nac"]; ?></td>
                        <td class="short"><?php echo $edad->y; ?></td>
						<td class="short"><?php echo $estudiante["ano"]; ?></td>
                        <td class="short"><?php echo $estudiante["secc"]; ?></td>
                        <td class="medium"><?php echo $estudiante["estatus"]; ?></td>
                        <?php
                        if ($estudiante['f_estatus']=""){
                            $estudiante['f_estatus']="";
                        }
                        ?>
                        <td class="medium"><?php echo $estudiante["f_estatus"]; ?></td>						
                        
                        <td class="medium">
                            <a style="margin-top: 6em; " href="../vista/editar_estudiante.php?id=<?php echo $estudiante['id']; ?>" class=finish>
                                Editar
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

    