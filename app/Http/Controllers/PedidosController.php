<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pedidos;
use Hash;


class PedidosController extends Controller
{
    //

    public function createpedidos(){
        return view('pedidos/createpedidos');
      }

    public function pedidosVista(){

        $datos = \DB::table('pedidos')
            ->select('pedidos.*')
            ->orderBy('id_pedido','DESC')
            ->get();


        return view('pedidos/pedidos')->with('pedidos',$datos);
      }
}
