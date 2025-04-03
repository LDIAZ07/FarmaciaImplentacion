<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    //
    public function venta(){
        return $this->belongsTo(Venta::class, 'id_venta');
    }
}
