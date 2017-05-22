<?php if(!empty(get_cookie('errorLogin'))){ ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#login').modal('show');
	});
</script>
<?php } ?>

<?php if ($this->session->userdata('logueado')) { ?>
<?php 
	$attr = array(
		'name' => 'formularioDeComparacion',
	);
?>
	
		<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
		<div class="cerrarMenu"><button class="menu" onclick="closeMenu()"><span class="glyphicon glyphicon-remove"></span></button></div>
			<?=form_open('/productoComparar',$attr)?>
				<ul>				
					{productos}
						<p class="w3-bar-item w3-button" onclick="enviar()" value="{PROD_nom}">{PROD_nom}</p>
					{/productos}
				</ul>
			<?=form_close()?>
		</div>

	<div class="container-fluid">
		<button class="menu" onclick="openMenu();"><span class="glyphicon glyphicon-list"></span></button>
	</div>
<?php } ?>
