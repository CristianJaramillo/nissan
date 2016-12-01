<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Servicios - Nissan</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo">Nissan</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li><a href="{{ route('client') }}">Clientes</a></li>
        <li><a href="{{ route('service') }}">Servicios</a></li>
        <li><a href="{{ route('appointment') }}">Citas</a></li>
        <li><a href="{{ route('sign-up') }}">Registro</a></li>
        <li><a href="{{ route('store.procedure.report') }}">Reportes</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li><a href="{{ route('client') }}">Clientes</a></li>
        <li><a href="{{ route('service') }}">Servicios</a></li>
        <li><a href="{{ route('appointment') }}">Citas</a></li>
        <li><a href="{{ route('sign-up') }}">Registro</a></li>
        <li><a href="{{ route('store.procedure.report') }}">Reportes</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">

      <h1>Registro de Clientes</h1>

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 offset-m2 m8 offset-l2 l8">
          <form class="col s12" action="{{ route('client.store') }}" method="POST" enctype="application/x-www-form-urlencoded">
            
            {{ csrf_field() }}
            
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="nombre_cliente" name="nombre_cliente" type="text" class="validate">
                <label for="nombre_cliente">Nombre del cliente</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">location_on</i>
                <input id="direc_cliente" name="direc_cliente" type="text" class="validate">
                <label for="direc_cliente">Direción del cliente</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input id="tel_cliente" name="tel_cliente" type="tel" class="validate">
                <label for="tel_cliente">Telefono del cliente</label>
              </div>
            </div>
            
            <button class="btn waves-effect waves-light blue darken-2 right" type="submit" name="action">Guardar
              <i class="material-icons right">send</i>
            </button>

          </form>          
        </div>
      </div>

    </div>
  </div>

  <footer class="page-footer blue darken-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Acerca de Nissan</h5>
          <p class="grey-text text-lighten-4">Nissan Motor Company, Limited es un fabricante japonés de automóviles, con base en Yokohama. Su nombre común, Nissan, es un acrónimo de "Nippon Sangyo". Está entre las principales compañías automotrices en términos de producción anual de vehículos. </p>


        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>

  </body>
</html>
