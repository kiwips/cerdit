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
		<?php 	$nombre = "";
				$marca = "";
				$imagen = "";
				$precio = "";
				$precioPCB = "";

		foreach ($todoComponenteCoincide as $key => $value) {
				foreach ($value as $key1 => $value1) {
					foreach ($value1 as $key2 => $value2) {
						if ($key2=='nombre'&&$key1=='PCC') {
							$nombre=$value2;
						}elseif ($key2=='marca'&&$key1=='PCC') {
							$marca=$value2;
						}elseif ($key2=='precio'&&$key1=='PCC') {
							$precio=$value2;
						}elseif ($key2=='img'&&$key1=='PCC') {
							$imagen=$value2;
						}elseif ($key2=='precio'&&$key1=='PCB') {
							$precioPCB=$value2;
						}
						?>
		<?php } }?>
						<div class="articulo" align="center" data-marca="<?php echo $marca ?>" data-name="<?php echo $nombre ?>" data-precio="<?php echo $precio ?>">
							<img src="<?php echo $imagen ?>" class="articuloIMG">
							<p class="articuloNOMBRE"><?php echo $nombre; ?></p>
							<b>PCComponentes: <?php echo $precio; ?> </b><small>€</small>
							<?php if ($this->session->userdata('logueado')) { ?>
								<a href="ponerCarrito?nombre=<?php echo $nombre ?>&precio=<?php echo $precio ?>&tienda=PCComponentes&componente= <?php echo $n ?>"><button class="btn-small btn-success"><span class="glyphicon glyphicon-shopping-cart" title="Añadir al Carrito"></span></button></a>
							<?php } ?>
							<br>
							<b>PCBox: <?php echo $precioPCB; ?> </b><small>€</small>
							<?php if ($this->session->userdata('logueado')) { ?>
								<a href="ponerCarrito?nombre=<?php echo $nombre ?>&precio=<?php echo $precioPCB ?>&tienda=PCBOX&componente= <?php echo $n ?>"><button class="btn-small btn-success"><span class="glyphicon glyphicon-shopping-cart" title="Añadir al Carrito"></span></button></a>
							<?php } ?>
						</div>
		<?php } ?>
			{todoComponenteNoCoincide}
					<div class="articulo" align="center" data-marca="{marca}" data-name="{nombre}" data-precio="{precio}" data-tienda="{FK_PK_TIE}">
						<img src="{img}" class="articuloIMG">
						<p class="articuloNOMBRE">{nombre}</p>
						<b>PCComponentes: {precio} </b><small>€</small>
						<?php if ($this->session->userdata('logueado')) { ?>
						<a href="ponerCarrito?nombre=<?php echo $nombre ?>&precio=<?php echo $precio ?>&tienda=PCComponentes&componente= <?php echo $n ?>"><button class="btn-small btn-success"><span class="glyphicon glyphicon-shopping-cart" title="Añadir al Carrito"></span></button></a>	
						<?php } ?>			
					</div>
			{/todoComponenteNoCoincide}
		</div>
	</div>
</div>

<div align="right">
	<span class="ir-arriba fa fa-angle-double-up"></span>
</div>

<?php } ?>