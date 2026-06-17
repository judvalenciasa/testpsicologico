<?php

namespace App\Exceptions;

use Illuminate\Http\Response;

class TestSubmissionOverloadException extends TestFlowException
{
    public function __construct(string $message = 'Se detecto alto volumen de envio. Espera unos segundos e intenta de nuevo.')
    {
        parent::__construct($message, Response::HTTP_TOO_MANY_REQUESTS);
    }
}
