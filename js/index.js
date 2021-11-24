/* $(document).ready(function(){
  alert('Conexión con JS exitosa.');
 });  */

 $(document).ready(main); 
var contador = 1;
function main() {
	//alert('Entro al JS Carlos');
    $('.container #delete').hover(function(){
     // alert('LLegó al hover');
     $('#delete').css({       
      background:'yellow',
      color:'red'
      });
   if(contador == 1){     
      $('#img1').css({       
      display:'none'
      });
      $('#img2').css({       
      display:'block'
      }); 
      contador = 0;
   }else{
     contador = 1;
     $('#delete').css({       
      background:'white',
      color:'#45558D'
      });
     $('#img1').css({        
         display:'block'
      });
     $('.container #imagen #img2').css({    
         display:'none'
      }); 
   }   
 
  }); //cierra hover 

} //cierra main
