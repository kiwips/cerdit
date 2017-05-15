<div class="jumbotron">
	<div class="container text-center">	
		<h1 class="titulo">DreamPC</h1>
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<<<<<<< HEAD

      <?php if ($this->session->userdata('permiso') =='Admin') { ?>
          <li><a href="permiso"><span class="glyphicon glyphicon-cog"></span> Administrar </a></li>
=======
<<<<<<< HEAD
        <?php if($this->session->userdata('permiso')=='Admin'){ ?>
        <li><a href="permiso"><span class="glyphicon glyphicon-cog"></span> Administrar </a></li>
=======
      <?php if ($this->session->userdata('permiso') =='Admin') { ?>
          <li><a href="permiso"><span class="glyphicon glyphicon-cog"></span> Administrar </a></li>
>>>>>>> e5a4066d15600e254e8292bb873eb0b30bbb480b
>>>>>>> a46004c48157c61fbfaf455c5bb7b0169cbf8ba8
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
<?php require ('modalL.php'); ?>


<div class="modal fade" id="modalError" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p class=".bg-danger"><?php echo  get_cookie('errorLogin')?></p>
      </div>
    </div>
  </div>
</div>

<!-- <?php if(get_cookie('errorLogin')){ ?>
<script type="text/javascript"> 
  $('#modalError').show(); 
</script>
<?php } ?> -->

