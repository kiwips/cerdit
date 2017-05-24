var divs;
var marcaD;
var marcaE;
var precioD;
var precioE;
var textoE;

$(document).ready(function(){

	divs = $('div.articulo');	

	$("#marca, #precio").change(function(){
		actualizarWeb();
	});
	
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

	$('#search').click(function() {
		if($('#busqueda').hasClass('borrar')){
			$('#busqueda').removeClass('borrar');
		}else{
			$('#busqueda').addClass('borrar');
		}
	});
});

function actualizarWeb(){
	precioE = $('#precio').val();
	marcaE = $('#marca').val();
	textoE = $('#textoBuscar').val().toLowerCase();	

	$('#valorRange').html(precioE);

	divs.removeClass('ver');
	divs.removeClass('borrar');

	if (marcaE!='TODO') {	
		$(divs).each(function(indice, elemento) {
			precioD = $(elemento).data('precio');	
			marcaD = $(elemento).data('marca');     			
			if(precioD > precioE || marcaD.indexOf(marcaE)){
				$(elemento).addClass('borrar');
			}else{
				$(elemento).addClass('ver');
				if(textoE.length > 0){
					if(buscarDataName($(elemento).text())){
						$(this).addClass('ver');
					}else{
						$(this).removeClass('ver');
						$(this).addClass('borrar');
					}
				}
			}
		});
	}else{
		$(divs).each(function(indice, elemento) {
			precioD = $(elemento).data('precio');	
			marcaD = $(elemento).data('marca');        		
			if(precioD > precioE){
				$(this).addClass('borrar');
			}else{
				$(this).addClass('ver');
				if(textoE.length > 0){
					if(buscarDataName($(elemento).text())){
						$(this).addClass('ver');
					}else{
						$(this).removeClass('ver');
						$(this).addClass('borrar');
					}
				}
			}
		});
	}
}


$(document).keydown(function(e) {
	if(e.keyCode==13){
		actualizarWeb();
	}
});


function buscarDataName(textoD) {
	textoD = textoD.toLowerCase();
	if(textoD.indexOf(textoE) != -1){
		return true;
	}else{
		return false;
	}
}
