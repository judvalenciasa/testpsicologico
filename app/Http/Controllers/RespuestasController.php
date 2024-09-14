<?php

namespace App\Http\Controllers;

use App\Models\Respuestas;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class RespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function guardarRespuesta(Request $request, $user, $pregunta_id, $respuestas, $respuesta_chatgpt)
    {

        // Guardar o actualizar la respuesta
        Respuestas::updateOrCreate(
            ['id_usuario' => $user->id_usuario, 'id_pregunta' => $pregunta_id],
            ['respuesta' => $respuestas, 'calificacion_respuesta' => $respuesta_chatgpt]
        );
    }

    /**
     * Display a listing of the resource.
     */
    public function registrar_respuesta($respuesta)
    {


        return $respuesta;
    }

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
    public function show(Respuestas $respuestas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Respuestas $respuestas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Respuestas $respuestas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Respuestas $respuestas)
    {
        //
    }
}
