<?php include("encabezado.php");
    //header ('Content-type: text/html; charset=utf-8'); 
  // header ('Content-type: text/html; charset=ISO-8859-1');
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro de Usuarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--===============================================================================================--> <!-- ícono pestaña de navegación -->
	<link rel="icon" type="image/png" href="../images/logo.png" /> 
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css"> <!-- íconos de la validación -->
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css"> <!--íconos de los campos -->    
    <!--===============================================================================================--> <!--estilo de la página Web-->	
	<link rel="stylesheet" href="../css/phpstyle.css">		
	<!--===============================================================================================-->
	<!--===============================================================================================-->	<!--estilo de los íconos-->
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>	 
  <div class="wrapper"> <!--sección del formulario con animación -->
	<div class="container"> <!--contenedor del formulario -->
		<h1>Registrar Usuario</h1>	
		<fieldset>		
		<legend>Registro de Usuario</legend>		
		 <form class="login100-form validate-form" action="../php_action/create.php" method="POST">
		   <table id="tabla">
			<tr>	
		     <td><div class="validate-input" data-validate = "Nombre Obligatorio"><h3 class="title_table">Nombre</h3><input class="input100 cajas" type="text" name="fname" placeholder="Nombre" required="required" minlength="3" maxlength="30" /><span class="focus-input100" data-symbol="&#xf206;"></span></div></td>
            
			<td><div class="validate-input" data-validate="Apellidos Obligatorios"><h3 class="title_table">Apellidos</h3><input class="input100 cajas" type="text" name="lname" placeholder="Apellidos" required="required" minlength="3" maxlength="50" /><span class="focus-input100" data-symbol="&#xf206;"></span></div></td>	
            </tr>
            <tr>
        <td><div class="validate-input" data-validate="Correo Obligatorio"><h3 class="title_table">Correo Electrónico</h3>
		<input type="text" name="username" placeholder="Correo Electrónico" class="input100 cajas" required="required" minlength="7" maxlength="50" /><span class="focus-input100" data-symbol="&#9993;"></span></div></td>
         
        <td><div class="validate-input" data-validate="Contraseña obligatoria"><h3 class="title_table">Contraseña</h3>
		<input type="text" name="password" placeholder="Contraseña" class="input100 cajas" required="required" minlength="4" maxlength="16" /><span class="focus-input100" data-symbol="&#xf206;"></span></div></td>
	    </tr>

	    <tr>
		<td><button type="submit"><span class="icon-thumbs-up"></span>Registrar</button></td>
		<td><a href="bienvenida.php"><button type="button"><span class="icon-reply"></span>Regresar</button></a></td>				
		</tr>
		</table>
	</form>
  </fieldset>

     </div>
      <ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>          
					
					<!--<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>				
				</form>-->	
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script> <!--muestra ícono de validación-->
<!--===============================================================================================-->
	<script src="../js/main.js"></script> <!--Programación de las validaciones -->

</body>
</html>