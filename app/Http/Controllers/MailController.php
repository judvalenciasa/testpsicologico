<?php

namespace App\Http\Controllers;

use App\Application\Mail\MailService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
    private const CONTACT_EMAIL = 'cognitivesparkmarista@gmail.com';
    private const SUCCESS_MESSAGE = 'Correo enviado exitosamente.';
    private const ERROR_MESSAGE = 'Hubo un error al enviar el correo. Inténtalo nuevamente.';

    public function __construct(private readonly MailService $mailService)
    {
    }

    // Enviar correo de contacto
    public function enviarCorreo(Request $request)
    {
        $validatedData = $request->validate($this->validationRules());

        try {
            $this->mailService->sendContact(self::CONTACT_EMAIL, $validatedData);
            return $this->successResponse();
        } catch (\Exception $e) {
            Log::error('Error al enviar el correo: ' . $e->getMessage());
            return $this->errorResponse();
        }
    }

    private function validationRules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ];
    }

    private function successResponse(): JsonResponse
    {
        return response()->json(['success' => true, 'message' => self::SUCCESS_MESSAGE]);
    }

    private function errorResponse(): JsonResponse
    {
        return response()->json(['success' => false, 'message' => self::ERROR_MESSAGE], 500);
    }
}
