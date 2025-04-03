<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra_Detalle extends Model
{
    //
    public function compra(){
        return $this->belongsTo(Compra::class, 'compra_id');
    }

    public function medicamento(){
        return $this->belongsTo(Medicamento::class, 'medicamento_id');
    }
}
