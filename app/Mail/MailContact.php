<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @param  array  $details
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info('Enviando correo de contacto', ['details' => $this->details]);

        // Verificar que todos los datos sean cadenas de texto
        if (!is_string($this->details['nombre']) || !is_string($this->details['email']) || !is_string($this->details['message'])) {
            Log::error('Uno de los valores no es una cadena', $this->details);
            throw new \Exception('Uno de los valores no es una cadena.');
        }

        // Crear el HTML del correo directamente aquí
        $htmlContent = '
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Correo de Contacto</title>
            </head>
            <body style="font-family: Arial, sans-serif; color: #333;">
                <h2>Bienvenido a CognitiveSpark</h2>
                <p>Contacto desde la web:</p>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="background-color: #f2f2f2;">
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Nombre</th>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Correo</th>
                        <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Mensaje</th>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd;">' . htmlspecialchars($this->details['nombre']) . '</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">' . htmlspecialchars($this->details['email']) . '</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">' . htmlspecialchars($this->details['message']) . '</td>
                    </tr>
                </table>
            </body>
            </html>
        ';

        return $this->from(env('MAIL_FROM_ADDRESS', 'example@example.com'), env('MAIL_FROM_NAME', 'CognitiveSpark'))
            ->subject('Información CognitiveSpark')
            ->html($htmlContent);  // Usar directamente HTML para enviar el correo
    }
}
