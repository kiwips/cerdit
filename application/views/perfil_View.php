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
<div class="jumbotron">
	<div class="container text-center">	
		<h1 class="titulo">Perfil</h1>
	</div>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- <a class="navbar-brand" href="#">Logo</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url() ?>">Home</a></li>
        <li><a href="/">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if ($this->session->userdata('permiso') =='Admin') { ?>
          <li><a href="permiso"><span class="glyphicon glyphicon-cog"></span> Administrar </a></li>
        <?php } ?>
        <?php if ($this->session->userdata('logueado') || get_cookie('recordar')) { ?>
        <li><a href="miPerfil"><span class="glyphicon glyphicon-user"></span> Mi Perfil</a></li>
        <li><a href="finSesion"><span class="glyphicon glyphicon-log-out"></span> Finalizar Sesión </a></li>
        <?php } else{ ?>
        <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
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
				<button class="btn btn-info">Canviar</button>
			</div>
		<?=form_close()?>
	</div>
</div>
{/allUser}
<script type="text/javascript" src="assets/js/viewPasswd.js"></script>