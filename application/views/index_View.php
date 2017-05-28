<?php if(!empty(get_cookie('errorLogin'))){ ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#login').modal('show');
	});
</script>
<?php } ?>

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
<?php if(!$primera){ ?>
<div class="row" id='index'>
	<div align="right" class=" col-md-2 col-md-offset-10 relevancia">
		<select name="order" id="order" class="form-control mayusculas" onchange="this.form.submit()">
			<option selected>Relevancia</option>
			<option>Precio &uarr;</option>
			<option>Precio &darr;</option>
		</select>
	</div>
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
			{todoComponenteCoincide}
			<div class="articulo" align="center" data-marca="{marca}" data-name="{nombre}" data-precio="{precio}">
				<img src="{img}" class="articuloIMG">
				<p class="articuloNOMBRE">{nombre}</p>
				<div class="borrar"><b>{precio} </b><small>€</small></div>
			</div>
			{/todoComponenteCoincide}

			<br><br><br><br><br><br>

			{todoComponenteNoCoincide}
				<?php if(!is_null ("{img}")){ ?>
						<div class="articulo" align="center" data-marca="{marca}" data-name="{nombre}" data-precio="{precio}" data-tienda="{FK_PK_TIE}">
							<img src="{img}" class="articuloIMG">
							<p class="articuloNOMBRE">{nombre}</p>
							<b>{precio} </b><small>€</small>
							<p><?php echo "{img}"; ?></p>					
						</div>
				<?php }else{ ?>
					<?php echo "DIFERENTE"; ?>
				<?php } ?>
			{/todoComponenteNoCoincide}
		</div>
	</div>
</div>

<div align="right">
	<span class="ir-arriba fa fa-angle-double-up"></span>
</div>

<?php } ?>