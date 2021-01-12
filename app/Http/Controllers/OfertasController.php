<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ofertas;
use DataTables;
use Carbon\Carbon;

class ofertasController extends Controller
{
  public function ofertasVistaTable(){
    $ofertasD=ofertas::select('id_descuento','nombre_descuento','porcentaje','estado','fecha_creacion');
    return DataTables::eloquent($ofertasD)->toJson();
  }

    public function ofertasVistaAgregar(Request $request){
      $fecha = Carbon::now();
      ofertas::create([
        'nombre_descuento' => $request->nombre,
        'porcentaje'=> $request->Porcentaje,
        'estado' => $request->Estado,
        'fecha_creacion' => $fecha
      ]);
    }
}