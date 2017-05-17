<!DOCTYPE html>
    <head>
        <title> Comparador de precios </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8" />

        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/indexPage.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/registro.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/permiso.css')?>" />

        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/jquery-3.1.1.min.js')?>" ></script>
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script> -->
        <style type="text/css">
        body{
            font-family: Arial;
        }
        </style>
    </head>
    <body>
    <div class="jumbotron">
    <div class="container text-center"> 
        <h1 class="titulo">{Titulo}</h1>
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