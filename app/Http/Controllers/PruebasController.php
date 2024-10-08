<?php

namespace App\Http\Controllers;

use App\Models\Pruebas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PruebasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pruebas $pruebas)
    {
        $prueba = Pruebas::first();

        if (!$prueba) {
            return redirect()->back()->with('error', 'No hay pruebas disponibles.');
        }

        return view('private.mostrartest', compact('prueba'));
    }


    /** función para deshabilitar la prueba */
    public function deshabilitarPrueba(Request $request)
    {
        // Obtener la prueba por id
        $prueba = Pruebas::find($request->id_prueba);

        if (!$prueba) {
            return response()->json(['error' => 'No hay pruebas disponibles.'], 404);
        }

        // Cambiar el estado
        $prueba->estado = $prueba->estado == 1 ? 0 : 1;
        $prueba->save();

        // Devolver una respuesta JSON
        return response()->json(['success' => true, 'nuevoEstado' => $prueba->estado]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pruebas $pruebas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pruebas $pruebas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pruebas $pruebas)
    {
        //
    }
}
