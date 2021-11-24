<?php include("../vista_php/mensajes.php");
require_once 'db_connect.php';

if($_POST) { 
	$user = $_POST['username'];
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pass = $_POST['password'];
	

    if($user=="" || $fname=="" || $lname=="" || $pass==""){
		$msg= "Los campos con * son de caracter obligatorio.";
		msgError($msg);         
		echo '<head>';       
		echo '<title>Error de registro</title>';
		echo '<link rel="icon" type="image/png" href="../images/logo.png" />';
		echo '<link rel="stylesheet" href="../css/fonts.css">';
		echo '<link rel="stylesheet" href="../css/phpstyle.css">'; 	
		echo '</head>';
		echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
        echo '<h1 class="title_table">Error al registrar el usuario.</h1>';
        echo '<h3>Los campos con * son de caracter obligatorio</h3>';
        echo '<h3 class="">La página será redireccionada en 5 segundos.</h3>';
		echo "<a href='../vista_php/create.php'><button type='button'><span class='icon-reply'></span>Regresar</button></a>";
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '<script src="js/volverCreate.js"></script>';
		echo '</body>';	         
	}

    //se valida si el usuario ya esta registrado
       $consulta = "SELECT * FROM usuarios WHERE usuario='$user'; ";
       if($resultado = $connect->query($consulta)) {
				while($row = $resultado->fetch_array()) { 
					$useOk = $row["usuario"];					
				}				
	    } 
	    if($user==$useOk){
		$msg="El usuario ingresado ya esta registrado.";	   
		msgError($msg); //llama mensaje sweetAlert           

        echo '<!DOCTYPE html>';
		echo '<html lang="es">';
		echo '<head>';		
		echo '<title>Error al registrar el usuario!</title>';			
        //<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=../index.html"> 
		echo '<link rel="icon" type="image/png" href="../images/logo.png" />';
		echo '<link rel="stylesheet" href="../css/fonts.css">';
		echo '<link rel="stylesheet" href="../css/phpstyle.css">';
		echo '</head>';
        echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
      echo '<h1 class="title_section">Error al realizar el registro!.</h1>';
     echo '<h2>El usuario ya esta registrado en el sistema.</h2>';
     echo '<h3 class="">La página será redireccionada en 5 segundos.</h3>';
	echo "<a href='../vista_php/create.php'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-reply'></span>Regresar!</button></a>";    
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</body>';			
	    echo '<script src="js/volverCreate.js"></script>';	
        echo '</html>';     
        $connect->close(); //cierra conexión con la BD
        exit();
       }else{
    $sql ="INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `clave`, `active`) VALUES (NULL, '$user','$fname','$lname','$pass', '1')";
	if($connect->query($sql) === TRUE) {
		//mensaje de confirmación.		
	    $msg="Registro creado correctamente.";	    
		msgOk($msg); //llama mensaje sweetAlert   
		    
		echo '<head>';
		echo '<title>Registro exitoso</title>';
		echo '<link rel="icon" type="image/png" href="../images/logo.png" />';
		echo '<link rel="stylesheet" href="../css/fonts.css">';
		echo '<link rel="stylesheet" href="../css/phpstyle.css">'; 
		echo '</head>';
        echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
        echo '<h1 class="title_section">Registro Exitoso</h1>';
		echo "<a href='../vista_php/create.php'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-reply'></span>Regresar</button></a>";
		echo "<a href='../vista_php/bienvenida.php'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-home'></span>Inicio</button></a>";
		echo '</form>';
		echo '</div>';		
		echo '</div>';
		echo '</body>';	
		echo '</html>';      
	}else{
		$msg="Error al registrar el usuario.";
		msgError($msg);	

		 // check connection
        if($connect->connect_error) { 
	    echo '<!DOCTYPE html>';
	    echo '<html lang="es">';	   
	    echo '<head>';  
	    echo '<meta charset="UTF-8">';
	    echo '<link rel="stylesheet" href="../css/fonts.css">';
	    echo '<link rel="stylesheet" href="../css/phpstyle.css">';  
		echo '<title>Error de Conexión!</title>';	
		echo '</head>';
		echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
        echo '<h1 class="title_table">Error de conexión con la Base de Datos.</h1>'; 
        echo '<h3>Error:  ' . $sql . ' ' . $connect->connect_error .' </h3>';    
        echo '<div id="imagen">';
        echo '<img src="../images/error_de_conexion.png" alt=""  id="img1" />';  
        echo '</div>';
		echo "<a href='../index.html'><button type='button'><span class='icon-database'></span>Reintentar</button></a>";
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
	    } //cierra el else de conexión fallida.
        $connect->close(); //cierra conexión con la BD
   } //cierra guardar (cierra el else de sino guarda).
  } //cierra el else de validar si usuario ya esta registrado
} //cierra POST

 ?>
