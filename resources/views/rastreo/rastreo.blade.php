@extends('layouts.app')
@section('content')
<header class="text-white text-center">
  @include('layouts.subnav')
</header>
<section class="features-icons bg-light">
  <div class="container">
    <div id="timeline-wrap">
      <div id="timeline"></div>
    <!-- This is the individual marker-->
      <div class="marker mfirst timeline-icon one">
        <i class="fa fa-list"></i>
      </div>
      <div class="marker2 T1iconSeg">
        Cotizado
      </div>
    <!-- / marker -->
    <!-- This is the individual marker-->
      <div class="marker m2 timeline-icon two">
        <i class="fa fa-coins"></i>
      </div>
      <div class="marker2 T2iconSeg">
        Pagado
      </div>
    <!-- / marker -->
    <!-- This is the individual marker-->
      <div class="marker m3 timeline-icon three">
        <i class="fa fa-ship"></i>
      </div>
      <div class="marker2 T3iconSeg">
        Embarcado
      </div>
    <!-- / marker -->
    <!-- This is the individual marker-->
      <div class="marker mlast timeline-icon four">
        <i class="fa fa-check"></i>
      </div>
      <div class="marker2 T4iconSeg">
        Recibido
      </div>
    <!-- / marker -->
  </div>
  </div>
</section>
  <div class="container-fluid adm-archivos">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center"></div>
                <table class="table table-bordered table-hover vmiddle">
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>MOVIMIENTO</th>
                            <th>UBICACION</th>
                            <th>ENTRADA</th>
                            <th>SALIDA</th>
                        </tr>
                        <tbody>
                          <tr>
                            <td>12/12/2020</td>
                            <td>Embarcado</td>
                            <td>Muelle Progreso, Yuc.</td>
                            <td>11:25 AM</td>
                            <td>01:36 PM</td>
                          </tr>
                          <tr>
                            <td>12/12/2020</td>
                            <td>Embarcado</td>
                            <td>Muelle Progreso, Yuc.</td>
                            <td>11:25 AM</td>
                            <td>01:36 PM</td>
                          </tr>
                          <tr>
                            <td>12/12/2020</td>
                            <td>Embarcado</td>
                            <td>Muelle Progreso, Yuc.</td>
                            <td>11:25 AM</td>
                            <td>01:36 PM</td>
                          </tr>
                          <tr>
                            <td>12/12/2020</td>
                            <td>Embarcado</td>
                            <td>Muelle Progreso, Yuc.</td>
                            <td>11:25 AM</td>
                            <td>01:36 PM</td>
                          </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
  </div>
<!-- Footer -->
@include('layouts.footerlayout')
<!-- Bootstrap core JavaScript -->
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('simple-line-icons/css/simple-line-icons.css') }}"  rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<!-- Custom styles for this template -->
<link href="{{ asset('css/documentos.css') }}" rel="stylesheet">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection
