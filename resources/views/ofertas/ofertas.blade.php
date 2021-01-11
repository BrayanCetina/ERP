@extends('layouts.app')
@section('content')
@include('layouts.subnav')
@include('ofertas.partials.form')
<header class="masthead2 text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">Ofertas</h1>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <br>
            </div>
            <div class="col-12 col-md-3">
              <br><br>
            </div>
          </div>
        </form>
      </div>
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
                <table id="tablaOfertas" class="table table-striped table-bordered" style="width:100%">
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
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
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
<script src="{{ asset('js/ofertas.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection
