@extends('layouts.app')
@section('content')
@include('layouts.subnav')
<header class="masthead2 text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">Mis Documentos</h1>
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
  <div class="container-fluid adm-archivos">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                </div>
                <table class="table table-bordered table-hover vmiddle">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                            <th>Tamaño</th>
                            <th>Fecha</th>
                            <th>Carga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Listado General de Personas</td>
                            <td class="text-center">
                              <a href="#" class="fas fa-trash-alt m-auto text-danger" ></a>
                              <a href="#" class="fas fa-pen-alt m-auto text-primary" ></a>
                              <a href="#" class="fas fa-exclamation-circle m-auto text-warning" ></a>
                            </td>
                            <td>523.0 KB </td>
                            <td>16-sep-16 09:48:2</td>
                            <td>
                              <div class="input-group">
                                  <input type="file" name="" value="">
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Listado General de Personas</td>
                            <td class="text-center">
                              <a href="#" class="fas fa-trash-alt m-auto text-danger" ></a>
                              <a href="#" class="fas fa-pen-alt m-auto text-primary" ></a>
                              <a href="#" class="fas fa-exclamation-circle m-auto text-warning" ></a>
                            </td>
                            <td>523.0 KB </td>
                            <td>16-sep-16 09:48:2</td>
                            <td>
                              <div class="input-group">
                                  <input type="file" name="" value="">
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Listado General de Personas</td>
                            <td class="text-center">
                                <a href="#" class="fas fa-trash-alt m-auto text-danger" ></a>
                                <a href="#" class="fas fa-pen-alt m-auto text-primary" ></a>
                                <a href="#" class="fas fa-exclamation-circle m-auto text-warning" ></a>
                            </td>
                            <td>523.0 KB </td>
                            <td>16-sep-16 09:48:2</td>
                            <td>
                              <div class="input-group">
                                  <input type="file" name="" value="">
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Listado General de Personas</td>
                            <td class="text-center">
                              <a href="#" class="fas fa-trash-alt m-auto text-danger" ></a>
                              <a href="#" class="fas fa-pen-alt m-auto text-primary" ></a>
                              <a href="#" class="fas fa-exclamation-circle m-auto text-warning" ></a>
                            </td>
                            <td>523.0 KB </td>
                            <td>16-sep-16 09:48:2</td>
                            <td>
                              <div class="input-group">
                                  <input type="file" name="" value="">
                              </div>
                            </td>
                        </tr>
                    </tbody>
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
                                <div class="col-md-6">
                                    Total de carga
                                </div>
                                <div class="col-md-6">
                                    523.0 KB
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary btn-block" href="#">Subir archivo</a>
                            </div>
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
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection
