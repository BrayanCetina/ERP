@extends('layouts.app')
@section('content')
@include('layouts.subnav')
@include('mrp.materiap')
<header class="masthead5 text-white text-center">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">MRP</h1>
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
  <div class="form-group">
   
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    NUEVO
                </div>
              <div class="card-body">
                <h5 class="card-title">Orden de Producción</h5>
                <label for="Nombreproducto">Producto</label>
                <div class="row">
                    <div class="col-md-8">
                        <input id="nomproduct" class="form-control" type="text">
                    </div>
                    <div class="col-md-4">
                        <a onclick="comprobarproducto();" class="btn btn-primary">BUSCAR</a>
                    </div>
                    
                </div>
                <br>
                <label for="Cantidad">Cantidad a Producir</label>
                <div class="row">
                    <div class="col-md-8">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <?php   for($i=1;$i<=2000;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                    
                </div>                
                <br>
                 <label for="fecha">Fecha Prevista</label>
                <div class="row">
                    <div class="col-md-8">
                        {!!Form::date('fechac[1]',\Carbon\Carbon::now(),['class'=>'form-control','id'=>'fecin1','placeholder'=>'Fecha inhabil'])!!} 
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                    
                </div>                
                <br>
                <label for="NombreMateriales">Lista de Materiales</label>
                <div class="row">
                    <div class="col-md-8">
                        <input class="form-control" type="text">
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">BUSCAR</a>
                        <a onclick="modalpedido();" class="btn btn-info">AGREGAR</a>
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="NombreMateriales">Precio Creación</label>
                    </div>
                    <div class="col-md-6">
                        <label for="NombreMateriales" >Precio Creación</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" type="number">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="number">
                    </div>
                    
                </div>
                <br>
                <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                <a href="#" class="btn btn-primary">CONFIRMAR</a>
                
              </div>
            </div>
        </div>
        <div class="col-md-2"></div>
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
<script src="{{ asset('js/listaproductos.js') }}"></script>
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection
