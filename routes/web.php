<?php
use App\Http\Controllers\ViajeroController;
use App\Http\Controllers\ViajeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('viajes', ViajeController::class);
Route::resource('viajeros', ViajeroController::class);
