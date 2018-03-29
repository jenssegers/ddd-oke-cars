<?php

namespace DDD\OkeCars\Exceptions;

use Exception;

class ZaltGaanJaException extends Exception
{
    public function __construct(
        string $message = 'Zal\'t gaan ja!',
        int $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
