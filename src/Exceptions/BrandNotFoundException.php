<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class BrandNotFoundException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('Brand not found', Response::HTTP_NOT_FOUND);
    }
}
