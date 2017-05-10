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
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if (isset($this->session)) { ?>
          <li><a href="permiso"><span class="glyphicon glyphicon-cog"></span> Administrar </a></li>
        <?php } else{ ?>
         <!-- <li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Login</a></li> -->
            <?php require ('modalL.php'); ?>
        <?php } ?>
        <?php if (isset($this->session)) { ?>
          <li><a href="finSesion"><span class="glyphicon glyphicon-log-out"></span> Finalizar Sesión </a></li>
        <?php } else{ ?>
              <li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <?php require ('modalL.php'); ?>
        <?php } ?>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>