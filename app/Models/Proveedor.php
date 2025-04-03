<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    public function compras(){
        // Define una relacion uno a muchos
        return $this->hasMany(Compra::class);
    }
}
