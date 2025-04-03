<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    public function detalles_venta(){
        // Define una relacion uno a muchos
        return $this->hasMany(Venta_Detalle::class);
    }

    public function devoluciones(){
        // Define una relacion uno a muchos
        return $this->hasMany(Devolucion::class);
    }
}
