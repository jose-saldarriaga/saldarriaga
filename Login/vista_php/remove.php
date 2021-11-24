<?php include("encabezado.php");
     require_once '../php_action/db_connect.php';

   
   if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM usuarios WHERE id = {$id}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();

	$connect->close();
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Confirmación borrar registro</title>
	<meta charset="UTF-8">
   
     <link rel="icon" type="image/png" href="../images/logo.png" /> 
     <link rel="stylesheet" href="../css/phpstyle.css">   
     <link rel="stylesheet" type="text/css" href="../css/main.css">
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <script src="../js/jquery-latest.js"></script> 
     <script src="../js/index.js"></script> 
</head>
<body>
<div class="wrapper">
  <div class="container"> 
    <form action="../php_action/delete.php" method="POST" class="form.remove">
    <h3 class="title_table"> ¿ Confirmar el borrado del registro ?</h3>
	<input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
	<button type="submit" id="delete"><span class="icon-warning"></span>Borrar Registro</button>
	<a href="bienvenida.php"><button type="button"><span class="icon-reply"></span>Regresar</button></a>
    </form>
    <div id="imagen">
     <img src="../images/confirmacion.png" alt=""  id="img1">
     <img src="../images/confirmacion2.png" alt="" id="img2">
    </div>
    
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