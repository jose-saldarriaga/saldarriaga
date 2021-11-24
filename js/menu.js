$(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.barra_menu').click(function(){
		 
		if(contador == 1){
			$('#menu-bar').animate({
				top: '75'
			});
			contador = 0;
		} else {
			contador = 1;
			$('#menu-bar').animate({
				top: '-100%'
			});
		} 
	});
	
	
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});

 };