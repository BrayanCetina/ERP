@extends('layouts.app')
@section('content')
<header class="masthead text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">Rastree Su Envío</h1>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" class="form-control form-control-lg" placeholder="Ingrese numero de rastreo...">
            </div>
            <div class="col-12 col-md-3">
              <a class="buttonV btn btn-block btn-lg" id="buscarNumero" href="{{ route('rastreoVista') }}">Buscar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
<section class="features-icons bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <a class="m-auto"  href="{{ route('pedimentosVista') }}">
              <i class="fa fa-ship m-auto btn" style="color: #ff922b;"></i>
            </a>
          </div>
          <h3>Pedimentos</h3>
          <p class="lead mb-0"></p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex" >
            <a class="m-auto"  href="{{ route('facturasVista') }}">
              <i class="fa fa-coins m-auto btn" style="color: #ff922b;"></i>
            </a>
          </div>
          <h3>Facturación</h3>
          <p class="lead mb-0"></p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <a class="m-auto"  href="{{ route('documentosVista') }}">
              <i class="fa fa-folder m-auto btn" style="color: #ff922b;"></i>
            </a>
          </div>
          <h3>Documentación</h3>
          <p class="lead mb-0" ></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Image Showcases -->
<section class="showcase">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>Agencia Aduanal</h2>
        <p class="lead mb-0">Experiencia en el manejo de todos los sectores y régimenes aduaneros.</p>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
      <div class="col-lg-6 my-auto showcase-text">
        <h2>Agencia Consignataria</h2>
        <p class="lead mb-0">Contamos con servicio de Agenciamiento Marítimo de embarcaciones.</p>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>Logística</h2>
        <p class="lead mb-0">Contamos con alianzas comerciales con navieras, empresas de carga aérea y transporte terrestre.</p>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials -->
<section class="testimonials text-center bg-light">
</section>
<!-- Call to Action -->
<section class="call-to-action text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
@include('layouts.footerlayout')
<!-- Bootstrap core JavaScript -->
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('simple-line-icons/css/simple-line-icons.css') }}"  rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<!-- Custom styles for this template -->
<link href="{{ asset('css/index.css') }}" rel="stylesheet">

<link href="{{ asset('css/documentos.css') }}" rel="stylesheet">
<script src="{{ asset('js/rastreo.js') }}"></script>
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection
