<?php    

$localhost = "127.0.0.1"; //localhost ó IP del servidor
$username = "root"; //nombre del admin en la BD
$password = ""; //password del admin
$dbname = "login"; //nombre de la base de datos

//creamos la conexión con la BD
$connect = new mysqli($localhost, $username, $password, $dbname);

// verificamos la conexión
if($connect->connect_error) {	
     //  die("connection failed : " . $connect->connect_error);
	   /* echo '<!DOCTYPE html>';
	    echo '<html lang="es">';	   
	    echo '<head>';  
	    echo '<meta charset="UTF-8">';  
	    echo '<link rel="icon" type="image/png" href="../img/logo.png" />'; 
	    echo '<link rel="stylesheet" href="../css/style.css">';  
		echo '<title>Error de Conexión</title>';	
		echo '</head>';
		echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
        echo '<h1 class="title_table">Error de conexión con la Base de Datos.</h1>';        
        echo '<div id="imagen">';
        echo '<img src="../img/error_de_conexion.png" alt=""  id="img1" />';  
        echo '</div>';
		echo "<a href='../index.php'><button type='button'>Reintentar</button></a>";
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
		echo ' </html>'; */      
		
	
} else{
   //echo "Conexión establecida";
}

?>