var divs;
var marcaD;
var marcaE;
var precioD;
var precioE;
var textoE;
var imagenes;
var p;
$(document).ready(function(){
	p=$('.articulo p');
	divs = $('div.articulo');	
	imagenes = $('img.articuloIMG');
	removeNoImage();
	quitarReacondicionados();

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

/*PRECIO*/

	// $('.articuloIMG').mousedown(function() {
	// 	var textoO = $(this).siblings('div');
	// 	textoO.removeClass('borrar');
	// 	textoO.addClass('mostrarTexto');
	// });
	
	// $('.articuloIMG').mouseup(function() {
	// 	var textoO = $(this).siblings('div');
	// 	textoO.addClass('borrar');
	// 	textoO.removeClass('mostrarTexto');		
	// });
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
function removeNoImage(){
	$(imagenes).each(function(indice, elemento) {
		console.log($(elemento).attr('src'));
		if($(elemento).attr('src')==''){
			$(elemento).parent().remove();
			$(elemento).remove();
		}
	});
	$(p).each(function(indice, elemento) {
		if(!$(elemento).hasClass('articuloNOMBRE')){
			$(elemento).remove();
		}
	});
}
function quitarReacondicionados(){
	$(divs).each(function(indice, elemento) {
		if($(elemento).text().indexOf('Reacondicionado') != -1){
			$(this).remove();
		}
	});
}
