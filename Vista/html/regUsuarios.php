<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


  <title>tienda_virtual</title>


  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="Vista/css/bootstrap.min.css"/>

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="Vista/css/slick.css"/>
  <link type="text/css" rel="stylesheet" href="Vista/css/slick-theme.css"/>

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="Vista/css/nouislider.min.css"/>

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="Vista/css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="vista/css/style.css"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  </head>

  <body>
    <header>
    <!-- TOP HEADER -->
    <div id="top-header">
      <div class="container">
        <ul class="header-links pull-left">
          <li><a href="#"><i class="fa fa-phone"></i>3135331452</a></li>
          <li><a href="#"><i class="fa fa-envelope-o"></i> leonardfranco01@hotmail.com</a></li>
          <li><a href="#"><i class="fa fa-map-marker"></i>San Pedro de Uraba</a></li>
        </ul>
      </div>
    </div>
  </header>

    <!-- NAVIGATION   SESUNDO MENU-->
      <nav id="navigation">
          <!-- container -->
          <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
              <!-- NAV -->
              <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
              </ul>
              <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
          </div>
          <!-- /container -->
        </nav>
        <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">

        <div class="col-md-7">
          <!-- Billing Details -->
          <div class="billing-details">
           <form action="index.php?accion=guardarusuario" method="post">
            <div class="section-title">
              <h3 class="title">Registro de usuario</h3>
            </div>
            <div class="form-group">
              <input class="input" type="text" name="apel" placeholder="Primer apellido">
            </div>
            <div class="form-group">
              <input class="input" type="text" name="nom" placeholder="Primer Nombre">
            </div>
            <div class="form-group">
              <input class="input" type="email" name="ema" placeholder="Email">
            </div>
            <div class="form-group">
              <input class="input" type="text" name="dir" placeholder="Direccion">
            </div>
            <div class="form-group">
              <input class="input" type="text" name="ciu" placeholder="Ciudad">
            </div>
            <div class="form-group">
              <input class="input" type="text" name="cel" placeholder="Numero de celular">
            </div>
            <div class="form-group">
              <input class="input" type="text" name="tel" placeholder="Telefono">
            </div>
            <div class="form-group">
              <div class="input-checkbox">
                <input type="checkbox" id="create-account">
                <label for="create-account">
                  <span></span>
                  Crear una cuenta?
                </label>
                <div class="caption">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                  <div class="form-group">
                  <input class="input" type="password" name="con" placeholder="Ingrese su contraseña">
                  </div>
                  <div class="form-group">
                  <input class="input" type="password" name="con2" placeholder="Confirme su contraseña">
                  </div>
                  <div class="form-group">
                  <input type="submit" class="primary-btn order-submit" value="Registrar">
                  </div>
                </div>
              </div>
            </div>
           </form>
          </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->
  </body>
  </html>