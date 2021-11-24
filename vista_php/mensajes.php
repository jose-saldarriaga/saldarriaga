<?php 


function msgOk($msg) 
    {  
      echo '<script>  
            msgOk("'.$msg.'");          
            </script>';
    }  

    function msgError($msg)
    {     
        echo '<script> 
        msgError("'.$msg.'");                
        </script>';            
    } 

    function msgPregunta($msg)
    {     
    echo '<script>
    msgPregunta("'.$msg.'");
    </script>';        
    } 
    
    function msgInfo($msg)
    {   
        echo '<script> 
        msgInfo("'.$msg.'");                    
        </script>';            
    }     

 ?>

 <!DOCTYPE html><
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
	<title>SweetAlert & PHP</title>
	<script src="../js/sweetalert.min.js"></script>
	<script src="../js/mensajes.js"></script>
 </head>
 <body> 	
 </body>
 </html>