<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class MiMailable extends Mailable
{
    private const FROM_EMAIL = 'no-reply@cognitivemarista.com';
    private const SUBJECT = 'Credenciales CognitiveSpark';

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->from(self::FROM_EMAIL)
            ->subject(self::SUBJECT)
            ->html($this->buildBodyHtml());
    }

    private function buildBodyHtml(): string
    {
        return '
                <div style="font-family: Arial, sans-serif; color: #333;">
                    <h2>Bienvenido a CognitiveSpark</h2>
                    <p>Estas son tus credenciales:</p>
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr style="background-color: #f2f2f2;">
                            <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Usuario</th>
                            <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Contraseña</th>
                        </tr>
                        <tr>
                            <td style="padding: 10px; border: 1px solid #ddd;">Email</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">' . $this->details['email'] . '</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; border: 1px solid #ddd;">Contraseña</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">' . $this->details['contrasena'] . '</td>
                        </tr>
                    </table>
                    <p>¡Bienvenido!</p>
                </div>
            ';
    }
}
