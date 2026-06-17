<?php

namespace App\Exceptions;

use RuntimeException;

class TestFlowException extends RuntimeException
{
    public function __construct(
        string $message = 'No fue posible completar el flujo del test.',
        private int $status = 409
    ) {
        parent::__construct($message, $status);
    }

    public function statusCode(): int
    {
        return $this->status;
    }
}
