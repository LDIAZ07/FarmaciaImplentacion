<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    //
    public function detalles_venta(){
        // Define una relacion uno a muchos
        return $this->hasMany(Venta_Detalle::class);
    }

    public function detalles_compra(){
        // Define una relacion uno a muchos
        return $this->hasMany(Compra_Detalle::class);
    }
}
