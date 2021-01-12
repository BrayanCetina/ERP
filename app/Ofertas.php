<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ofertas extends Model
{
  protected $table= 'descuento';
  protected $fillable =[
    'id_descuento',
    'nombre_descuento',
    'porcentaje',
    'estado',
    'fecha_creacion'
  ];
  public $timestamps = false;
}