<?php include("encabezado.php");
   require_once '../php_action/db_connect.php'; 
   //header ('Content-type: text/html; charset=utf-8');
   //header ('Content-type: text/html; charset=ISO-8859-1');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Actualización de Datos</title>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!--<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />-->
    <!--===============================================================================================--> <!-- ícono pestaña de navegación -->
	<link rel="icon" type="image/png" href="../images/logo.png" /> 
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css"> <!-- íconos de la validación -->
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css"> <!--íconos de los campos -->
    <!--===============================================================================================-->	<!--estilo de los íconos-->
	<link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================--> <!--estilo de la página Web-->	
	<link rel="stylesheet" href="../css/phpstyle.css">		
	<!--===============================================================================================-->
</head>
<body>
<div class="wrapper"> <!--sección del formulario con animación -->
  <div class="container"> <!--contenedor del formulario -->
  	<h1 class="title_section">Actualización de Datos</h1>
   <fieldset>
	 <legend>Editar Usuario</legend>
	 <form class="login100-form validate-form" action="../php_action/update.php" method="POST">	 	 
		<table id="tabla">
			<tbody>
			  <?php 
              if($_GET['id']) {
	          $id = $_GET['id'];
	          $sql = "SELECT * FROM usuarios WHERE id = {$id}";
	          $result = $connect->query($sql);
	          $data = $result->fetch_assoc();
	          $connect->close();
              } 
              ?>            	
            </tbody>
			<tr>				
			<td><div class="validate-input" data-validate = "Nombre Obligatorio"><h3 class="title_table">Nombre</h3>
			<input type="text" class="input100 cajas" name="fname" placeholder="Nombre" value="<?php echo $data['nombre'] ?>" required="required" minlength="3" maxlength="30" /><span class="focus-input100 cajas" data-symbol="&#xf206;"></span></div></td>
			
			<td><div class="validate-input" data-validate = "Apellidos Obligatorio"><h3 class="title_table">Apellidos</h3>
			<input type="text" class="input100 cajas" name="lname" placeholder="Apellidos" value="<?php echo $data['apellidos'] ?>" required="required" minlength="3" maxlength="50"/><span class="focus-input100" data-symbol="&#xf206;"></span></div></td>
			</tr>			
			<tr>
		<td><div class="validate-input" data-validate="Correo Obligatorio"><h3 class="title_table">Correo Electrónico</h3>
		<input type="text" class="input100 cajas" name="username" placeholder="Correo Electrónico" value="<?php echo $data['usuario'] ?>"  required="required" minlength="7" maxlength="50"/><span class="focus-input100" data-symbol="&#9993;"></span></div></td>	

		<td><div class="validate-input" data-validate="Contraseña obligatoria"><h3 class="title_table">Contraseña</h3>
		<input type="text" class="input100 cajas" name="password" placeholder="Contraseña" value="<?php echo $data['clave'] ?>" required="required" minlength="4" maxlength="16"/><span class="focus-input100" data-symbol="&#xf206;"></span></div></td>
		</tr>			
		<tr>
		<td><button type="submit"><span class="icon-thumbs-up"></span>Guardar Cambios</button></td>
		<td><a href="bienvenida.php"><button type="button"><span class="icon-reply"></span>Regresar</button></a></td>
			</tr>		
		</table>
		<input type="hidden" name="id" value="<?php echo $data['id']?>" />
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
</body>
    <!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script> <!--muestra ícono de validación-->
    <!--===============================================================================================-->
	<script src="../js/main.js"></script> <!--Programación de las validaciones -->
</html>

