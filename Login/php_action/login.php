<?php 
  include("../vista_php/mensajes.php"); //mensajes SweetAlert
  require_once 'db_connect.php'; //conexión con la BD

   if($_POST) {
			$loginNombre = $_POST['username'];
		//$loginPassword = md5($_POST['password']); //clave encriptada
			$loginPassword = $_POST['password'];	  
      $userOk='';
      $passOk='';   
  
      $consulta = "SELECT * FROM usuarios WHERE usuario='$loginNombre' AND clave='$loginPassword'";
 
			if($resultado = $connect->query($consulta)) {
				while($row = $resultado->fetch_array()) { 
					$userOk = $row["usuario"];
					$passOk = $row["clave"];
				   $id = $row["id"];
				}
				$resultado->close();
    //Si todo va bien y encontró el registro en la BD...      
      if($loginNombre == $userOk && $loginPassword == $passOk) {                   
          session_start();
          $_SESSION['logueado'] = $id;
      //puede verificar desde aquí el perfil y el estado con otros ?id=".$id."
      //dos codicionales "if". //?id=$id
          header("Location: ../vista_php/bienvenida.php"); 
          $connect->close();  //cierra la conexión con la BD  
       
      }else {
          $msg= "Usuario y/o contraseña incorrectos.";
          msgError($msg); 

          echo '<!DOCTYPE html>';
          echo '<html lang="es">';
          echo '<head>';    
          echo '<title>Error al validar usuario</title>';     
        //<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=../index.html"> 
          echo '<link rel="icon" type="image/png" href="../images/logo.png" />';
          echo '<link rel="stylesheet" href="../css/fonts.css">';
          echo '<link rel="stylesheet" href="../css/phpstyle.css">';
          echo '</head>';
          echo '<body>';
          echo '<div class="wrapper">';
          echo '<div class="container"> ';
          echo '<form>';
          echo '<h1 class="title_section">Error de ingreso!.</h1>';
          echo '<h2>El usuario y la contraseña ingresada no son correctos.</h2>';
          echo '<h3 class="">La página será redireccionada en 5 segundos.</h3>';
          echo "<a href='../index.html'><button type='button' style='border:2px solid #45558D;border-radius: 10px;box-shadow: 3px 2px rgba(255, 255, 255, 0.15);'><span class='icon-reply'></span>Regresar</button></a>";    
          echo '</form>';
          echo '</div>';
          echo '</div>';
          echo '</body>';     
          echo '<script src="js/volverIndex.js"></script>'; 
          echo '</html>';
        } //cierra (usuario y clave incorrectos)    
 
			}else{
        $msg="Error al buscar el usuario.";
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
    echo '</html>';
    die("connection failed : " . $connect->connect_error);
    } //cierra la condición que muestra el error de conexión
  } //cierra error de conexión con la BD

	$connect->close();	//cierra la conexión con la BD	

 
  } //cierra POST
 ?>