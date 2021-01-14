<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use DataTables;
use Carbon\Carbon;
use Storage;
use DB;
use App\productos;
use App\producto;
class MrpController extends Controller
{
   public function cargarTabla(){
        
    $res = productos::select('*');


    return DataTables::eloquent($res)->toJson();
    }

    public function destroy(producto $id_producto)
    {
        $id_producto->delete();
        return response()->json(true);
    }
}
