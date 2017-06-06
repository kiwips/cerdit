<!DOCTYPE html>
<head>
  <title> Comparador de precios </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="UTF-8" />

  <!-- CSS -->
  <link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="assets/css/indexPage.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/registro.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/permiso.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/articulos.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/carrito.css"/>

  <!-- JS -->
  <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js" ></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/index.js"></script>
  <script type="text/javascript" src="assets/js/articulos.js"></script>

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
      <img class="imagenLogo" src="assets/img/DreamPC.png">
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
        <a class="navbar-brand" href="/">dreamPC</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
              <?php if ($this->session->userdata('permiso') =='Admin') { ?>  
              <li><a href="permiso"><span class="fa fa-cog fa-spin fa-1x fa-fw"></span> Administrar </a></li>
              <?php } ?>
              <?php if ($this->session->userdata('logueado')) { ?>
              <li><a href="carrito"><span class="glyphicon glyphicon-shopping-cart" title="Carrito"></span></a></li>
              <li><a href="miPerfil"><span class="glyphicon glyphicon-user" title="Mi Perfil"></span> <?php echo $this->session->userdata('nick'); ?></a></li>
              <li><a id="finSesion" href="finSesion" title="Finalizar Sesion">Finalizar Sesion <span class="glyphicon glyphicon-log-out"></span></a></li>
              <?php } else{ ?>
              <li><a href="#" data-toggle="modal" data-target="#login">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
              <?php } ?>
        </ul>
      </div>
    </div>
  </nav>