<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function detalle_compras(){
        // Define una relacion uno a muchos
        return $this->hasMany(Compra_Detalle::class);
    }

    //
    public function proovedor(){
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
        // - Laravel asume que la clave foránea en la tabla actual es proveedor_id (siguiendo la convención de nombres).
        // - Si la clave foránea tuviera otro nombre, deberías especificarlo:
        // return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
}
