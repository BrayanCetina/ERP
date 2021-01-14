@extends('layouts.app')
@section('content')
@include('layouts.subnav')
@include('ofertas.partials.form')
<header class="masthead2 text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    </div>
  </div>
</header>
<br>
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                </div>
                +                <table id="tablaOfertas" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                        <th>ID</th>
                          <th>NOMBRE</th>
                          <th>PORCENTAJE</th>
                          <th>ESTADO</th>
                          <th>FECHA</th>
                        </tr>
                    </thead>
                </table>
                    <div class="col-md-6 subir-archivos">
                        <div class="row">
                            <div class="col-md-6">
                            <a onclick="vermodalOfertas();" class="btn btn-primary btn-block">Agregar oferta</a>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
  </div>
  <!-- Footer -->
@include('layouts.footerlayout')
<!-- Bootstrap core JavaScript -->
<link href="{{ asset('css/documentos.css') }}" rel="stylesheet">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/ofertas.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection