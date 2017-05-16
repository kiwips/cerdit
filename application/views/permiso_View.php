<?php if($this->session->userdata('permiso')=='Admin'){ ?>
<div class="jumbotron">
	<div class="container text-center">	
		<h1 class="titulo">Administración</h1>
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
        <li><a href="#">Contact</a></li>
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
<div class="row">
	<div class="col-md-4 col-md-offset-4">	
		<table class="table table-border">
			<tr>
				<th style="border-top: 0;">Nick</th>
				<th style="border-top: 0;">Permiso</th>
			</tr>
			{user}			
			<tr>
				<?=form_open('/permiso')?>
				<td style="width: 5%;"> <input name="nickP" value="{USR_nick}" readonly style="border: 0px;"></td>
				<td style="width: 5%;"> {USR_permiso} </td>				
				<td>
					<select name="permiso" id="selectorPermisos">
						<option value="Admin">Admin</option>
						<option value="User">User</option>
					</select>
					<button  type="submit"><span class="glyphicon glyphicon-save tamanoGP"></span></button>						
				</td>
				<?=form_close()?>
			</tr>
			{/user}
		</table>
	</div>
</div>

<div align="center">
	{permisoCorrecto}
</div>

<?php } else{
	redirect('/');
} ?>
