<?php

namespace App\Http\Controllers;

use App\Models\Metacognicion;
use Illuminate\Http\Request;

class MetacognicionController extends Controller
{
    public function store(Request $request)
    {
        $metacognicion = new Metacognicion();
        $metacognicion->calificacion = $request->input('calificacion');
        $metacognicion->save();

        return redirect()->route('metacognicion.index')->with('success', 'Metacognicion creada correctamente');
    }
}
