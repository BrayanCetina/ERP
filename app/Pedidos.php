<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = "pedidos";
    protected $fillable = ['id_pedido', 'codigo_pedido', 'id_cliente', 'id_producto', 'cantidad', 'total', 'id_descuento_pedido', 'fecha_solicitud', 'fecha_finalizado', 'fecha_enviado', 'fecha_recibido'];
}
