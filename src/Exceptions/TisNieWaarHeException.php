<?php

namespace DDD\OkeCars\Exceptions;

use Exception;

class TisNieWaarHeException extends Exception
{
    public function __construct(
        string $message = '\'t Is ni waar hé!',
        int $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
