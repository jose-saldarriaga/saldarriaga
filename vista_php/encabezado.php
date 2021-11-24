<?php  include("../php_action/session.php");
       require_once '../php_action/db_connect.php';  
     
      header ('Content-type: text/html; charset=utf-8'); 
     
     
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">  
  <link rel="stylesheet" href="../css/fonts.css">
  <link rel="stylesheet" href="../css/phpmenu.css">
</head>
<body>
    <div class="barra_menu">      
      <a href="#" class="bt-menu"><span class="icon-menu"></span>Usuario sr(a): <?php
       $sql = "SELECT * FROM usuarios WHERE id = {$id}";
            $result = $connect->query($sql);
            if($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                $nombre=$row['nombre'];
                $apellidos=$row['apellidos']; 
                echo $nombre." ".$apellidos;            
             }
            }?></a>
    </div>
  
 <ul id="menu-bar">
 <li class="active"><a href="#"><span class='icon-home'></span>Inicio</a></li>
 <li class="submenu"><a href="#"><span class='icon-shop'></span>Productos</a>
  <ul class="children">
   <li><a href="#">Products Sub Menu 1<span class='icon-dot-single caret'></span></a></li>
   <li><a href="#">Products Sub Menu 2<span class='icon-dot-single caret'></span></a></li>
   <li><a href="#">Products Sub Menu 3<span class='icon-dot-single caret'></span></a></li>
   <li><a href="#">Products Sub Menu 4<span class='icon-dot-single caret'></span></a></li>
  </ul>
 </li>
 <li class="submenu"><a href="#"><span class='icon-suitcase'></span>Servicios</a>
  <ul class="children">
   <li><a href="#">Services Sub Menu 1<span class='icon-dot-single caret'></span></a></li>
   <li><a href="#">Services Sub Menu 2<span class='icon-dot-single caret'></span></a></li>
   <li><a href="#">Services Sub Menu 3<span class='icon-dot-single caret'></span></a></li>
   <li><a href="#">Services Sub Menu 4<span class='icon-dot-single caret'></span></a></li>
  </ul>
 </li>
 <li><a href="#"><span class='icon-info-with-circle'></span>Sobre Nosotros</a></li>
 <li><a href="#"><span class='icon-mail'></span>Contáctenos</a></li>
  <li><a href="../php_action/loguot.php"><span class='icon-log-out'></span>Cerrar Sesión</a></li>
</ul>

</body>
    <script src="../js/jquery-latest.js"></script>
    <script src="../js/menu.js"></script>
</html>
