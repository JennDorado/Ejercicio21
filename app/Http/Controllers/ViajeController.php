<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajes = Viaje::with('viajero')->get();
        return view('viajes.index', compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viajeros = Viajero::all();
        return view('viajes.create', compact('viajeros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $viajes = new Viaje();
        $viajes->codigo = $request->codigo;
        $viajes->num_plazas = $request->num_plazas;
        $viajes->fecha = $request->fecha;
        $viajes->otros_datos = $request->otros_datos;
        $viajes->viajero_id = $request->viajero_id;

        $viajes->save();
        return redirect()->route('viajes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Viaje $viaje)
    {
        $viaje->load('viajero');
        return view('viajes.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viaje $viaje)
    {
        $viajeros = Viajero::all();
        return view('viajes.edit', compact('viaje', 'viajeros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viaje $viaje)
    {

        $viajes->codigo = $request->codigo;
        $viajes->num_plazas = $request->num_plazas;
        $viajes->fecha = $request->fecha;
        $viajes->otros_datos = $request->otros_datos;
        $viajes->viajero_id = $request->viajero_id;
        $viajes->save();
        return redirect()->route('viajes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viaje $viaje)
    {
        $viaje->delete();

        return redirect()->route('viajes.index');
    }
}
