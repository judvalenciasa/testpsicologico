<?php

namespace Tests\Feature;

use App\Mail\MiMailable;
use Tests\TestCase;

class MiMailableTest extends TestCase
{
    public function test_mi_mailable_conserva_from_subject_y_contenido_html(): void
    {
        $mailable = new MiMailable([
            'email' => 'usuario@example.com',
            'contrasena' => 'Clave123',
        ]);

        $mailable->build();

        $mailable->assertFrom('no-reply@cognitivemarista.com');
        $mailable->assertHasSubject('Credenciales CognitiveSpark');
        $mailable->assertSeeInHtml('usuario@example.com');
        $mailable->assertSeeInHtml('Clave123');
        $mailable->assertSeeInHtml('Bienvenido a CognitiveSpark');
    }
}
