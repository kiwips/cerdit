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
	<button class="menu" onclick="openMenu();"><span class="fa fa-indent fa-3x"></span></button>
</div>

<div class="row" id='index'>
	<div class="col-md-11 col-md-offset-1">
	<span class="fa fa-search fa-2x" id="search"></span>
		<div id="busqueda" class="col-md-9 col-md-offset-2 borrar">
			<div class="col-md-3">				
				<select class="form-control mayusculas" id="marca">
					<option selected>TODO</option>
					{marcaFiltrado}							
					<option class="mayusculas" value="{marca}" id="marcaOpt">{marca}</option>
					{/marcaFiltrado}
				</select>
			</div>
			<div class="col-md-4">					
				{precioFiltrado} 
				<div align="left" style="float: left"><b>€ {precio_minimo}</b></div><div id="valorRange">{precio_maximo}</div><div align="right"><b>€ {precio_maximo}</b></div>
				<input type="range" name="precio" id="precio" min="{precio_minimo}" max="{precio_maximo}" autocomplete="off" step="1" value="{precio_maximo}">				
				{/precioFiltrado}
			</div>
			<div class="col-md-2">
				<input  id="textoBuscar" type="text" name="texto" class="form-control" placeholder="Pulsa ENTER...">
			</div>
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

<div align="right">
	<span class="ir-arriba fa fa-angle-double-up"></span>
</div>

<?php } ?>
