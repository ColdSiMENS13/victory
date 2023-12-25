<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class FileExtensionIsNotSupportedException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('File extension is not supported', Response::HTTP_BAD_REQUEST);
    }
}
