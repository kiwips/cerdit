<div class="jumbotron">
	<div class="container text-center">	
		<h1>Comparador de PC's</h1>
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
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Login </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php if (isset($this->session->user)) { ?>
	<div id="botonesPrincipales" align="right">
		<a href="finSesion"><button type="button" class="btn principal"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Finalizar Sesión</button></a>
	</div>
<?php } else{ ?>
	<div id="botonesPrincipales" align="right">	
		<button type="button" class="btn principal" data-toggle="modal" data-target="#login">Login</button>
		<button type="button" class="btn principal" data-toggle="modal" data-target="#registro">Registrarse</button>
	</div>
		<?php require ('modalL.php'); ?>
<?php } ?>
