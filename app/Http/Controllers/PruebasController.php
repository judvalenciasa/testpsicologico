<?php

namespace App\Http\Controllers;

use App\Models\Pruebas;
use Illuminate\Http\Request;

class PruebasController extends Controller
{
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
}
