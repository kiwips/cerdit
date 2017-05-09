<?php 
$nick = array(
	'id' => 'nickR',
	'name' => 'nickR',
	'type' => 'text',
	'placeholder' => 'Nick',     
	'class' => 'form-control',
	'required' => 'true',
	);

$email = array(
	'id' => 'emailR',
	'name' => 'emailR',
	'type' => 'email',
	'placeholder' => 'E-mail',     
	'class' => 'form-control',
	'required' => 'true',
	);

$password = array(
	'id' => 'passwdR',
	'name' => 'passwdR',
	'type' => 'password',
	'placeholder' => 'Password',     
	'class' => 'form-control',
	'required' => 'true',
	);
	?>

<div class="container-fluid">
	<div class="registro">
		<?=form_open('/registro')?>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<?= form_input($nick);?>
				<img  id="comprobar" src="assets/img/comprobar.png" align="right" title="Comprobar nick">	
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
		<?=form_close()?>
	</div>
</div>
<script type="text/javascript" src="assets/js/viewPasswd.js"></script>