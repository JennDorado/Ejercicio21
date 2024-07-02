<?php

namespace App\Models;
use  App\Models\Viajes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajero extends Model
{
    use HasFactory;
    public function viajes (){
        return $this->hasMany('App\Models\Viajes');

    }


}
