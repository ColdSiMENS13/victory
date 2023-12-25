<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class LargeFileSizeException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('Large file size', Response::HTTP_BAD_REQUEST);
    }
}
