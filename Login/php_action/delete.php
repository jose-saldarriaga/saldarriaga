<?php 
include("../vista_php/mensajes.php");
require_once 'db_connect.php';
  // header ('Content-type: text/html; charset=utf-8'); 
  // header ('Content-type: text/html; charset=ISO-8859-1');

   if($_POST) {
	$id = $_POST['id'];
   // echo $id;
	//mensaje de confirmación.
	$msg="Registro borrado correctamente.";

//Para inactivar el usuario sin borrarlo de la base de datos: $sql = "UPDATE members SET active = 2 WHERE id = {$id}";

//Para borrar el registro de la tabla:
$sql = "DELETE FROM usuarios WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		msgOk($msg);				
		echo '<head>';
		echo '<title>Borrado exitoso</title>';	 
	    echo '<link rel="icon" type="image/png" href="../images/logo.png" />';
	    echo '<link rel="stylesheet" href="../css/fonts.css">';
        echo '<link rel="stylesheet" href="../css/phpstyle.css">';  
		echo '</head>';
        echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
        echo ' <h1 class="title_table">Registro borrado!!</h1>';    
	echo "<a href='../vista_php/bienvenida.php'><button type='button'><span class='icon-home'></span>Regresar</button></a>";
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</body>';		
        echo '</html>';
	} else {
		$msg="No se logró llevar a cabo la operación de borrado.";
		msgError($msg);
		
		// check connection
        if($connect->connect_error) { 
	    echo '<!DOCTYPE html>';
	    echo '<html lang="es">';	   
	    echo '<head>';  
	    echo '<meta charset="UTF-8">';
	    echo '<link rel="stylesheet" href="../css/fonts.css">';
	    echo '<link rel="stylesheet" href="../css/phpstyle.css">';  
		echo '<title>Error de Conexión</title>';	
		echo '</head>';
		echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
        echo '<h1 class="title_table">Error de conexión con la Base de Datos.</h1>';     
        echo '<div id="imagen">';
        echo '<img src="../images/error_de_conexion.png" alt=""  id="img1" />';  
        echo '</div>';
		echo "<a href='./index.html'><button type='button'><span class='icon-database'></span>Reintentar</button></a>";
		echo '</form>';
		echo '</div>';
		  echo '<ul class="bg-bubbles">';
		      echo '<li></li>';
		      echo '<li></li>';
		      echo '<li></li>';
		      echo '<li></li>';
		      echo '<li></li>';
		      echo '<li></li>';
		      echo '<li></li>';
		      echo '<li></li>';
		      echo '<li></li>';
		      echo '<li></li>';
		   echo '</ul>';
		echo '</div>';
		echo '</body>';	 
		echo ' </html>';
		die("connection failed : " . $connect->connect_error);
     }

	} //cierra función borrar (cierra el else de sino borra).
	$connect->close(); //cierra conexión con la BD
  } //cierra POST
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