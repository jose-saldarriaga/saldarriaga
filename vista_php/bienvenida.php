<?php include("encabezado.php");
      require_once '../php_action/db_connect.php';  
    header ('Content-type: text/html; charset=utf-8'); 
 
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
		echo '</body>';	 
		echo ' </html>';
		die("connection failed : " . $connect->connect_error);
     }         
   
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>CRUD PHP con Sweet Alert</title>
	<link rel="icon" type="image/png" href="../images/logo.png" />	
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/phpstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script src="../js/sweetalert.min.js"></script>	
	<script src="../js/mensajes.js"></script>

</head>
<body>	
 <div class="wrapper">	 	
  <div class="container">
		<h1>Administración de Usuarios</h1>
		<form class="form">
		<table id="tabla">		
			<tbody>
			<tr>
			<td class="title_columns">Nombre</td>
			<td class="title_columns">Apellidos</td>
			<td class="title_columns">Correo Electrónico</td>	
			<td class="title_columns">Contraseña</td>
			<td class="title_columns">Opción</td>		    
	   <td>	
        <a href="create.php"><button type='button' ><span class="icon-add-user"></span>Agregar Usuario</button></a>
	   </td>
            </tr>           		
			</tbody>		
		<tbody>
			<?php
			$sql = "SELECT * FROM usuarios WHERE active = 1";

			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {

			  echo "<tr>
						<td>".$row['nombre']."</td>
						<td>".$row['apellidos']."</td>		
						<td>".$row['usuario']."</td>
						<td>".$row['clave']."</td>
						<td>
	                <a href='edit.php?id=".$row['id']."'><button type='button'><span class=icon-edit></span>Editar</button></a>
					<a href='remove.php?id=".$row['id']."'><button type='button'><span class='icon-trash'></span>Borrar</button></a>					
						</td>
					</tr>";
				}
			} else {
				echo '<tr style="margin: 0 0 0 500px;"><td colspan="5"><h1>No hay datos en la tabla</h1></td></tr>';
			}
			?>
		</tbody>
	</table>
	</form>	
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
</html>