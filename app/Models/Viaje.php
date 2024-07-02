<?php

namespace App\Models;
use App\Models\Viajero;
use App\Models\Origen;
use App\Models\Destino;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    public function viajero(){
        return $this->belongsTo('App\Models\Viajero');

    }
    public function origens (){
        return $this->hasMany('App\Models\Origen');

    }
    public function destinos (){
        return $this->hasMany('App\Models\Destino');

    }
}
