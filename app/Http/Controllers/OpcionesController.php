<?php

namespace App\Http\Controllers;

use App\Models\Opciones;

class OpcionesController extends Controller
{
    //buscar opcion por id
    public function mostrarOpcionPorId($id)
    {
        $opcion = Opciones::find($id);
        return response()->json($opcion);
    }
}
