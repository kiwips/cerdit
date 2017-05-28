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

$asunto = array(
	'id' => 'asuntoTexto',
	'name' => 'asuntoTexto',
	'type' => 'text',
	'maxlength' => '10',
	'placeholder' => 'Asunto...',     
	'class' => 'form-control',
	'required' => 'true',	
	);
	?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?=form_open('/enviarMensage')?>
						<div class="input-group primero">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<?= form_input($nick);?>
			</div>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<?= form_input($email);?>
			</div>
			<div class="input-group">
				<span class="input-group-addon"></span>
				<?= form_input($asunto);?>
			</div>
     		           <div class="input-group">
				<textarea id="cuerpoTexto" name="cuerpoTexto" class="form-control" rows="4" cols="60" maxlength="255"></textarea>		
			</div>
			<br>
			<div align="center">				
				<button class="btn btn-success" disabled>Enviar</button>
			</div>
		<?=form_close()?>
	</div>
</div>
{/allUser}