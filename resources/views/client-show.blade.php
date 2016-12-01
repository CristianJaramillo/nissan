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
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s5">
          
          <table class="highlight responsive-table">

            <thead>
              <th colspan="2" class="center-align">Información de Cliente</th>
            </thead>

            <tbody>
              
              <tr>
                <td>Cliente</td>
                <td>{{ $cliente->nombre_cliente }}</td>
              </tr>

              <tr>
                <td>Dirección</td>
                <td>{{ $cliente->direc_cliente }}</td>
              </tr>

              <tr>
                <td>Télefono</td>
                <td>{{ $cliente->tel_cliente }}</td>
              </tr>

            </tbody>

          </table>

        </div>

        <div class="col s7">

          <h5>Agregar Auto</h5>

          <form class="col s12" action="{{ route('client.car.store', $cliente->id_cliente) }}" method="POST" enctype="application/x-www-form-urlencoded">
            
            {{ csrf_field() }}
            
            <div class="row">
              <div class="input-field col s12">
                <input id="num_placa" name="num_placa" type="text" class="validate">
                <label for="num_placa">Numero de Placa</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s12">
                <input id="nombre_auto" name="nombre_auto" type="text" class="validate">
                <label for="nombre_auto">Marca</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="color_auto" name="color_auto" type="text" class="validate">
                <label for="color_auto">Color</label>
              </div>
            </div>
            
            <button class="btn waves-effect waves-light blue darken-2 right" type="submit" name="action">Guardar
              <i class="material-icons right">send</i>
            </button>

          </form> 

        </div>

      </div>

      <div class="row">
        <div class="col s12">
          <table class="bordered centered highlight responsive-table">
            <thead>
              <tr>
                  <th data-field="num_placa">Número de placa</th>
                  <th data-field="nombre_auto">Marca</th>
                  <th data-field="color">Color</th>
                  <th data-field="edit_auto">Editar Auto</th>
              </tr>
            </thead>

            <tbody>
              @foreach($cliente->autos as $auto)
              <tr>
                <td>{{ $auto->num_placa }}</td>
                <td>{{ $auto->nombre_auto }}</td>
                <td>{{ $auto->color_auto }}</td>
                <td>
                  <a href="{{ route('client.car.show', [ $cliente->id_cliente, $auto->num_placa]) }}" class="btn-floating btn-large waves-effect waves-light blue darken-2">
                    <i class="material-icons">edit</i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>          
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
