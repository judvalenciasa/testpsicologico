<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MiMailable extends Mailable
{


    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->from('example@example.com')
            ->subject('Credenciales CognitiveSpark')
            ->html('<p>Email: ' . $this->details['email'] . '</p>' .
                '<p>Contraseña: ' . $this->details['contrasena'] . '</p>');
    }
}
