<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    //
  protected $table= 'productos';
  protected $fillable =[
	'id_producto',
	'producto',
	'descripcion',
	'cantidad',
	'precio_creacion',
	'precio_venta',
	'etapa',
	'fecha_inicio'
  ];
  public $timestamps = false;
}
