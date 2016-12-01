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
        
        <div class="col s4">
          <h5>Reportes de Servicios</h5>

          <form class="col s12" action="{{ route('store.procedure.report.show') }}" method="POST" enctype="application/x-www-form-urlencoded">
            
            {{ csrf_field() }}
            
            <div class="row">
              <div class="input-field col s12">
                <label for="start_date">Fecha de inicio</label>
                <input id="start_date" type="date" name="start_date" class="datepicker">
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <label for="stop_date">Fecha de termino</label>
                <input id="stop_date" type="date" name="stop_date" class="datepicker">
              </div>
            </div>
            
            <button class="btn waves-effect waves-light blue darken-2 right" type="submit" name="action">Guardar
              <i class="material-icons right">send</i>
            </button>

          </form>
        </div>

        <div class="col s8">
          
          <table class="bordered centered highlight responsive-table">
            <thead>
              <tr>
                  <th data-field="tipo_servicio">Nombre del Servicio</th>
                  <th data-field="costo_servicio">Costo</th>
                  <th data-field="iva_servicio">IVA</th>
                  <th data-field="costo_total_servicio">Costo Total</th>
                  <th data-field="ganancia_total">Ganancia Total</th>
                  <th data-field="eventos">Total de eventos</th>
              </tr>
            </thead>

            <tbody>

            @if(is_null($reports))

              <tr>
                <td colspan="6">Sin resultados</td>
              </tr>

            @else

              @foreach($reports as $report)
              <tr>
                <td>{{ $report->tipo_servicio }}</td>
                <td>{{ sprintf('$ %7.2f', $report->costo_servicio) }}</td>
                <td>{{ sprintf('%7.2f %%', ($report->iva_servicio * 100)) }}</td>
                <td>{{ sprintf('$ %7.2f', $report->costo_total_servicio ) }}</td>
                <td>{{ sprintf('$ %7.2f', $report->ganancia_total ) }}</td>
                <td>{{ $report->eventos }}</td>
              </tr>
              @endforeach

            @endif
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
