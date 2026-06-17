<?php

namespace App\Exceptions;

class TestSessionExpiredException extends TestFlowException
{
    public function __construct(string $message = 'La sesion del test expiro. Vuelve a ingresar para continuar.')
    {
        parent::__construct($message, 419);
    }
}
