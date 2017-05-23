var divs = $('div.articulo');		

$(document).ready(function(){
	$("#marca").change(function(){
		var value = $('#marca').val();
		divs.css('display','block');
		if (value!='TODO') {		  			
			$(divs).each(function(indice, elemento) {
				var marca = $(elemento).data('marca');        						
				if(marca.indexOf(value)){
					$(this).css('display','none');
				}
			});	
		}else{
			divs.css('display','block');
		}

	});	
});

$(document).ready(function(){
	$("#precio").change(function(){
		var value = $('#precio').val();
		divs.css('display','block');     		
		$(divs).each(function(indice, elemento) {
			var precio = $(elemento).data('precio');
			if(precio > value){
				$(this).css('display','none');
			}
		});	
	})

});


/*$(document).ready(function(){
	$("#index").ready(function(){
		var URLsearch = window.location.search;
		URLsearch = URLsearch.split('=');
		alert(URLsearch[1]);
		if(URLsearch.indexOf('Procesador')){

		}
	});
});*/

