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
              <th colspan="2">Información de cita</th>
            </thead>

            <tbody>
              
              <tr>
                <td>ID Cita</td>
                <td>{{ $cita->id_cita }}</td>
              </tr>

              <tr>
                <td>Placas del Auto</td>
                <td>{{ $cita->auto->num_placa }}</td>
              </tr>

              <tr>
                <td>Marca del Auto</td>
                <td>{{ $cita->auto->nombre_auto }}</td>
              </tr>

              <tr>
                <td>Color del Auto</td>
                <td>{{ $cita->auto->color_auto }}</td>
              </tr>

              <tr>
                <td>Fecha de la cita</td>
                <td>{{ $cita->fecha }}</td>
              </tr>

            </tbody>

          </table>

        </div>

        <div class="col s7">

          <h5>Agregar Servicio</h5>

          <form class="col s12" action="{{ route('appointment.service.store', $cita->id_cita) }}" method="POST" enctype="application/x-www-form-urlencoded">
            
            {{ csrf_field() }}
            
            <div class="row">
              <div class="input-field col s12">
                <select id="id_servicio" name="id_servicio">
                  <option value="" selected>Elije un servicio</option>
                  @foreach($servicios as $servicio)
                  <option value="{{ $servicio->id_servicio }}">{{ $servicio->tipo_servicio }}</option>
                  @endforeach
                </select>
                <label for="id_servicio">Selecciona un servicio</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s12">
                <input id="obser_servicio" name="obser_servicio" type="text" class="validate">
                <label for="obser_servicio">Observaciones</label>
              </div>
            </div>

            @if(is_null($cita->total))
            
            <button class="btn waves-effect waves-light blue darken-2 right" type="submit" name="action">Guardar
              <i class="material-icons right">send</i>
            </button>

            @endif

          </form>
        </div>

      </div>

      <div class="row">
        <div class="col s12">

          <table class="bordered highlight responsive-table">
            <thead>
              <tr>
                  <th data-field="id_servicio">Id del Servicio</th>
                  <th data-field="tipo_servicio">Tipo de Servicio</th>
                  <th data-field="costo_servicio">Costo del Servicio</th>
                  <th data-field="iva_servicio">IVA del Servicio</th>
                  <th data-field="obser_servicio">Observaciones</th>
              </tr>
            </thead>

            <tbody>
              @foreach($cita->detalles as $detalle)
              <tr>
                <td>{{ $detalle->servicio->id_servicio }}</td>
                <td>{{ $detalle->servicio->tipo_servicio }}</td>
                <td>{{ sprintf('$ %6.2f', $detalle->servicio->costo_servicio) }}</td>
                <td>{{ sprintf('%3.2f %%', ($detalle->servicio->iva_servicio * 100)) }}</td>
                <td>{{  $detalle->obser_servicio }}</td>
              </tr>
              @endforeach

              <tr>
                
                <td colspan="4" class="flow-text">
                  Total
                </td>

                <td class="flow-text">
                  @if(is_null($cita->total))
      
                  <a href="{{ route('store.procedure.total.cita', $cita->id_cita) }}" class="btn waves-effect waves-light blue darken-2 right" type="submit" name="action">Finalizar
                    <i class="material-icons right">send</i>
                  </a>

                  @else

                  {{ sprintf('$ %7.2f', $cita->total) }}

                  @endif
                </td>

              </tr>

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
