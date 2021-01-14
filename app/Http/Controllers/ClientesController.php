<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reuniones = DB::select('select clientes.*, direccion.calle, direccion.colonia, direccion.num_ext, estado_cliente.estado, fases.fase from clientes, direccion, estado_cliente, fases where clientes.id_direccion=direccion.id_direccion and clientes.id_estado=estado_cliente.id_estado and clientes.id_fase=fases.id_fases');
        $reuniones = array_map(function ($value) {
            return (array)$value;
        }, $reuniones);

        return view('clientes', ['reuniones' => $reuniones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opcion = $request->opcion;
        $id = $request->id;
    
        
        switch($opcion){
            case 1:
                $nombre = $request->nombre;
                $correo = $request->correo;
                $telefono = $request->telefono;
                $calle = $request->calle;
                $colonia = $request->colonia;
                $numero = $request->numero;
                $numint = "";
                $estado="1";
                $fase ="1";
                $gastos="0";
                $pedidos="0";

                $direc = DB::insert('insert into direccion (calle, colonia, num_ext, num_int)
                values (?, ?, ?, ?)', [$calle, $colonia, $numero, $numint]);

                $direccion = DB::select('SELECT id_direccion from direccion ORDER BY id_direccion DESC LIMIT 1');

                $direccion = array_map(function ($value) {
                    return (array)$value;
                }, $direccion);

                foreach($direccion as $direc) {                                                        
                    $direcc = $direc['id_direccion'];
                }
                
                $cliente = DB::insert('insert into clientes (nombre, correo, telefono, id_direccion, id_estado, id_fase, cantidad_gastos, cantidad_pedidos)
                values (?, ?, ?, ?, ?, ?, ?, ?)', [$nombre, $correo, $telefono, $direcc, $estado, $fase, $gastos, $pedidos]);

                $profesores = DB::select('select clientes.*, direccion.calle, direccion.colonia, direccion.num_ext, estado_cliente.estado, fases.fase from clientes, direccion, estado_cliente, fases where clientes.id_direccion=direccion.id_direccion and clientes.id_estado=estado_cliente.id_estado and clientes.id_fase=fases.id_fases ORDER BY id_cliente DESC LIMIT 1');

                return response()->json($profesores);
                break;
            case 2:

                $nombre = $request->nombre;
                $correo = $request->correo;
                $telefono = $request->telefono;
                $calle = $request->calle;
                $colonia = $request->colonia;
                $numero = $request->numero;

                $direccion = DB::select('SELECT id_direccion from clientes WHERE id_cliente = ?', [$id]);

                $direccion = array_map(function ($value) {
                    return (array)$value;
                }, $direccion);

                foreach($direccion as $direc) {                                                        
                    $direcc = $direc['id_direccion'];
                }

                $dir = DB::update('UPDATE direccion SET calle = ? , colonia = ? , num_ext = ? 
                WHERE id_direccion = ?', [$calle, $colonia, $numero, $direcc]);

                $cliente = DB::update('UPDATE clientes SET nombre = ? , correo = ? , telefono = ? 
                WHERE id_cliente = ?', [$nombre, $correo, $telefono, $id]);

                $profesores = DB::select('select clientes.*, direccion.calle, direccion.colonia, direccion.num_ext, estado_cliente.estado, fases.fase from clientes, direccion, estado_cliente, fases where clientes.id_direccion=direccion.id_direccion and clientes.id_estado=estado_cliente.id_estado and clientes.id_fase=fases.id_fases AND id_cliente = ?', [$id]);

                return response()->json($profesores);
                break;
            case 3:
                $profesor = DB::delete('DELETE FROM clientes WHERE id_cliente = ?', [$id]);
                return response()->json($profesor);
                break;
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
}