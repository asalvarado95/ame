<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<link type="text/css" rel="stylesheet" href="vista/style/global.css"/>
        <link rel="stylesheet" type="text/css" href="vista/style/form.css">
        <link rel="stylesheet" type="text/css" href="vista/style/login.css">
        <link rel="icon"  type="image/png" href="vista/images/logo_color.png"/>
<title>Iniciar Sesi&oacute;n</title>
</head>

<body background="vista/images/background.png">

<div class="container">
	<div class="body">

<div class="top">
<img class="iconleft uetf" src="vista/images/uetf.png" />
<h5> &nbsp; &nbsp; &nbsp; &nbsp;Unidad Educativa Trinidad Figueira</h5>
</div>

			<ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="vista/images/t1.png" />
        </div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="vista/images/t2.png" />
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="vista/images/t3.png" />
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="vista/images/t4.png" />
        </div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="vista/images/t5.png" />
        </div>
		<div class="nav">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    </li>

      <li class="dowm">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
		</div><!-- class body-->

<div class="formarea">
	<table class="tablaform logincontainer">
		<td>
			
				<div class="formarea">
				<center>
				<img class="imagotipo" src="vista/images/imagotipo.png"/><br /><br />
			
				<p>¡Bienvenido a AME!</p>
			<p>Aplicaci&oacute;n de Matriculaci&oacute;n Estudiantil</p>
			</center>

  <form method="post" action="config/bd.php">    
			<label class="labelcolor">Usuario:</label><br />
			   <input class="input" type="text" id="usuario" name="usuario"> <br /><br />

      <label class="labelcolor">Contrase&ntilde;a:</label><br />
         <input class="input" type="password" id="contrasena" name="contrasena"> <br /><br />

                	<div class="centerfinish">
                <input  class="finish" type="submit" name="enviar" value="Iniciar Sesi&oacute;n"/>
  </form>              
<br /><br /> <br />
            


</td>
</table>
</div><!-- formarea -->
</body>
</html>