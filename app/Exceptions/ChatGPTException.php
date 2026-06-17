<?php

namespace App\Exceptions;

use Exception;

class ChatGPTException extends Exception
{
    public function __construct($message = "Error en la respuesta de ChatGPT.", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
