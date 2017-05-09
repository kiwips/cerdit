<?php 
$nick = array(
	'id' => 'nickL',
	'name' => 'nickL',
	'type' => 'text',
	'placeholder' => 'Nick',     
	'class' => 'form-control',
	'required' => 'true',
	);

$password = array(
	'id' => 'passwdL',
	'name' => 'passwdL',
	'type' => 'password',
	'placeholder' => 'Password',     
	'class' => 'form-control',
	'required' => 'true',
	);
	?>

	<div class="modal fade" id="login" role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<?=form_open('/login')?>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Formulario de Registro</h4>
				</div>
				<div class="modal-body">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<?= form_input($nick);?>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<?= form_input($password);?>						
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-send" aria-hidden="true" title="Enviar"></span></button>
				</div>
				<?=form_close()?>
			</div>
		</div>
	</div>