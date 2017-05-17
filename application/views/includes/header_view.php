<!DOCTYPE html>
    <head>
        <title> Comparador de precios </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8" />

        <!-- CSS -->
        <link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"  href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap-social.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/indexPage.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/registro.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/permiso.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/footer.css')?>" />

        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/jquery-3.1.1.min.js')?>" ></script>
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

        <style type="text/css">
        body{
            font-family: Arial;
            width: 100%;
            height: 100%;
        }
        </style>
        
    </head>
    <body>
    <div class="jumbotron">
    <div class="container text-center"> 
        <h1 class="titulo"> {titulo} </h1>
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
      <a class="navbar-brand" href="<?=base_url()?>">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <?php if ($this->session->userdata('permiso') =='Admin') { ?>
          <li><a href="permiso" title="Actualizar"><span class="glyphicon glyphicon-circle-arrow-down"></span></a></li>          
          <li><a href="actualizarbbdd"><span class="glyphicon glyphicon-cog"></span> Administrar </a></li>
        <?php } ?>
        <?php if ($this->session->userdata('logueado') || get_cookie('recordar')) { ?>
        <li><a href="miPerfil"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('nick'); ?></a></li>
        <li><a id="finSesion" href="finSesion" title="Finalizar Sesion"><span class="glyphicon glyphicon-log-out"></span></a></li>
        <?php } else{ ?>
        <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>