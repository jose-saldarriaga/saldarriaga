$(document).ready(main);
 
var contador = 0; 
function main(){
	

    $('.login').attr("disabled", false); 
	
	$('#btningresar').attr("disabled", false);
	
    $('.inpregistro').attr("disabled", false);
	
	$('#btnregistro').attr("disabled", false);

	$('.registro').click(function(){
		
 
		if(contador == 1){
			$('#formReg').animate({				
			
				margin: '0 0 0 0px'				
			});
			contador = 0;
			
            $('.login').attr("disabled", false);
						
			$('#btningresar').attr("disabled", false);
			$('#btningresar').css("background", "transparent");	
		
            $('.inpregistro').attr("disabled", true);
	       
	        $('#btnregistro').attr("disabled", true);
            
			
			$('#cambiaNombre').css("display", "none");		    
			
		    $('#crearCuenta').css("display", "block");		    	
		} else {
			contador = 1;
			
            $('.login').attr("disabled", true);
			
			$('#btningresar').attr("disabled", true);
			$('#btningresar').css("background", "#D8D8D8");	
			
            $('.inpregistro').attr("disabled", false);
	        
	        $('#btnregistro').attr("disabled", false);
            
		    $('#crearCuenta').css("display", "none");	
			
		    $('#cambiaNombre').css("display", "block");	
		  
			$('#formReg').animate({
			
				margin: '0 0 0 480px'
				
			});
		} 
	});	
	

 };