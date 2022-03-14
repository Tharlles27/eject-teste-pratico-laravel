<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Veiculo;

class Pedido extends Model
{
    use HasFactory;

    public function veiculo(){
        return $this->belongsTo('App\Models\Veiculo');
    }
}
