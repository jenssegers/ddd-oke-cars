<?php

namespace DDD\OkeCars\Exceptions;

use Exception;

class HooligansException extends Exception
{
    public function __construct(
        string $message = 'Hooligans!!',
        int $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
