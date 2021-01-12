@extends('layouts.app')
@section('content')
@include('layouts.subnav')
<header class="masthead5 text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">Mis Pedidos</h1>
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
<button type="button" class="btn btn-primary" style="margin:2% 0 2% 90%;" data-toggle="modal" data-target="#modalAgregar">
  Nuevo Pedido
</button>

<!-- Modal Agregar-->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('pedidos.store')}}" method="POST">
        @csrf

        <div class="modal-body">
            <div class="form-group">
                        <label for="codigo_pedido">{{'CODIGO DEL PEDIDO'}}</label>
                        <input type="text" class="form-control" name="codigo_pedido" id="codigo_pedido" value="{{old('codigo_pedido')}}">
                        <br>
                        <label for="id_cliente">{{'ID CLIENTE'}}</label>
                        <input type="text" class="form-control" name="id_cliente" id="id_cliente" value="{{old('id_cliente')}}">
                        <br>
                        <label for="id_producto">{{'ID PRODUCTO'}}</label>
                        <input type="text" class="form-control" name="id_producto" id="id_producto" value="{{old('id_producto')}}">
                        <br>
                        <label for="cantidad">{{'CANTIDAD'}}</label>
                        <input type="text" class="form-control" name="cantidad" id="cantidad" value="{{old('cantidad')}}">
                        <br>
                        <label for="total">{{'TOTAL'}}</label>
                        <input type="text" class="form-control" name="total" id="total" value="">
                        <br>
                        <label for="id_descuento_pedido">{{'ID DESCUENTO PEDIDO'}}</label>
                        <input type="text" class="form-control" name="id_descuento_pedido" id="id_descuento_pedido" value="{{old('id_descuento_pedido')}}">
                        <br>
                        <label for="fecha_solicitud">{{'FECHA SOLICITUD'}}</label>
                        <input type="date" class="form-control" name="fecha_solicitud" id="fecha_solicitud" value="">
                        <br>
                        <label for="fecha_finalizado">{{'FECHA FINALIZADO'}}</label>
                        <input type="date" class="form-control" name="fecha_finalizado" id="fecha_finalizado" value="">
                        <br>
                        <label for="fecha_enviado">{{'FECHA ENVIADO'}}</label>
                        <input type="date"  class="form-control" name="fecha_enviado" id="fecha_enviado" value="">
                        <br>
                        <label for="fecha_recibido">{{'FECHA RECIBIDO'}}</label>
                        <input type="date" class="form-control" name="fecha_recibido" id="fecha_recibido" value="">
                        <br>            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- Modal Editar-->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" action="" method="POST">
      @csrf
        <div class="modal-body">
            <div class="form-group">
                        
                        <label for="codigo_pedido">{{'CODIGO DEL PEDIDO'}}</label>
                        <input type="text" class="form-control" name="codigo_pedido" id="codigo_pedido" value="{{old('codigo_pedido')}}">
                        <br>
                        <label for="id_cliente">{{'ID CLIENTE'}}</label>
                        <input type="text" class="form-control" name="id_cliente" id="id_cliente" value="{{old('id_cliente')}}">
                        <br>
                        <label for="id_producto">{{'ID PRODUCTO'}}</label>
                        <input type="text" class="form-control" name="id_producto" id="id_producto" value="{{old('id_producto')}}">
                        <br>
                        <label for="cantidad">{{'CANTIDAD'}}</label>
                        <input type="text" class="form-control" name="cantidad" id="cantidad" value="{{old('cantidad')}}">
                        <br>
                        <label for="total">{{'TOTAL'}}</label>
                        <input type="text" class="form-control" name="total" id="total" value="">
                        <br>
                        <label for="id_descuento_pedido">{{'ID DESCUENTO PEDIDO'}}</label>
                        <input type="text" class="form-control" name="id_descuento_pedido" id="id_descuento_pedido" value="{{old('id_descuento_pedido')}}">
                        <br>
                        <label for="fecha_solicitud">{{'FECHA SOLICITUD'}}</label>
                        <input type="date" class="form-control" name="fecha_solicitud" id="fecha_solicitud" value="">
                        <br>
                        <label for="fecha_finalizado">{{'FECHA FINALIZADO'}}</label>
                        <input type="date" class="form-control" name="fecha_finalizado" id="fecha_finalizado" value="">
                        <br>
                        <label for="fecha_enviado">{{'FECHA ENVIADO'}}</label>
                        <input type="date"  class="form-control" name="fecha_enviado" id="fecha_enviado" value="">
                        <br>
                        <label for="fecha_recibido">{{'FECHA RECIBIDO'}}</label>
                        <input type="date" class="form-control" name="fecha_recibido" id="fecha_recibido" value="">

                        <br>            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>

  <div class="container-fluid adm-archivos">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                </div>
                <table  id="tablaPedidos" class="table table-bordered table-hover vmiddle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CODIGO</th>
                            <th>ID CLIENTE</th>
                            <th>ID PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                            <th>ID DESCUENTO</th>
                            <th>FECHA SOLICITUD</th>
                            <th>FECHA FINALIZADO</th>
                            <th>FECHA ENVIADO</th>
                            <th>FECHA RECIBIDO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pedidos as $pedido)
                        <tr>
                            <td>{{$pedido->id_pedido}}</td>
                            <td>{{$pedido->codigo_pedido}}</td>
                            <td>{{$pedido->id_cliente}}</td>
                            <td>{{$pedido->id_producto}}</td>
                            <td>{{$pedido->cantidad}}</td>
                            <td>{{$pedido->total}}</td>
                            <td>{{$pedido->id_descuento_pedido}}</td>
                            <td>{{$pedido->fecha_solicitud}}</td>
                            <td>{{$pedido->fecha_finalizado}}</td>
                            <td>{{$pedido->fecha_enviado}}</td>
                            <td>{{$pedido->fecha_recibido}}</td>
                            <td>
                                <!--<button class="btn btn-round"> <i class="fa fa-trash"></i> </button>-->
                                <button class="btn btn-round btnEditar"  data_pedido="{{$pedido->id_pedido}}" > <i class="fa fa-edit"></i> </button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
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


<script type="text/javascript"> 


$(document).on("click", ".btnEditar", function(){
            fila = $(this).closest("tr");
            id_pedido = parseInt(fila.find('td:eq(0)').text());
            codigo_pedido = fila.find('td:eq(1)').text();
            id_cliente = fila.find('td:eq(2)').text();
            id_producto = fila.find('td:eq(3)').text();
            cantidad = fila.find('td:eq(4)').text();
            total = fila.find('td:eq(5)').text();
            id_descuento_pedido = fila.find('td:eq(6)').text();
            fecha_solicitud = fila.find('td:eq(7)').text();
            fecha_finalizado = fila.find('td:eq(8)').text();
            fecha_enviado = fila.find('td:eq(9)').text();
            fecha_recibido = fila.find('td:eq(10)').text();



            $("#codigo_pedido").val(codigo_pedido);   
            $("#id_cliente").val(id_cliente);
            $("#id_producto").val(id_producto); 
            $("#cantidad").val(cantidad);   
            $("#total").val(total);
            $("#id_descuento_pedido").val(id_descuento_pedido);  
            $("#fecha_solicitud").val(fecha_solicitud);  
            $("#fecha_finalizado").val(fecha_finalizado);  
            $("#fecha_enviado").val(fecha_enviado);  
            $("#fecha_recibido").val(fecha_recibido);  

            
            $(".modal-header").css("background-color", "#007bff");
            $(".modal-header").css("color", "white");
            $(".modal-title").text("Editar");            
            $("#modalAgregar").modal("show");  
    
        });



   $("#form").submit(function(e){
            e.preventDefault();  
            codigo_pedido = $.trim($("#codigo_pedido").val());
            id_cliente = $.trim($("#id_cliente").val());
            id_producto = $.trim($("#id_producto").val());
            cantidad = $.trim($("#cantidad").val());
            total = $.trim($("#total").val());
            id_descuento_pedido = $.trim($("#id_descuento_pedido").val());
            fecha_solicitud = $.trim($("#fecha_solicitud").val());
            fecha_finalizado = $.trim($("#fecha_finalizado").val());
            fecha_enviado = $.trim($("#fecha_enviado").val());
            fecha_recibido = $.trim($("#fecha_recibido").val());
            $.ajax({
                url: "{{ route('pedidos.edit') }}",
                type: "POST",
                dataType: "json",
                data: {id_producto:id_producto, codigo_pedido:codigo_pedido, id_cliente:id_cliente, id_producto:id_producto, cantidad:cantidad, total:total, id_descuento_pedido:id_descuento_pedido, fecha_solicitud:fecha_solicitud, fecha_finalizado:fecha_finalizado, fecha_enviado:fecha_enviado, fecha_recibido:fecha_recibido},
                success: function(data){  
                    console.log(data);
                    id_pedido = data[0].id_pedido;
                    codigo_pedido = data[0].codigo_pedido;            
                    id_cliente = data[0].id_cliente;
                    id_producto = data[0].id_producto;
                    cantidad = data[0].cantidad;
                    total = data[0].total;
                    id_descuento_pedido = data[0].id_descuento_pedido;            
                    fecha_solicitud = data[0].fecha_solicitud;
                    fecha_finalizado = data[0].fecha_finalizado;            
                    fecha_enviado = data[0].fecha_enviado;
                    fecha_recibido = data[0].fecha_recibido;
                    
                    tablaPedidos.row(fila).data([id_producto,codigo_pedido,id_cliente,id_producto,cantidad,total,id_descuento_pedido,fecha_solicitud,fecha_finalizado,fecha_enviado,fecha_recibido]).draw();
                    
                }        
            });
            $("#modalAgregar").modal("hide");    
        
        });

</script>


@endsection
