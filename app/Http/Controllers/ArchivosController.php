<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    public function store(Request $request)
    {   
        $user = Auth::user();
    
    // Validar que el archivo es un PDF
    $request->validate([
        'pdf' => 'required|mimes:pdf|max:2048', // Tamaño máximo de 2MB
    ]);

    // Crear el nombre personalizado del archivo
    $fileName = $user->name . "_" . Carbon::now()->format('Y-m-d') . ".pdf";

    // Almacenar el archivo en el directorio 'storage/app/public/pdfs/{documento_identificacion}' con el nombre especificado
    $filePath = $request->file('pdf')->storeAs('pdfs/' . $user->documento_identificacion, $fileName, 'public');

    // Guardar el nombre del archivo en la base de datos
    $pdf = new Archivo();
    $pdf->file_name = $fileName;  // Guardar el nombre personalizado en la base de datos
    $pdf->file_path = $filePath;  // Guardar la ruta completa del archivo
    $pdf->save();

    return back()->with('success', 'Archivo PDF cargado correctamente.');
    }
}
