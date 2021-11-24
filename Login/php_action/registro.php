<?php include("../vista_php/mensajes.php"); //mostrar mensajes de SweetAlert
      include("db_connect.php"); //conectarse con la BD

if($_POST) { 
	$user = $_POST['username'];
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pass = $_POST['password'];
	$confirm= $_POST['confirm_pass'];
	
    //Validación de campos vacios desde PHP (Back-end)
    if($user=="" || $fname=="" || $lname=="" || $pass=="" || $confirm==""){
		$msg= "Los campos con * son de caracter obligatorio.";
		msgError($msg);	

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
     echo '<h2>Los campos con * son de caracter obligatorio.</h2>';
     echo '<h3 class="">La página será redireccionada en 5 segundos.</h3>';
	echo "<a href='../index.html'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-reply'></span>Regresar!</button></a>";    
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</body>';			
	    echo '<script src="js/volverIndex.js"></script>';	
        echo '</html>'; 
    }else{

     if($pass!=$confirm){
        $msg= "Los campos contraseña y confirmar no son iguales.";
		msgError($msg);	

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
     echo '<h2>Los campos contraseña y confirmar contraseña deben ser iguales.</h2>';
     echo '<h3 class="">La página será redireccionada en 5 segundos.</h3>';
	echo "<a href='../index.html'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-reply'></span>Regresar!</button></a>";    
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</body>';			
	    echo '<script src="js/volverIndex.js"></script>';	
        echo '</html>';   
     } //cierra validar confirmPass
   } //cierra campos vacios

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
	echo "<a href='../index.html'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-reply'></span>Regresar!</button></a>";    
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</body>';			
	    echo '<script src="js/volverIndex.js"></script>';	
        echo '</html>';     
        $connect->close(); //cierra conexión con la BD
        exit();
       }else{       
         $sql ="INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `clave`, `active`) VALUES (NULL, '$user','$fname','$lname','$pass', '1')";
	      if($connect->query($sql) === TRUE) {
		  //mensaje de confirmación.	
		  $msg="Registro creado correctamente.";	   
		  msgOk($msg); //llama mensaje sweetAlert
		       
          $consulta = "SELECT id FROM usuarios WHERE usuario='$user' AND clave='$pass'";
 
			if($resultado = $connect->query($consulta)) {
				while($row = $resultado->fetch_array()) { 
					$id = $row["id"];					
				}
				$resultado->close();
				session_start();
		        $_SESSION['logueado'] = $id;
			} 
		
	    echo '<!DOCTYPE html>';
		echo '<html lang="es">';
		echo '<head>';		
		echo '<title>Registro exitoso</title>';			
//<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=../vista_php/Bienvenida.html" id="reload"> 
		echo '<link rel="icon" type="image/png" href="../images/logo.png" />';
		echo '<link rel="stylesheet" href="../css/fonts.css">';
		echo '<link rel="stylesheet" href="../css/phpstyle.css">';
		echo '</head>';
        echo '<body>';
        echo '<div class="wrapper">';
        echo '<div class="container"> ';
        echo '<form>';
      echo '<h1 class="title_section">Registro creado correctamente.</h1>';
     echo '<h3 class="">La página será redireccionada en 5 segundos.</h3>';
	echo "<a href='../vista_php/bienvenida.php'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-login'></span>Continuar!</button></a>";    
		echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</body>';			
	    echo '<script src="js/irBienvenida.js"></script>';	
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
      } //cierra connect error       
	} //cierra registrar (cierra el else de sino registra el usuario).
       $connect->close(); //cierra conexión con la BD
           
   } //cierra el else de validar usuario si esta registrado.

 } 

 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8"> 		
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