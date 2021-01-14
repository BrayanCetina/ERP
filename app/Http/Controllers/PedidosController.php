<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pedidos;
use Hash;
use DB;


class PedidosController extends Controller
{
    //

    public function pedidosVistaAgregar(){
        return view('pedidos/createpedidos');
      }

    public function pedidosVista(){

        $datos = \DB::table('pedidos')
            ->select('pedidos.*')
            ->orderBy('id_pedido','DESC')
            ->get();


        return view('pedidos/pedidos')->with('pedidos',$datos);
      }

      public function store(Request $request){

       // $pedido = new Pedidos();
        $codigo_pedido = $request->codigo_pedido;
        $id_cliente = $request->id_cliente;
        $id_producto = $request->id_producto;
        $cantidad = $request->cantidad;
        $total = $request->total;
        $id_descuento_pedido = $request->id_descuento_pedido;
        $fecha_solicitud = $request->fecha_solicitud;
        $fecha_finalizado = $request->fecha_finalizado;
        $fecha_enviado = $request->fecha_enviado;
        $fecha_recibido = $request->fecha_recibido;

        $pedido = DB::insert('insert into pedidos (codigo_pedido, id_cliente, id_producto, cantidad, total, id_descuento_pedido, fecha_solicitud, fecha_finalizado, fecha_enviado, fecha_recibido)
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$codigo_pedido, $id_cliente, $id_producto, $cantidad, $total, $id_descuento_pedido, $fecha_solicitud, $fecha_finalizado, $fecha_enviado, $fecha_recibido]);

        $datos = \DB::table('pedidos')
        ->select('pedidos.*')
        ->orderBy('id_pedido','DESC')
        ->get();

        return view('pedidos/pedidos')->with('pedidos',$datos);
      }
      public function edit(Request $request){
        $id_pedido = $request->id_pedido;
        $codigo_pedido = $request->codigo_pedido;
        $id_cliente = $request->id_cliente;
        $id_producto = $request->id_producto;
        $cantidad = $request->cantidad;
        $total = $request->total;
        $id_descuento_pedido = $request->id_descuento_pedido;
        $fecha_solicitud = $request->fecha_solicitud;
        $fecha_finalizado = $request->fecha_finalizado;
        $fecha_enviado = $request->fecha_enviado;
        $fecha_recibido = $request->fecha_recibido;

        $pedido = DB::update('UPDATE pedidos SET codigo_pedido = ? , id_cliente = ? , id_producto = ? , cantidad = ?, total = ?, id_descuento_pedido = ?, fecha_solicitud = ?, fecha_finalizado = ?, fecha_enviado = ?, fecha_recibido = ?
        WHERE id_pedido = ?', [$codigo_pedido, $id_cliente, $id_producto, $cantidad, $total, $id_descuento_pedido, $fecha_solicitud, $fecha_finalizado, $fecha_enviado, $fecha_recibido, $id_pedido]);
      }
}
