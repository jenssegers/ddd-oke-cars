<?php

namespace DDD\OkeCars\Exceptions;

use Exception;

class MijnInfrastructuurException extends Exception
{
    public function __construct(
        string $message = 'Mij.., mij.., mijn infra-str-structuur!!!',
        int $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
