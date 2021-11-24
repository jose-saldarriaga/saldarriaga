

function msgOk(msg){
    swal({
            title: "Operación exitosa!",
            text: msg,
            icon: "success",
            button: "Continuar!",
           });
}

function msgError(msg){	
           swal({
           title: "Error!",
           text: msg,
           icon: "error",
           button: "Regresar!",                 
           });       
} 

function msgPregunta(msg){ 
           swal({
           title:"Esta Seguro(a)?",
           text: msg,
           icon: "warning",
           buttons: true,
           dangerMode: true,           
           })
        .then((willDelete) => {
         if (willDelete) {              
    swal("Confirmado! Escriba mensaje de confirmación!", {
      icon: "success",          
    });
      
  } else {    
    swal("Operación cancelada!"); 
  }
});        
    
}


function msgInfo(msg){ 	
           swal({
           title: "Título del mensaje!",
           text: msg,
           icon: "info",
           button: "Continuar!",            
           });            
}