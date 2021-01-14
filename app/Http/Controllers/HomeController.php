<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function documentosVista(){
      return view('documentos/documentos');
    }

    public function pedimentosVista(){
      return view('pedimentos/pedimentos');
    }
    public function facturacionVista(){
      return view('facturacion/facturacion');
    }
    public function rastreoVista(){
      return view('rastreo/rastreo');
    }
    public function clientesVista(){
      return \Redirect::route('clientes.index');
    }
    public function ofertasVista(){
      return view('ofertas/ofertas');
  }
    public function mrpIndex(){
      return view('mrp.index');

    }
    public function mrpPedido(){
      return view('mrp.pedido');

    }
}
