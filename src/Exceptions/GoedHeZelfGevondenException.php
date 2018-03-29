<?php

namespace DDD\OkeCars\Exceptions;

class GoedHeZelfGevondenException
{
    public function __construct(
        string $message = 'Goed hé, zelf gevonden!',
        int $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
