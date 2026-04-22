<?php

namespace App\Exceptions;

use RuntimeException;

class ExternalServiceUnavailableException extends RuntimeException
{
    public function __construct(string $message = 'Servicio externo temporalmente no disponible.')
    {
        parent::__construct($message);
    }
}
