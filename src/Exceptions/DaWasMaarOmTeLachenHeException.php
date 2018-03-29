<?php

namespace DDD\OkeCars\Exceptions;

use Exception;

class DaWasMaarOmTeLachenHeException extends Exception
{
    public function __construct(
        string $message = 'Da was maar om te lachen hé',
        int $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
