<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta_Detalle extends Model
{
    protected $table = 'venta_detalles';
    //
    public function venta(){
        return $this->belongsTo(Venta::class, 'id_venta');
    }

    public function medicamento(){
        return $this->belongsTo(Medicamento::class, 'id_medicamento');
    }
}
