<?php 
  
    function validarUsuario($user,$pass)
    {
    	  $mensaje= ''; 
        $resp='';

    	if($user=="" OR $pass==""){
    	    $resp='false';    		
    	$mensaje= "Debe llenar los campos usuario y contraseña.";
          
        
    	}else if(strlen($user)<3 OR strlen($user)>50){ 
          $resp='false';          
          $mensaje= "Debe ingresar un usuario valido de Mínimo 8 y máximo 50 caracteres."; 
    	}else if(strlen($pass)<4 OR strlen($pass)>16){ 
          $resp='false';          
          $mensaje= "Debe ingresar una contraseña de Mínimo 4 y máximo 16 caracteres.";
        }else{
          $resp='true';
        }
            
      return $validado=array($resp,$mensaje);
    } 
     function validarCamposVacios($campos = array()){
      $mensaje= '';       
      $acom=0; 
      $resp='';    
      $long= count($campos); 

     
         for ($i=0; $i < $long; $i++) { 
               
            if($campos[$i]==''){              
             $acom=$acom+1;             
            }    
         }
          
         if($acom>0){
             $resp='false';
             $mensaje= "Debe llenar los campos de caracter obligatorio (*).";
         } else{
           $resp='true';
         } 
         return $validado=array($resp,$mensaje); 
      } 
         function validarLongitudCampo($campo,$longMin,$longMax){
              $mensaje= '';       
              $acom=0; 
              $resp; 

              if($campo<$longMin OR $campo>$longMax){
                $resp=false;
                $mensaje= "Mínimo ".$longMin." y máximo ".$longMax." caracteres.";
              }else{
                $resp=true;
              }
           return $validado=array($resp,$mensaje); 
         } 
      function validarLongitud($campo1,$campo2,$campo3,$campo4,$campoN)
        {             
            $c1= validarLongitudCampo($campo1,4,50);
            echo $c1[0][1].'Array con respuesta';
        
    }

   
  
 ?>