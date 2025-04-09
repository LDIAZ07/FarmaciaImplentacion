<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    //
    public function detalles_venta(){
        // Define una relacion uno a muchos
        return $this->hasMany(Venta_Detalle::class, 'id_venta');
    }

    public function devoluciones(){
        // Define una relacion uno a muchos
        return $this->hasMany(Devolucion::class);
    }
}
