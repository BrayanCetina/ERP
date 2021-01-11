<!DOCTYPE html>
<html>

<head>
    <title>Clientes</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

</head>

<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Software ERP
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <a class="nav-link" href="">{{ Auth::user()->name }}</a>
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesion') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
    </div>

    @include('layouts.subnav')

    <div class="container" style="margin-top:5%;margin-bottom:24%;">
        <h1 style="font-weight: bolder; color:#333B82; text-align:center;">Clientes</h1>
        <br>
        <button class="btn btn-primary" href="javascript:void(0)" id="btnAgregar"> Agregar</button>
        <br>
        <br>
        <div class="table-responsive">
        <table id="tablaClientes" class="table table-striped table-bordered table-condensed" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Numero</th>
                    <th>Estado</th>
                    <th>Fase</th>
                    <th>Gastos</th>
                    <th>Pedidos</th>
                    <th width="180px">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php                            
            foreach($reuniones as $reunion) {                                                        
                ?>
                <tr>
                    <td><?php echo $reunion['id_cliente'] ?></td> 
                    <td><?php echo $reunion['nombre'] ?></td>
                    <td><?php echo $reunion['correo'] ?></td>  
                    <td><?php echo $reunion['telefono'] ?></td>
                    <td><?php echo $reunion['calle'] ?></td>
                    <td><?php echo $reunion['colonia'] ?></td>
                    <td><?php echo $reunion['num_ext'] ?></td>   
                    <td><?php echo $reunion['estado'] ?></td>
                    <td><?php echo $reunion['fase'] ?></td>  
                    <td><?php echo $reunion['cantidad_gastos'] ?></td>
                    <td><?php echo $reunion['cantidad_pedidos'] ?></td>  
                    <td></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        </div>
    </div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="form" method='post' action='' enctype="multipart/form-data">    
            <div class="modal-body">
                <div class="form-group">
                    <label for="nombre" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
                    <div class="form-group">
                    <label for="correo" class="col-form-label">Correo:</label>
                    <input type="email" class="form-control" id="correo">
                </div>                
                <div class="form-group">
                    <label for="telefono" class="col-form-label">Telefono:</label>
                    <input type="number" class="form-control" id="telefono">
                </div>
                <div class="form-group">
                    <label for="calle" class="col-form-label">Calle:</label>
                    <input type="text" class="form-control" id="calle">
                </div>
                    <div class="form-group">
                    <label for="colonia" class="col-form-label">Colonia:</label>
                    <input type="text" class="form-control" id="colonia">
                </div>                
                <div class="form-group">
                    <label for="num" class="col-form-label">Número Exterior:</label>
                    <input type="text" class="form-control" id="num">
                </div>                      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript">

$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    $(document).ready(function() {
        tablaClientes = $("#tablaClientes").DataTable({
            "columnDefs": [{
                "targets": -1,
                "data": null,
                "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"
            }],

            //Para cambiar el lenguaje a español
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing": "Procesando...",
            }
        });


        $("#btnAgregar").click(function(){
            $("#form").trigger("reset");
            $(".modal-header").css("background-color", "#28a745");
            $(".modal-header").css("color", "white");
            $(".modal-title").text("Agregar Nuevo Cliente");            
            $("#modal").modal("show");
            id = null;        
            opcion = 1; //alta
        });

        $(document).on("click", ".btnEditar", function(){
            fila = $(this).closest("tr");
            id = parseInt(fila.find('td:eq(0)').text());
            nombre = fila.find('td:eq(1)').text();
            correo = fila.find('td:eq(2)').text();
            telefono = fila.find('td:eq(3)').text();
            calle = fila.find('td:eq(4)').text();
            colonia = fila.find('td:eq(5)').text();
            numero = fila.find('td:eq(6)').text();


            $("#nombre").val(nombre);   
            $("#correo").val(correo);
            $("#telefono").val(telefono); 
            $("#calle").val(calle);   
            $("#colonia").val(colonia);
            $("#num").val(numero);  
            
            opcion = 2;
            $(".modal-header").css("background-color", "#007bff");
            $(".modal-header").css("color", "white");
            $(".modal-title").text("Editar");            
            $("#modal").modal("show");  
    
        });

        $("#form").submit(function(e){
            e.preventDefault();  
            nombre = $.trim($("#nombre").val());
            correo = $.trim($("#correo").val());
            telefono = $.trim($("#telefono").val());
            calle = $.trim($("#calle").val());
            colonia = $.trim($("#colonia").val());
            numero = $.trim($("#num").val());
            $.ajax({
                url: "{{ route('clientes.store') }}",
                type: "POST",
                dataType: "json",
                data: {id:id, opcion:opcion, nombre:nombre, correo:correo, telefono:telefono, calle:calle, colonia:colonia, numero:numero},
                success: function(data){  
                    console.log(data);
                    id_cliente = data[0].id_cliente;
                    nombre = data[0].nombre;            
                    correo = data[0].correo;
                    telefono = data[0].telefono;
                    calle = data[0].calle;
                    colonia = data[0].colonia;
                    num_ext = data[0].num_ext;            
                    estado = data[0].estado;
                    fase = data[0].fase;            
                    cantidad_gastos = data[0].cantidad_gastos;
                    cantidad_pedidos = data[0].cantidad_pedidos;
                    if(opcion == 1){
                    tablaClientes.row.add([id_cliente,nombre,correo,telefono,calle,colonia,num_ext,estado,fase,cantidad_gastos,cantidad_pedidos]).draw();  
                    }else{
                        tablaClientes.row(fila).data([id_cliente,nombre,correo,telefono,calle,colonia,num_ext,estado,fase,cantidad_gastos,cantidad_pedidos]).draw();
                    }  
                }        
            });
            $("#modal").modal("hide");    
        
        });

        $(document).on("click", ".btnBorrar", function(){    
            fila = $(this);
            id = $(this).closest("tr").find('td:eq(0)').text();
            opcion = 3; //borrar
            var respuesta = confirm("¿Está seguro de eliminar el cliente: "+id+"?");
            if(respuesta){
                $.ajax({
                    url: "{{ route('clientes.store') }}",
                    type: "POST",
                    dataType: "json",
                    data: {opcion:opcion, id:id},
                    success: function(){
                        tablaClientes.row(fila.parents('tr')).remove().draw();
                    }
                });
            }   
        });

    });
    </script>

</body>

</html>