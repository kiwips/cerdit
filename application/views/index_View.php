<?php if(!empty(get_cookie('errorLogin'))){ ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#login').modal('show');
	});
</script>
<?php } ?>

<?php if ($this->session->userdata('logueado')) { ?>	
	<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
		<div class="cerrarMenu"><button class="menu" onclick="closeMenu()"><span class="glyphicon glyphicon-remove"></span></button></div>
		<ul>				
			{productos}
			<a href="componente?n={PROD_nom}"><input class="w3-bar-item w3-button" value="{PROD_nom}" name="componente"></a>
			{/productos} 
		</ul>
	</div>

	<div class="container-fluid index">
		<button class="menu" onclick="openMenu();"><span class="glyphicon glyphicon-list"></span></button>
	</div>

		<div class="row" id='index'>
			<div class="col-md-10 col-md-offset-2">
				<div class="col-md-8">
					<div class="col-md-2">				
						<select class="form-control mayusculas" id="marca">
							<option selected>TODO</option>
							{marcaFiltrado}							
					  			<option class="mayusculas" value="{marca}" id="marcaOpt">{marca}</option>
					  		{/marcaFiltrado}
						</select>
					</div>
					<div class="col-md-5">					
					{precioFiltrado}
						Precio: 
						<b>€ {precio_minimo}</b>
							<input id="precio" type="range" min="{precio_minimo}" max="{precio_maximo}" autocomplete="off" step="20">
						<b>€ {precio_maximo}</b>
					{/precioFiltrado}
					</div>
					<div class=""></div>
				</div>
				<div class="todo">				
					{todoComponente}
						<div class="articulo" align="center" data-marca="{marca}" data-name="{nombre}" data-precio="{precio}">
							<img src="{img}" class="articuloIMG">
							<p class="articuloNOMBRE">{nombre}</p>
							<p class="articuloPRECIO">{precio} €</p>
						</div>
					{/todoComponente}
				</div>
			</div>
		</div>

<?php } ?>
