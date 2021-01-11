@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Pedido</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createpedidos') }}">
                       
                        <label for="codigo_pedido">{{'CODIGO DEL PEDIDO'}}</label>
                        <input type="text" name="codigo_pedido" id="codigo_pedido" value="{{old('codigo_pedido')}}">
                        <br>
                        <label for="id_cliente">{{'ID CLIENTE'}}</label>
                        <input type="text" name="id_cliente" id="id_cliente" value="{{old('id_cliente')}}">
                        <br>
                        <label for="id_producto">{{'ID PRODUCTO'}}</label>
                        <input type="text" name="id_producto" id="id_producto" value="{{old('id_producto')}}">
                        <br>
                        <label for="cantidad">{{'CANTIDAD'}}</label>
                        <input type="text" name="cantidad" id="cantidad" value="{{old('cantidad')}}">
                        <br>
                        <label for="total">{{'TOTAL'}}</label>
                        <input type="text" name="total" id="total" value="">
                        <br>
                        <label for="id_descuento_pedido">{{'ID DESCUENTO PEDIDO'}}</label>
                        <input type="text" name="id_descuento_pedido" id="id_descuento_pedido" value="{{old('id_descuento_pedido')}}">
                        <br>
                        <label for="fecha_solicitud">{{'FECHA SOLICITUD'}}</label>
                        <input type="date" name="fecha_solicitud" id="fecha_solicitud" value="">
                        <br>
                        <label for="fecha_finalizado">{{'FECHA FINALIZADO'}}</label>
                        <input type="date" name="fecha_finalizado" id="fecha_finalizado" value="">
                        <br>
                        <label for="fecha_enviado">{{'FECHA ENVIADO'}}</label>
                        <input type="date" name="fecha_enviado" id="fecha_enviado" value="">
                        <br>
                        <label for="fecha_recibido">{{'FECHA RECIBIDO'}}</label>
                        <input type="date" name="fecha_recibido" id="fecha_recibido" value="">
                        <br>
                        <input type="submit" value="Agregar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
