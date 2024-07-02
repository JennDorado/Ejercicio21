<?php

namespace App\Models;
use App\Models\Viaje;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    use HasFactory;
    public function viaje (){
        return $this->belongsTo('App\Models\Viaje');

    }
}
