<?php

namespace App\Http\Controllers;

use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajero = Viajero::all();
        return view('viajeros.index', compact('viajero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viajero = Viajero::all();
        return view('viajeros.create', compact('viajero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $viajero = new Viajero();
        $viajero->dni = $request->dni;
        $viajero->nombre = $request->nombre;
        $viajero->direccion = $request->direccion;
        $viajero->telefono = $request->telefono;
        $viajero->save();


        return redirect()->route('viajeros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Viajero $viajero)
    {
        return view('viajeros.show', compact('viajero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viajero $viajero)
    {
        return view('viajeros.edit', compact('viajero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viajero $viajero)
    {
        $viajero->dni = $request->dni;
        $viajero->nombre = $request->nombre;
        $viajero->direccion = $request->direccion;
        $viajero->telefono = $request->telefono;
        $viajero->save();

        return redirect()->route('viajeros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viajero $viajero)
    {
        $viajero->delete();
        return redirect()->route('viajeros.index');
    }
}
