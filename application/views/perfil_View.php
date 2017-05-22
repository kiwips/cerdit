{allUser}
<?php 
$nick = array(
	'id' => 'nickR',
	'name' => 'nickP',
	'type' => 'text',
	'placeholder' => '{USR_nick}',     
	'class' => 'form-control',
	'disabled' => 'true',
	);

$email = array(
	'id' => 'emailR',
	'name' => 'emailP',
	'type' => 'email',
	'placeholder' => '{USR_email}',     
	'class' => 'form-control',
	'disabled' => 'true',	
	);

$password = array(
	'id' => 'passwdR',
	'name' => 'passwdP',
	'type' => 'password',
	'placeholder' => 'Nueva Contraseña',     
	'class' => 'form-control',
	'required' => 'true',
	);
	?>
<div class="container-fluid">
	<div class="registro">
		<?=form_open('/canviarPerfil')?>
			<div class="input-group primero">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<?= form_input($nick);?>
			</div>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<?= form_input($email);?>
			</div>
     		           <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<?= form_input($password);?>	
				<img  id="ojoAbierto" src="assets/img/ver.png" align="right" title="Mostrar contraseña">		
			</div>
			<br>
			<div align="center">				
				<button class="btn btn-info">Modificar</button>
			</div>
		<?=form_close()?>
	</div>
</div>
{/allUser}
<script type="text/javascript" src="assets/js/viewPasswd.js"></script>