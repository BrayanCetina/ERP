@extends('layouts.app')
@section('content')
<header class="masthead text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">ERP-NOVENO</h1>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
       <!-- <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" class="form-control form-control-lg" placeholder="Ingrese numero de rastreo...">
            </div>
            <div class="col-12 col-md-3">
              <a class="buttonV btn btn-block btn-lg" id="buscarNumero" href="{{ route('rastreoVista') }}">Buscar</a>
            </div>
          </div>
        </form>-->
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
              <i class="fas fa-handshake m-auto btn" style="color: #ff922b;"></i>
            </a>
          </div>
          <h3>CRM</h3>
          <p class="lead mb-0"></p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex" >
            <a class="m-auto"  href="{{ route('pedidosVista') }}">
              <i class="fas fa-file-signature m-auto btn" style="color: #ff922b;"></i>
            </a>
          </div>
          <h3>Pedidos</h3>
          <p class="lead mb-0"></p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <a class="m-auto"  href="{{ route('documentosVista') }}">
              <i class="fas fa-warehouse m-auto btn" style="color: #ff922b;"></i>
            </a>
          </div>
          <h3>MRP</h3>
          <p class="lead mb-0" ></p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <a class="m-auto"  href="{{ route('documentosVista') }}">
              <i class="fas fa-boxes m-auto btn" style="color: #ff922b;"></i>
            </a>
          </div>
          <h3>Productos</h3>
          <p class="lead mb-0" ></p>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <a class="m-auto"  href="{{ route('documentosVista') }}">
              <i class="fas fa-chart-bar m-auto btn" style="color: #ff922b;"></i>
         
            </a>
          </div>
          <h3>Ofertas</h3>
          <p class="lead mb-0" ></p>
        </div>
      </div>
  </div>
</section>
<!-- Image Showcases -->
<section class="showcase">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/img-1.jpg');"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>CRM</h2>
        <br>
        <ul>
          <li>Permitir la relación con los clientes.</li>
          <li>Mejorar la relación comercial.</li>
          <li>Establecer estrategias de mercado (Producción o Recursos Humanos).</li>
        </ul>
        

      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/img-2.jpg');"></div>
      <div class="col-lg-6 my-auto showcase-text">
        <h2>Pedidos</h2>
        <br>
        <ul>
        <li>Creación de pedidos a partir de la oferta.</li>
        <li>Cancelaciones de pedidos servidos parcialmente a criterio del usuario sin pérdida de información.</li>
        <li>Gestión de versiones o modificaciones de pedido.</li>
        </ul>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/img-3.jpg');"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>MRP</h2>
        <br>
        <ul>
        <li>Disminuir los inventarios de materias primas y productos terminados.</li>
        <li>Incrementar la eficiencia del proceso.</li>
        <li>Establecer alertas. Por ejemplo, cuando el sistema detecta la terminación imprevista de las existencias.</li>
        </ul>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/img-4.jpg');"></div>
      <div class="col-lg-6 my-auto showcase-text">
        <h2>Productos</h2>
        <br>
        <ul>
        <li>Ver la información de los productos.</li>
        <li>Modificar la información de los productos.</li>
        </ul>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/img-5.jpg');"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>Ofertas</h2>
        <br>
        <ul>
        <li>Establecer tarifas de los precios.</li>
        <li>Proyección de stocks previstos en fechas futuras, de acuerdo con órdenes de fabricación o pedidos a proveedor para calcular plazos de entrega.</li>
        <li>Permitir hasta 3 descuentos en cascada.</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
@include('layouts.footerlayout')
<div class="overlay"></div>
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
