<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //
  protected $table= 'producto';
  protected $primaryKey = 'id_producto';
  protected $fillable =[
	'id_producto',
	'producto',
	'descripcion',
	'cantidad',
	'precio_creacion',
	'precio_venta',
	'id_etapa',
	'fecha_inicio',
	'fecha_fin'
  ];
  public $timestamps = false;

}
