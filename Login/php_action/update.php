<?php include("../vista_php/mensajes.php");
require_once 'db_connect.php';
   //header ('Content-type: text/html; charset=utf-8'); 
   //header ('Content-type: text/html; charset=ISO-8859-1');

if($_POST) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$id = $_POST['id'];	

	 if($fname=="" || $lname=="" || $username=="" || $password==""){
		$msg= "Los campos con * son de caracter obligatorio.";
		msgError($msg); 
        echo'<!DOCTYPE html>';
        echo '<html lang="es">';
		echo '<head>';       
		echo '<title>Error al editar el registro</title>';	
		echo '<link rel="stylesheet" href="../css/fonts.css">';
		echo '<link rel="stylesheet" href="../css/phpstyle.css">';
		echo '</head>';
		echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
        echo '<h1 class="title_table">Error al editar el usuario.</h1>';
        echo '<h3>Los campos con * son de caracter obligatorio</h3>';
		echo "<a href='../vista_php/edit.php'><button type='button'><span class='icon-reply'></span>Regresar</button></a>";
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</body>';	        				        
	}else{
	$sql  = "UPDATE usuarios SET nombre = '$fname', apellidos = '$lname', usuario = '$username', clave = '$password' WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		//mensaje de confirmación.
		$msg="Registro editado correctamente.";
		msgOk($msg);		
		echo '<!DOCTYPE html>';
		echo '<html lang="es">';
		echo '<head>';		
		echo '<title>Actualización exitosa</title>';	
		echo '<link rel="stylesheet" href="../css/fonts.css">'; 
		echo '<link rel="icon" type="image/png" href="../images/logo.png" />';
		echo '</head>';
        echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
      echo '<h1 class="title_section">El registro fue editado</h1>';
		echo "<a href='../vista_php/edit.php?id=".$id."'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-reply'></span>Regresar</button></a>";
		echo "<a href='../vista_php/bienvenida.php'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-home'></span>Inicio</button></a>";
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</body>';		
        echo '</html>';
	} else {
		$msg="No se logró editar el registro.";
		msgError($msg);
		echo '<head>';		
		echo '<title>Error al actualizar el registro</title>';	
		echo '</head>';
        echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
        echo ' <h1 class="title_table">Error al editar el usuario.</h1>'; 
        echo '<h3>Error:  ' . $sql . ' ' . $connect->connect_error .' </h3>';
		echo "<a href='../vista_php/edit.php'><button type='button'><span class='icon-database'></span>Regresar</button></a>";
		echo '</form>';
		echo '</div>';		
		echo '</div>';
		echo '</body>';
	} //cierra update (cierra el else de sino actualiza).
	$connect->close(); //cierra conexión con la BD
   } //cierra el else de validar Campos.
}
 ?>
 
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8"> 	
 	<link rel="icon" type="image/png" href="../images/logo.png" />
 	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/phpstyle.css">	
 </head>
 <body>
 	 <div class="wrapper">
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
 </html>