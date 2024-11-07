<?php

namespace App\Http\Controllers;

use App\Mail\MailContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
    // Enviar correo de contacto
    public function enviarCorreo(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Enviar el correo al destinatario
        try {
            Mail::to('yormanvale@outlook.com')->send(new MailContact($validated));

            // Retornar respuesta de éxito
            return response()->json(['success' => true, 'message' => 'Correo enviado exitosamente.']);
        } catch (\Exception $e) {
            // Registrar error en el log y retornar error en la respuesta
            Log::error('Error al enviar el correo: ' . $e->getMessage());

            return response()->json(['success' => false, 'message' => 'Hubo un error al enviar el correo. Inténtalo nuevamente.'], 500);
        }
    }
}
