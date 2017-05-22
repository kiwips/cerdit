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
	<div class="container-fluid">
		<button id="menu" onclick="openMenu();"><span class="glyphicon glyphicon-list"></span></button>
		
<!-- 		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="input-group">	
					<?=form_open('/productoComparar',$attr)?>
					<select id="componente" name="componente">
						<option disabled selected>Elige un pop-up...</option>
						{productos}
						<option  value="{PROD_nom}">{PROD_nom}</option>
						{/productos}
					</select>
					<?=form_close()?>
				</div>
			</div>
		</div> -->
	</div>
<?php } ?>
