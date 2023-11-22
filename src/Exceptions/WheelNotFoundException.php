<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class WheelNotFoundException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('Wheel not found', Response::HTTP_NOT_FOUND);
    }
}
